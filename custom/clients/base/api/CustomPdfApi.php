<?php

class CustomPdfApi extends SugarApi {

    public function registerApiRest() {
        return array(
            'customDownloadFile' => array(
                'reqType' => 'GET',
                'noLoginRequired' => true,
                'path' => array('customdownloadfile'),
                'pathVars' => array('module', ''),
                'method' => 'downloadFile',
                'shortHelp' => 'This method Downloads a file',
                'longHelp' => '',
                'rawPostContents' => true,
        ));
    }

    public function downloadFile($api) {

        global $current_user;

        if (empty($current_user) || empty($current_user->id)) {
            $current_user = new User();
            $current_user->getSystemUser(); // or any other user bean
        }

        $case_id = $api->getRequest()->request['id'];
        $this->bean = BeanFactory::getBean('Cases', $case_id);
        $this->file_system = new Symfony\Component\Filesystem\Filesystem();
        $this->postfix = ' - Attachments';

        $this->executeBulkDownload();
        $this->prepareCasesPDF($this->bean);
    }

    protected function download($filePath) {

        require_once 'include/utils/zip_utils.php';
        require_once 'include/download_file.php';

        $download = new DownloadFile();
        $file_name = $filePath . "/attachments.zip";

        if (sugar_is_dir($filePath)) {

            zip_dir($filePath, $file_name);
            $fileInfo = array(
                'name' => !empty($this->bean->name) ? $this->bean->name . ".zip" : "attachments.zip",
                'path' => $file_name,
            );
            $download->outputFile(true, $fileInfo);
        } else if (sugar_is_file($filePath)) {

            $fileInfo = array(
                'name' => "attachments.zip",
                'path' => $file_name,
            );
            $download->outputFile(true, $fileInfo);
        }
    }

    protected function prepareCasesPDF($bean) {

        $pdf = new Sugarpdf();
        $pdf->setPageOrientation('L');
        $pdf->setFont('helvetica', '', 10);
        $pdf->SetMargins(5, 5, 5);
        $pdf->AddPage();
        $html = '';

        $html = $this->prepareHtmlFromMetaData($bean);
        $html.=$this->prepareRelatedCallsPDF('calls');
        $html.=$this->prepareRelatedMeetingPDF('meetings');
        $html.=$this->prepareRelatedTaskPDF('tasks');
        $html.=$this->prepareRelatedNotesPDF('notes');
        $html.=$this->prepareRelatedContactPDF('contacts');
        $html.=$this->prepareRelatedEmailsPDF('emails');
        $html.=$this->prepareRelatedServiceRequestItemsPDF('cases_mv_srvreq_1');

        $file_name = !empty($this->bean->name) ? $this->bean->name . ".pdf" : "warrantyPDF.pdf";

        $pdf->writeHTML($html, true, false, true, false, '');
        ob_clean();

        $parent_folder = 'upload/WarrantyPDF';
        $child_folder = $parent_folder . "/" . "$bean->id";


        if (!sugar_is_dir($parent_folder)) {

            $this->file_system->mkdir('upload/WarrantyPDF');
        }

        if (!sugar_is_dir($child_folder)) {

            $this->file_system->mkdir($child_folder);
        }

        $pdf->Output($child_folder . "/" . $file_name, 'F');
        $this->download($child_folder);
        $this->file_system->remove($child_folder);
        exit();
    }

    function executeBulkDownload() {

        $this->fetchAttachmentsRecursively('calls', 'notes');
        $this->fetchAttachmentsRecursively('calls', 'calls_mv_attachments');
        $this->fetchAttachmentsRecursively('cases_mv_attachments');
        $this->fetchAttachmentsRecursively('meetings', 'notes');
        $this->fetchAttachmentsRecursively('meetings', 'meetings_mv_attachments');
        $this->fetchAttachmentsRecursively('tasks', 'tasks_mv_attachments');
        $this->fetchAttachmentsRecursively('tasks', 'notes');
        $this->fetchAttachmentsRecursively('notes');
        $this->fetchAttachmentsRecursively('contacts', 'notes');
        $this->fetchAttachmentsRecursively('contacts', 'contacts_mv_attachments');
        $this->fetchAttachmentsRecursively('cases_mv_srvreq_1', 'mv_srvreq_mv_attachments');
        $this->fetchAttachmentsRecursively('emails', 'attachments');
    }

    function dowloadRelatedWarrantyAttachments(SugarBean $bean, $params) {

        if (!empty($bean)) {

            $parent_folder = 'upload/WarrantyPDF';
            $child_folder = $parent_folder . "/" . "$bean->id";
            $recusrive_dir = "";

            if (!empty($params['second_level_module_name'])) {
                // two level download
                $result = $this->generateFileCopy($params['attachment_id'], $params['attachment_name']);

                $final_directory = "";

                if (!sugar_is_dir($parent_folder)) {

                    $this->file_system->mkdir('upload/WarrantyPDF');
                }

                if (!sugar_is_dir($child_folder)) {

                    $this->file_system->mkdir($child_folder);
                }

                if (!sugar_is_dir($child_folder . "/" . $params['first_level_module_name'])) {
                    $this->file_system->mkdir($child_folder . "/" . $params['first_level_module_name']);
                }

                if (!sugar_is_dir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'])) {
                    $this->file_system->mkdir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name']);
                }

                if (!sugar_is_dir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'] . "/" . $params['second_level_module_name'])) {
                    $this->file_system->mkdir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'] . "/" . $params['second_level_module_name']);
                }

                if (!sugar_is_dir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'] . "/" . $params['second_level_module_name'] . "/" . $params['attachment_record_name'])) {
                    $this->file_system->mkdir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'] . "/" . $params['second_level_module_name'] . "/" . $params['attachment_record_name']);
                }

                $final_directory = $child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'] . "/" . $params['second_level_module_name'] . "/" . $params['attachment_record_name'];

                if (!empty($result)) {
                    $this->file_system->rename('upload/' . $result, $final_directory . '/' . $result, true);
                } else {
                    if (isset($params['upload_id']) && !empty($params['upload_id'])) {
                        $result = $this->generateFileCopy($params['upload_id'], $params['attachment_name']);
                        if (!empty($result)) {
                            $this->file_system->rename('upload/' . $result, $final_directory . '/' . $result, true);
                        }
                    }
                }
            } else if (!empty($params['first_level_module_name'])) {

                $result = $this->generateFileCopy($params['attachment_id'], $params['attachment_name']);

                $final_directory = "";

                if (!sugar_is_dir($parent_folder)) {

                    $this->file_system->mkdir('upload/WarrantyPDF');
                }

                if (!sugar_is_dir($child_folder)) {

                    $this->file_system->mkdir($child_folder);
                }

                if (!sugar_is_dir($child_folder . "/" . $params['first_level_module_name'])) {
                    $this->file_system->mkdir($child_folder . "/" . $params['first_level_module_name']);
                }

                if (!sugar_is_dir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'])) {
                    $this->file_system->mkdir($child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name']);
                }

                $final_directory = $child_folder . "/" . $params['first_level_module_name'] . "/" . $params['first_level_record_name'];

                if (!empty($result)) {
                    $this->file_system->rename('upload/' . $result, $final_directory . '/' . $result, true);
                }
            }
        }
    }

    public function fetchAttachmentsRecursively($first_level_link_field, $second_level_link_field = false) {

        if (!empty($first_level_link_field)) {

            $first_level_related_beans = $this->fetchRelatedRecords($first_level_link_field);
            $formatted_first_level_related_beans = $this->formatRelatedBeans($first_level_related_beans);
            $i = 0;
            if ($second_level_link_field != false) {

                $params = [];
                foreach ($first_level_related_beans as $key => $bean) {

                    if ($bean->load_relationship($second_level_link_field)) {

                        $lang = return_module_language('en_us', $bean->module_name);
                        $params['first_level_module_name'] = $lang['LBL_MODULE_NAME'] . $this->postfix;
                        $params['first_level_record_name'] = $bean->name;
                        $second_level_related_beans = $bean->$second_level_link_field->getBeans();

                        foreach ($second_level_related_beans as $key => $bean) {
                            $lang = return_module_language('en_us', $bean->module_name);
                            $params['second_level_module_name'] = $lang['LBL_MODULE_NAME'];
                            break;
                        }

                        $formatted_first_level_related_beans[$i]['attachments'] = $this->formatRelatedBeans($second_level_related_beans);
                        foreach ($formatted_first_level_related_beans[$i]['attachments'] as $bean_array) {
                            $params['attachment_record_name'] = $bean_array['name'];
                            $params['attachment_name'] = $bean_array['filename'];
                            $params['attachment_id'] = $bean_array['id'];
                            if (isset($bean_array['upload_id']) && !empty($bean_array['upload_id'])) {
                                $params['upload_id'] = $bean_array['upload_id'];
                            }
                            $this->dowloadRelatedWarrantyAttachments($this->bean, $params);
                        }
                    }

                    $i++;
                }
            } else {
                $params = [];
                foreach ($first_level_related_beans as $key => $bean) {

                    $lang = return_module_language('en_us', $bean->module_name);
                    $params['first_level_module_name'] = $lang['LBL_MODULE_NAME'] . $this->postfix;
                    break;
                }

                foreach ($formatted_first_level_related_beans as $bean_array) {
                    $params['first_level_record_name'] = $bean_array['name'];
                    $params['attachment_record_name'] = $bean_array['name'];
                    $params['attachment_name'] = $bean_array['filename'];
                    $params['attachment_id'] = $bean_array['id'];
                    $this->dowloadRelatedWarrantyAttachments($this->bean, $params);
                }
            }
        }
    }

    protected function formatRelatedBeans($beans) {
        if (empty($beans))
            return;

        $formatted = [];
        foreach ($beans as $bean) {
            $formatted[] = PdfManagerHelper::parseBeanFields($bean, false);
        }

        return $formatted;
    }

    function fetchRelatedRecords($link) {
        if ($this->bean->load_relationship($link)) {
            return $this->bean->$link->getBeans();
        }
    }

    function prepareHtmlFromMetaData($bean, $view = 'record') {

        $special_fields = array(
            'email-recipients',
            'from',
        );

        if (!empty($bean->id)) {

            if ($this->ss instanceof Sugar_Smarty != TRUE) {
                $this->ss = new Sugar_Smarty();
            }

            if (sugar_is_file("custom/modules/$bean->module_name/clients/base/views/$view/$view.php")) {
                require "custom/modules/$bean->module_name/clients/base/views/$view/$view.php";
            } else if (sugar_is_file("modules/$bean->module_name/clients/base/views/$view/$view.php")) {
                require "modules/$bean->module_name/clients/base/views/$view/$view.php";
            }

            $metadata = $viewdefs[$bean->module_name]['base']['view'][$view];
            $two_column_meta = array();

            foreach ($metadata['panels'] as $panel) {

                $panel_name = isset($panel['label']) ? $panel['label'] : $panel['name'];
                if ($panel['name'] == 'panel_header') {//|| $panel['name'] == 'panel_hidden') {
                    continue;
                }

                $two_column_meta[$panel_name];
                foreach ($panel['fields'] as $level_one_fields) {

                    if (isset($level_one_fields['fields']) && $level_one_fields['type'] == 'fieldset') {
                        foreach ($level_one_fields['fields'] as $two_level_field) {
                            if ($this->skipMetaFields($level_one_fields)) {
                                //add generic checks here
                                continue;
                            }

                            if (in_array($level_one_fields['type'], $special_fields)) {
                                //$custom_field_name=$this->handleEmailFields($level_one_fields); 
                            } else
                                $two_column_meta[$panel_name][] = $two_level_field;
                        }

                        if (in_array($level_one_fields['type'], $special_fields)) {
                            
                        }
                    } else {
                        if ($this->skipMetaFields($level_one_fields)) {
                            continue;
                        }
                        $two_column_meta[$panel_name][] = $level_one_fields;
                    }
                }
            }

            //$GLOBALS['log']->fatal('two col meta',$two_column_meta);

            foreach ($two_column_meta as $panel_key => $panel_val) {
                if (count($panel_val) % 2 != 0) {
                    $two_column_meta[$panel_key][] = array();
                } else {
                    continue;
                }
            }

            $lang = return_module_language('en_us', $bean->module_name);
            $this->ss->assign('panels', $two_column_meta);
            $this->ss->assign('lang', $lang);
            $this->ss->assign('bean', $bean);
            $html = $this->ss->fetch('custom/include/Helpers/tpl/metadata_to_html.tpl');

            return $html;
        }
    }

    private function skipMetaFields($meta_field_defs) {

        if (!empty($meta_field_defs)) {
            $skip_fields = array();

            $skip_fields['type'] = array(
                'id',
                //'duration',
                'recurrence',
                'participants',
                'email-attachments',
                    //'from',
                    //'email-recipients',
            );

            $skip_fields['name'] = array(
                'parent_id',
                'parent_type',
            );

            $flag_type = false;
            foreach ($skip_fields['type'] as $type => $val) {
                if ($val == $meta_field_defs['type']) {
                    $flag_type = true;
                }
            }

            $flag_name = false;

            foreach ($skip_fields['name'] as $type => $val) {
                if ($val == $meta_field_defs['name']) {
                    $flag_name = true;
                }
            }

            return $flag_name || $flag_type;
        }
    }

    private function prepareRelatedPDF($link) {

        if (!empty($link)) {
            $related_bean = $this->fetchRelatedRecords($link);
            $count = count($related_bean);
            $html = "";
            foreach ($related_bean as $bean) {
                $html.=$this->prepareHtmlFromMetaData($bean);
            }

            return $html;
        }
        return '';
    }

    private function prepareRelatedCallsPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    private function prepareRelatedMeetingPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    private function prepareRelatedTaskPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    private function prepareRelatedNotesPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    private function prepareRelatedContactPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    private function prepareRelatedEmailsPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    private function prepareRelatedAttachmentPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    private function prepareRelatedServiceRequestItemsPDF($link) {
        return $this->prepareRelatedPDF($link);
    }

    public function generateFileCopy($file_id, $file_name) {
        $final_file = "";
        if (!SugarAutoloader::fileExists("upload/$file_id")) {
            return $final_file;
        }
        $uploadFile = new UploadFile('filename_file');
        $uploadFile->temp_file_location = "upload/$file_id";
        $contents = $uploadFile->get_file_contents();

        $file_info = new finfo(FILEINFO_MIME_TYPE);
        $mime_type = $file_info->buffer($contents);
        $ext = explode("/", $mime_type);
        $uploadFile->file_ext = $ext[1];
        if (!empty($file_name)) {
            $final_file = $file_name;
        } else {
            $final_file = $file_id . "." . $uploadFile->file_ext;
        }
        $uploadFile->set_for_soap($final_file, $contents);
        $filepath = $uploadFile->get_upload_path($final_file);
        $uploadFile->final_move($final_file);
        return $final_file;
    }

}
