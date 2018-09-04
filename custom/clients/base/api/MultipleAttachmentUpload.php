<?php

class MultipleAttachmentUpload extends FileApi {

    public function registerApiRest() {
        return array(
            'MultipleAttachmentUpload' => array(
                'noLoginRequired' => true,
                'reqType' => 'POST',
                'path' => array('multipleupload'),
                'pathVars' => array('module', ''),
                'method' => 'customUploadFile',
                'shortHelp' => 'This method Uploads multiple files as temp notes',
                'rawPostContents' => true,
        ));
    }

    public function customUploadFile(ServiceBase $api, array $args) {

        $temporary = true;
        $index = count($_FILES['filename']['name']);
        $args['temp'] = $temporary;
        $args['field'] = 'filename';

        $field = $args['field'];

        $prefix = empty($args['prefix']) ? '' : $args['prefix'];

        $filesIndex = $prefix . $field;

        $notes_collection = array();

        for ($file = 0; $file < $index; $file++) {
            $field = 'filename' . $file;
            $filesIndex = $field;
            $_FILES[$field] = array();
            foreach ($_FILES['filename'] as $key => $val) {
                $_FILES[$field][$key] = $val[$file];
            }

            $bean = BeanFactory::getBean("Notes");
            $bean->filename = $_FILES[$field]["name"];

            if (empty($_FILES[$filesIndex])) {
                $this->deleteIfFails($bean, $args);
                $this->checkPostRequestBody();
                throw new SugarApiExceptionMissingParameter("Incorrect field name for attachement: $filesIndex");
            }
            $def = $bean->field_defs['filename'];
            if (isset($def['type']) && ($def['type'] == 'image' || $def['type'] == 'file')) {
                $sfh = new SugarFieldHandler();
                $sf = $sfh->getSugarField($def['type']);
                if ($sf) {
                    if ($def['type'] == 'file') {
                        if (!isset($def['docType'])) {
                            $def['docType'] = 'Sugar';
                        }
                        $_SESSION['user_error_message'] = array();

                        if (!empty($_FILES[$filesIndex]) && empty($_FILES[$filesIndex . '_file'])) {
                            $_FILES[$filesIndex . '_file'] = $_FILES[$filesIndex];
                            unset($_FILES[$filesIndex]);
                            $filesIndex .= '_file';
                        }
                    }

                    $dl = $this->getDownloadFileApi($api);
                    $mime = $dl->getMimeType($_FILES[$filesIndex]['tmp_name']);
                    $_FILES[$filesIndex]['type'] = $mime;

                    if (isset($def['docType']) && !isset($args[$prefix . $def['docType']])) {
                        $args[$prefix . $def['docType']] = $mime;
                    }
                    $sf->save($bean, $args, $field, $def, $prefix);
                    // Handle errors
                    if (!empty($sf->error)) {
                        $this->deleteIfFails($bean, $args);
                        throw new SugarApiExceptionRequestTooLarge($sf->error);
                    }
                    $fileinfo = array();
                    if ($temporary) {
                        $fileinfo['guid'] = $bean->$field;
                    } else {
                        $this->saveBean($bean, $api, $args);
                        $fileinfo = $this->getFileInfo($bean, $field, $api);
                        unset($fileinfo['path']);
                    }
                    // This is a good return
                    array_push($notes_collection, array(
                        $field => $fileinfo,
                        'record' => $this->formatBean($api, $args, $bean)
                    ));
                } else {
                    throw new SugarApiExceptionError("Unexpected field type: " . $def['type']);
                }
            }
        }
        return $notes_collection;
    }

}
