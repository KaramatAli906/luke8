<?php

class CustomOpportunityPdfApi extends CustomPdfApi {

    public function registerApiRest() {
        return array(
            'customOpportunityDownloadFile' => array(
                'reqType' => 'GET',
                'noLoginRequired' => true,
                'path' => array('customOpportunityDownloadFile'),
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
        $opportunity_id = $api->getRequest()->request['id'];
        $this->bean = BeanFactory::getBean('Opportunities', $opportunity_id);
        $this->file_system = new Symfony\Component\Filesystem\Filesystem();
        $this->postfix = ' - Attachments';

        $this->executeBulkDownload();
        $this->prepareCasesPDF($this->bean);
    }

    function executeBulkDownload() {

        $this->fetchAttachmentsRecursively('opportunities_mv_attachments');
        $this->fetchAttachmentsRecursively('notes');
        $this->fetchAttachmentsRecursively('emails','attachments');
    }

    //this will prepare html and download it to pdf and attachment collectivley as a zip
    public function prepareCasesPDF($bean) {

        $pdf = new Sugarpdf();
        $pdf->setPageOrientation('L');
        $pdf->setFont('helvetica', '', 10);
        $pdf->SetMargins(5, 5, 5);
        $pdf->AddPage();
        $html = '';

        $html = $this->prepareHtmlFromMetaData($bean);
        $html.=$this->prepareRelatedPDF('notes');
        $html.=$this->prepareRelatedPDF('opportunities_mv_attachments');
        $html.=$this->prepareRelatedPDF('opportunities_cases_1');
        $html.=$this->prepareRelatedPDF('emails');
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

    //it will return the html of the realted module using link
    public function prepareRelatedPDF($link) {

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


}
