<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

/**
 * Copyright (c) 2015 Rolustech
 * All rights reserved.
 * */
require_once 'include/api/SugarApi.php';
require_once 'custom/modules/RT_DocuSign/SendDocumentsForSignature.php';
require_once 'custom/modules/RT_DocuSign/lib/src/service/DocuSign_RequestSignatureService.php';

class RT_DocuSign_Api extends SugarApi {

    public function registerApiRest() {
        return array(
            'SendForSignature' => array(
                'reqType' => 'GET',
                'path' => array('RT_DocuSign', 'sendforsign'),
                'pathVars' => array('', '', 'data'),
                'method' => 'SendForSignature',
                'shortHelp' => 'Some help text'
            ),
            'docuSignTemplates' => array(
                'reqType' => 'GET',
                'path' => array('RT_DocuSign', 'docuSignTemplates'),
                'pathVars' => array('', '', 'data'),
                'method' => 'docuSignTemplates',
                'shortHelp' => 'Some help text'
            ),
            'docuSignTemplate' => array(
                'reqType' => 'GET',
                'path' => array('RT_DocuSign', 'docuSignTemplate'),
                'pathVars' => array('', '', 'data'),
                'method' => 'docuSignTemplate',
                'shortHelp' => 'Some help text'
            ),
            'docuSignTemplateFields' => array(
                'reqType' => 'GET',
                'path' => array('RT_DocuSign', 'docuSignTemplateFields'),
                'pathVars' => array('', '', 'data'),
                'method' => 'docuSignTemplateFields',
                'shortHelp' => 'Some help text'
            ),
            'docuSignSaveFieldsMapping' => array(
                'reqType' => 'GET',
                'path' => array('RT_DocuSign', 'docuSignSaveFieldsMapping'),
                'pathVars' => array('', '', 'data'),
                'method' => 'docuSignSaveFieldsMapping',
                'shortHelp' => 'Some help text'
            ),
        );
    }

    public function docuSignSaveFieldsMapping($api, $args) {
        $data = $args;
        unset($data['__sugar_url']);
        if (!empty($data['sync_template_list'])) {
            if (isset($data['sync_template_list'])) {
                $list_id = $data['sync_template_list'];
                unset($data['sync_template_list']);
            }
            $list_id = str_replace("-", "", $list_id);
            $admin = new Administration();
            $admin->retrieveSettings();
            $admin->saveSetting("docusign", $list_id, json_encode($data));
            return true;
        }
        return false;
    }

    public function docuSignTemplateFields($api, $args) {
        $templateId = $args['template_id'];
        $contact = BeanFactory::getBean('Contacts');
        $contacts = $this->_cleanContact($contact->field_defs);

        $account = BeanFactory::getBean('Accounts');
        $accounts = $this->_cleanAccount($account->field_defs);

        $old = array('contacts' => array(), 'accounts' => array());
        $admin = new Administration();
        $admin->retrieveSettings('docusign', true);
        if (!empty($templateId)) {
            $list_fields = self::getTemplateFields($templateId);
            $list_id = str_replace("-", "", $templateId);
            if (!empty($admin->settings['docusign_' . $list_id])) {
                $old = !is_array($admin->settings['docusign_' . $list_id]) ? json_decode($admin->settings['docusign_' . $list_id]) : (object) $admin->settings['docusign_' . $list_id];
            }
        }
        return array('docusign' => $list_fields, 'contacts' => $contacts, 'accounts' => $accounts, 'old' => $old);
    }

    function getDocuSignClient() {
        $config = new Configurations();
        $creds = $config->getCredientials();
        $client = new DocuSign_Client($creds);
        if ($client->hasError()) {
            echo json_encode(array(
                'error' => $client->errorMessage
            ));
            return;
        }
        return $client;
    }

    public function docuSignTemplates($api, $args) {
        $client = $this->getDocuSignClient();
        $signature_service = new DocuSign_RequestSignatureService($client);
        $templates = $signature_service->signature->getDocuSignTemplates();

        $saved_templates = array();
        foreach ($templates->envelopeTemplates as $template) {
            $saved_templates[] = array(
                'id' => $template->templateId,
                'name' => $template->name,
            );
        }

        return $saved_templates;
    }

    public function docuSignTemplate($api, $args) {
        $client = $this->getDocuSignClient();
        $roles = array();
        $name = "";
        if (!empty($args['template_id'])) {
            $signature_service = new DocuSign_RequestSignatureService($client);
            $template_date = $signature_service->signature->getDocuSignTemplate($args['template_id']);
            foreach ($template_date->recipients->signers as $template) {
                $roles[] = $template->roleName;
            }
        }
        $data['name'] = $name;
        $data['roles'] = $roles;
        return $data;
    }

    public function getTemplateFields($template_id) {
        $client = $this->getDocuSignClient();
        $fieldsLabel = array();
        if (!empty($template_id)) {
            $signature_service = new DocuSign_RequestSignatureService($client);
            $template_date = $signature_service->signature->getDocuSignTemplate($template_id);
            foreach ($template_date->recipients->signers as $template) {
                foreach ($template->tabs as $tabName => $tab) {
                    if ($tabName == "textTabs") {
                        foreach ($tab as $field) {
                            if (!isset($field->stampType)) {
                                if (!in_array($field->tabLabel, $fieldsLabel))
                                    $fieldsLabel[] = $field->tabLabel;
                            }
                        }
                    }
                }
            }
        }
        return $fieldsLabel;
    }

    public function SendForSignature($api, $args) {
        $send_docs_for_sig = new sendDocumentsForSignature();
        $send_docs_for_sig->sugarRootUrl = $args['sugarRoot'];
        $send_docs_for_sig->returnURL = $args['returnUrl'];
        $send_docs_for_sig->contacts = $args['contacts'];
        /*
         * Checking if file exist
         */
        foreach ($args['documents'] as $key => $value) {
            $uploadFile = new UploadFile();
            $uploadFile->temp_file_location = "upload/" . $value['revisionId'];
            $file_contents = $uploadFile->get_file_contents();
            if (!$file_contents) {
                unset($args['documents'][$key]);
            }
        }
        $args['documents'] = array_values($args['documents']);

        if ($args['documents_type'] == 'Sugar Attachments') {
            $send_docs_for_sig->doucments = $args['documents'];
        }

        $send_docs_for_sig->notificationsURL = $args['notificationsurl'];
        $send_docs_for_sig->signed_attachment_type = $args['signed_attachment_type'];
        $send_docs_for_sig->signed_attachment_name = $args['signed_attachment_name'];
        $send_docs_for_sig->template_id = $args['template_id'];
        $send_docs_for_sig->documents_type = $args['documents_type'];


        $sender_view_url = $send_docs_for_sig->sendForSignature();
        return json_encode(array(
            'url' => $sender_view_url
        ));
    }

    private function _cleanContact($data = array()) {
        $exclude_field_names = array('email', 'team_id', 'date_entered', 'date_modified', 'deleted', 'my_favorite', 'following', 'last_sync_date');
        $exclude_field_types = array('id', 'fullname', 'image', 'assigned_user_name', 'relate', 'link');
        $filtered_data = array('' => 'Do Not Sync');
        if (!empty($data) && is_array($data) && count($data) > 0) {
            foreach ($data as $key => $row) {
                if (!in_array($row['type'], $exclude_field_types) && !in_array($row['name'], $exclude_field_names)) {
                    $filtered_data[$key] = translate($row['vname'], 'Contacts') . ' (' . $row['name'] . ')';
                }
            }
        }
        return $filtered_data;
    }

    private function _cleanAccount($data = array()) {
        $exclude_field_names = array('email', 'team_id', 'date_entered', 'date_modified', 'deleted', 'my_favorite', 'following', 'last_sync_date');
        $exclude_field_types = array('id', 'fullname', 'image', 'assigned_user_name', 'relate', 'link');
        $filtered_data = array('' => 'Do Not Sync');
        if (!empty($data) && is_array($data) && count($data) > 0) {
            foreach ($data as $key => $row) {
                if (!in_array($row['type'], $exclude_field_types) && !in_array($row['name'], $exclude_field_names)) {
                    $filtered_data[$key] = translate($row['vname'], 'Accounts') . ' (' . $row['name'] . ')';
                }
            }
        }
        return $filtered_data;
    }

}

