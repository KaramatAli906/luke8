<?php

/*
 * Copyright 2013 DocuSign Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once 'DocuSign_Service.php';
require_once 'DocuSign_Resource.php';

class DocuSign_RequestSignatureService extends DocuSign_Service {

    public $signature;

    /**
     * Constructs the internal representation of the DocuSign Request Signature service.
     *
     * @param DocuSign_Client $client
     */
    public function __construct(DocuSign_Client $client) {
        parent::__construct($client);
        $this->signature = new DocuSign_RequestSignatureResource($this);
    }

}

class DocuSign_RequestSignatureResource extends DocuSign_Resource {

    public function __construct(DocuSign_Service $service) {
        parent::__construct($service);
    }

    private function getDocuSignClient() {
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

    private function getTemplateFields($template_id) {
        $client = $this->getDocuSignClient();
        $fieldsLabel = array();
        if (!empty($template_id)) {
            $signature_service = new DocuSign_RequestSignatureService($client);
            $template_date = $signature_service->signature->getDocuSignTemplate($template_id);
            foreach ($template_date->recipients->signers as $template) {
                foreach ($template->tabs as $key => $tab) {
                    foreach ($tab as $field) {
                        if (!isset($field->stampType)) {
                            $fieldsLabel[$template->roleName][$key][] = $field->tabLabel;
                        }
                    }
                }
            }
        }
        return $fieldsLabel;
    }

    public function createEnvelopeFromTemplate($emailSubject
    , $emailBlurb
    , $templateId
    , $status = "created"
    , $templateRoles = array()
    , $eventNotifications = array()
    , $useSobo = false) {
        $list_id = str_replace("-", "", $templateId);
        $admin = new Administration();
        $admin->retrieveSettings('docusign', true);
        $docuSignFields = $admin->settings['docusign_' . $list_id];

        $contactFields = $docuSignFields['contacts'];
        $accountFields = $docuSignFields['accounts'];

        $url = $this->client->getBaseURL() . '/envelopes';
        $rolesFields = $this->getTemplateFields($templateId);
        $data = array(
            "emailSubject" => $emailSubject,
            "emailBlurb" => $emailBlurb,
            "templateId" => $templateId,
            "status" => $status,
        );
        if (isset($templateRoles) && sizeof($templateRoles) > 0) {
            $templateRolesList = array();
            foreach ($templateRoles as $templateRole) {
                $contactId = $templateRole->getId();
                $contactRecord = new Contact();
                $contactRecord->retrieve($contactId);

                $accountRecord = new Account();
                $accountRecord->retrieve($contactRecord->account_id);
                $role = array(
                    "roleName" => $templateRole->getRolename(),
                    "name" => $templateRole->getName(),
                    "email" => $templateRole->getEmail()
                );
                if (empty($role['roleName'])) {
                    $role['roleName'] = $role['name'];
                }
                $roleTab = array();
                foreach ($rolesFields[$role['roleName']] as $tabName => $tabValue) {
                    foreach ($tabValue as $fieldName) {
                        $contactfieldName = str_replace(" ", "", $fieldName);
                        $cvalue = $contactFields[$contactfieldName];
                        if (!empty($cvalue)) {
                            if (!empty($contactRecord->$cvalue)) {
                                $roleTab[$tabName][] = array(
                                    "tabLabel" => $fieldName,
                                    "value" => $contactRecord->$cvalue,
                                );
                            }
                        } else {
                            $accountfieldName = str_replace(" ", "", $fieldName);
                            $avalue = $accountFields[$accountfieldName];
                            if (!empty($accountRecord->$avalue)) {
                                $roleTab[$tabName][] = array(
                                    "tabLabel" => $fieldName,
                                    "value" => $accountRecord->$avalue,
                                );
                            }
                        }
                    }
                }
                if (count($roleTab) > 0)
                    $role["tabs"] = $roleTab;

                array_push($templateRolesList, $role);
            }
            $data['templateRoles'] = $templateRolesList;
        }
        if (isset($eventNotifications) && sizeof($eventNotifications) > 0) {
            $data['eventNotification'] = $eventNotifications->toArray();
        }
        return $this->curl->makeRequest($url, 'POST', $this->client->getHeaders('Accept: application/json', 'Content-Type: application/json', $useSobo), array(), json_encode($data));
    }

    public function getDocuSignTemplates() {
        $url = $this->client->getBaseURL() . '/templates';
        $headers = $this->client->getHeaders('Accept: application/json', 'Content-Type: multipart/form-data;boundary=myboundary;order_by=name', false);
        $templates = $this->curl->makeRequest($url, 'GET', $headers, array(), array());
        return $templates;
    }

    public function getDocuSignTemplate($template_id) {
        if (!empty($template_id)) {
            $url = $this->client->getBaseURL() . '/templates/' . $template_id;
            $headers = $this->client->getHeaders('Accept: application/json', 'Content-Type: multipart/form-data;boundary=myboundary', false);
            $template = $this->curl->makeRequest($url, 'GET', $headers, array(), array());
            return $template;
        } else {
            return array();
        }
    }

    public function createEnvelopeFromDocument($emailSubject
    , $emailBlurb
    , $status = "created"
    , $documents = array()
    , $recipients = array()
    , $eventNotifications = array()
    , $useSobo = false) {
        $url = $this->client->getBaseURL() . '/envelopes';
        $headers = $this->client->getHeaders('Accept: application/json', 'Content-Type: multipart/form-data;boundary=myboundary', $useSobo);
        $doc = array();
        $contentDisposition = '';
        foreach ($documents as $document) {
            array_push($doc, array(
                "name" => $document->getName(),
                "documentId" => $document->getId()
            ));

            $contentDisposition .= "--myboundary\r\n"
                    . "Content-Type:application/pdf\r\n"
                    . "Content-Disposition: file; filename=\""
                    . $document->getName()
                    . "\"; documentid="
                    . $document->getId()
                    . "\r\n"
                    . "\r\n"
                    . $document->getContent()
                    . "\r\n";
        }
        $data = array(
            "emailSubject" => $emailSubject,
            "emailBlurb" => $emailBlurb,
            "documents" => $doc,
            "status" => $status
        );
        if (isset($recipients) && sizeof($recipients) > 0) {
            $recipientsList = array();
            foreach ($recipients as $recipient) {
                $rec = array(
                    "routingOrder" => $recipient->getRoutingOrder(),
                    "recipientId" => $recipient->getId(),
                    "name" => $recipient->getName(),
                    "email" => $recipient->getEmail()
                );
                /* if (!empty($recipient->getInitial())) {
                  $rec["tabs"] = array(
                  "signHereTabs" => array(
                  array(
                  "anchorString" => $recipient->getInitial(),
                  "anchorXOffset" => "1",
                  "anchorYOffset" => "0",
                  "anchorIgnoreIfNotPresent" => "true",
                  "anchorUnits" => "inches"
                  ),
                  ),
                  );
                  } */
                array_push($recipientsList, $rec);
            }
            $data['recipients'] = array("signers" => $recipientsList);
        }
        if (isset($eventNotifications) && sizeof($eventNotifications) > 0) {
            $data['eventNotification'] = $eventNotifications->toArray();
        }
        $data_string = json_encode($data);
        $data = "\r\n"
                . "\r\n"
                . "--myboundary\r\n"
                . "Content-Type: application/json\r\n"
                . "Content-Disposition: form-data\r\n"
                . "\r\n"
                . $data_string
                . "\r\n"
                . $contentDisposition
                . "--myboundary--";
        return $this->curl->makeRequest($url, 'POST', $headers, array(), $data);
    }

}

class DocuSign_Document extends DocuSign_Model {

    private $name;
    private $id;
    private $content;

    public function __construct($name, $id, $content) {
        if (isset($name))
            $this->name = $name;
        if (isset($id))
            $this->id = $id;
        if (isset($content))
            $this->content = $content;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

}

class DocuSign_Recipient extends DocuSign_Model {

    private $routingOrder;
    private $id;
    private $name;
    private $email;
    private $initial;

    public function __construct($routingOrder, $id, $name, $email, $initial) {
        if (isset($routingOrder))
            $this->routingOrder = $routingOrder;
        if (isset($id))
            $this->id = $id;
        if (isset($name))
            $this->name = $name;
        if (isset($email))
            $this->email = $email;
        if (isset($initial))
            $this->initial = $initial;
    }

    public function setRoutingOrder($routingOrder) {
        $this->routingOrder = $routingOrder;
    }

    public function getRoutingOrder() {
        return $this->routingOrder;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setInitial($initial) {
        $this->initial = $initial;
    }

    public function getInitial() {
        return $this->initial;
    }

}

class DocuSign_TemplateRole extends DocuSign_Model {

    private $roleName;
    private $name;
    private $email;
    private $id;

    public function __construct($roleName, $name, $email, $id) {
        if (isset($roleName))
            $this->roleName = $roleName;
        if (isset($name))
            $this->name = $name;
        if (isset($email))
            $this->email = $email;
        if (isset($id))
            $this->id = $id;
    }

    public function setRoleName($roleName) {
        $this->roleName = $roleName;
    }

    public function getRolename() {
        return $this->roleName;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

}

class DocuSign_EventNotification extends DocuSign_Model {

    private $url;
    private $loggingEnabled;
    private $requireAcknowledgment;
    private $useSoapInterface;
    private $soapNameSpace;
    private $includeCertificateWithSoap;
    private $signMessageWithX509Cert;
    private $includeDocuments;
    private $includeTimeZone;
    private $includeSenderAccountAsCustomField;
    private $envelopeEvents;
    private $recipientEvents;

    public function __construct($url
    , $loggingEnabled
    , $requireAcknowledgment
    , $useSoapInterface
    , $soapNameSpace
    , $includeCertificateWithSoap
    , $signMessageWithX509Cert
    , $includeDocuments
    , $includeTimeZone
    , $includeSenderAccountAsCustomField
    , $envelopeEvents
    , $recipientEvents) {
        if (isset($url))
            $this->url = $url;
        if (isset($loggingEnabled))
            $this->loggingEnabled = $loggingEnabled;
        if (isset($requireAcknowledgment))
            $this->requireAcknowledgment = $requireAcknowledgment;
        if (isset($useSoapInterface))
            $this->useSoapInterface = $useSoapInterface;
        if (isset($soapNameSpace))
            $this->soapNameSpace = $soapNameSpace;
        if (isset($includeCertificateWithSoap))
            $this->includeCertificateWithSoap = $includeCertificateWithSoap;
        if (isset($signMessageWithX509Cert))
            $this->signMessageWithX509Cert = $signMessageWithX509Cert;
        if (isset($includeDocuments))
            $this->includeDocuments = $includeDocuments;
        if (isset($includeTimeZone))
            $this->includeTimeZone = $includeTimeZone;
        if (isset($includeSenderAccountAsCustomField))
            $this->includeSenderAccountAsCustomField = $includeSenderAccountAsCustomField;
        if (isset($envelopeEvents))
            $this->envelopeEvents = $envelopeEvents;
        if (isset($recipientEvents))
            $this->recipientEvents = $recipientEvents;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setLoggingEnabled($loggingEnabled) {
        $this->loggingEnabled = $loggingEnabled;
    }

    public function getLoggingEnabled() {
        return $this->loggingEnabled;
    }

    public function setRequireAcknowledgment($requireAcknowledgment) {
        $this->requireAcknowledgment = $requireAcknowledgment;
    }

    public function getRequireAcknowledgment() {
        return $this->requireAcknowledgment;
    }

    public function setUseSoapInterface($useSoapInterface) {
        $this->useSoapInterface = $useSoapInterface;
    }

    public function getUseSoapInterface() {
        return $this->useSoapInterface;
    }

    public function setSoapNameSpace($soapNameSpace) {
        $this->soapNameSpace = $soapNameSpace;
    }

    public function getSoapNameSpace() {
        return $this->soapNameSpace;
    }

    public function setIncludeCertificateWithSoap($includeCertificateWithSoap) {
        $this->includeCertificateWithSoap = $includeCertificateWithSoap;
    }

    public function getIncludeCertificateWithSoap() {
        return $this->includeCertificateWithSoap;
    }

    public function setSignMessageWithX509Cert($signMessageWithX509Cert) {
        $this->signMessageWithX509Cert = $signMessageWithX509Cert;
    }

    public function getSignMessageWithX509Cert() {
        return $this->signMessageWithX509Cert;
    }

    public function setIncludeDocuments($includeDocuments) {
        $this->includeDocuments = $includeDocuments;
    }

    public function getIncludeDocuments() {
        return $this->includeDocuments;
    }

    public function setIncludeTimeZone($includeTimeZone) {
        $this->includeTimeZone = $includeTimeZone;
    }

    public function getIncludeTimeZone() {
        return $this->includeTimeZone;
    }

    public function setIncludeSenderAccountAsCustomField($includeSenderAccountAsCustomField) {
        $this->includeSenderAccountAsCustomField = $includeSenderAccountAsCustomField;
    }

    public function getIncludeSenderAccountAsCustomField() {
        return $this->includeSenderAccountAsCustomField;
    }

    public function setEnvelopeEvents($envelopeEvents) {
        $this->envelopeEvents = $envelopeEvents;
    }

    public function getEnvelopeEvents() {
        return $this->envelopeEvents;
    }

    public function setRecipientEvents($recipientEvents) {
        $this->recipientEvents = $recipientEvents;
    }

    public function getRecipientEvents() {
        return $this->recipientEvents;
    }

    public function toArray() {
        $result = array();
        if (isset($this->url))
            $result['url'] = $this->url;
        if (isset($this->loggingEnabled))
            $result['loggingEnabled'] = $this->loggingEnabled;
        if (isset($this->requireAcknowledgment))
            $result['requireAcknowledgment'] = $this->requireAcknowledgment;
        if (isset($this->useSoapInterface))
            $result['useSoapInterface'] = $this->useSoapInterface;
        if (isset($this->soapNameSpace))
            $result['soapNameSpace'] = $this->soapNameSpace;
        if (isset($this->includeCertificateWithSoap))
            $result['includeCertificateWithSoap'] = $this->includeCertificateWithSoap;
        if (isset($this->signMessageWithX509Cert))
            $result['signMessageWithX509Cert'] = $this->signMessageWithX509Cert;
        if (isset($this->includeDocuments))
            $result['includeDocuments'] = $this->includeDocuments;
        if (isset($this->includeTimeZone))
            $result['includeTimeZone'] = $this->includeTimeZone;
        if (isset($this->includeSenderAccountAsCustomField))
            $result['includeSenderAccountAsCustomField'] = $this->includeSenderAccountAsCustomField;
        if (isset($this->envelopeEvents) && sizeof($this->envelopeEvents) > 0) {
            $temp = array();
            foreach ($this->envelopeEvents as $envelopeEvent) {
                $item = array();
                $item['envelopeEventStatusCode'] = $envelopeEvent;
                array_push($temp, $item);
            }
            if (count($temp) > 0)
                $result['envelopeEvents'] = $temp;
        }
        if (isset($this->recipientEvents) && sizeof($this->recipientEvents) > 0) {
            $temp = array();
            foreach ($this->recipientEvents as $recipientEvent) {
                $item = array();
                $item['envelopeEventStatusCode'] = $recipientEvents;
                array_push($temp, $item);
            }
            if (count($temp) > 0)
                $result['envelopeEvents'] = $temp;
        }
        return $result;
    }

}

?>
