<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class customEmailReminders extends EmailReminder {

    public function process() {

        $admin = Administration::getSettings();
        $meetings = $this->getMeetingsForRemind();
        foreach ($meetings as $id) {
            $recipients = $this->getRecipients($id, 'Meetings');
            $bean = BeanFactory::getBean('Meetings', $id);
            if ($this->customSendReminders($bean, $admin, $recipients)) {
                $bean->email_reminder_sent = 1;
                $bean->save();
            }
        }
        $calls = $this->getCallsForRemind();
        foreach ($calls as $id) {
            $recipients = $this->getRecipients($id, 'Calls');
            $bean = BeanFactory::getBean('Calls', $id);
            if ($this->customSendReminders($bean, $admin, $recipients)) {
                $bean->email_reminder_sent = 1;
                $bean->save();
            }
        }

        return true;
    }

    function customSendReminders(SugarBean $bean, Administration $admin, $recipients) {

        if (!empty($_SESSION["authenticated_user_language"])) {
            $currentLanguage = $_SESSION["authenticated_user_language"];
        } else {
            $currentLanguage = $GLOBALS["sugar_config"]["default_language"];
        }

        $user = BeanFactory::getBean('Users', $bean->created_by);
        $xtpl = new XTemplate(get_notify_template_file($currentLanguage));
        $xtpl = $this->customSetReminderBody($xtpl, $bean, $user);
        $templateName = "{$GLOBALS["beanList"][$bean->module_dir]}Reminder";
        $xtpl->parse($templateName);
        $xtpl->parse("{$templateName}_Subject");
        $mailTransmissionProtocol = "unknown";

        try {

            $mailer = MailerFactory::getSystemDefaultMailer();
            $mailTransmissionProtocol = $mailer->getMailTransmissionProtocol();
            // set the subject of the email
            $subject = $xtpl->text("{$templateName}_Subject");
            $mailer->setSubject($subject);
            // set the body of the email
            $body = trim($xtpl->text($templateName));
            $textOnly = EmailFormatter::isTextOnly($body);

            if ($templateName == 'CallReminder') {
                global $sugar_config;
                $parent_url = $sugar_config['site_url'] . "/#$bean->parent_type/$bean->parent_id";
                $record_url = $sugar_config['site_url'] . "/#$bean->module_dir/$bean->id";
                $body.="\nCall Record: $bean->name";
                $body.="\n$record_url";
                
                if(!empty($bean->parent_id)) {
                    $body.="\nParent Record: $bean->parent_name";
                $body.="\n$parent_url";
                }
                
            }

            if ($textOnly) {
                $mailer->setTextBody($body);
            } else {
                $textBody = strip_tags(br2nl($body)); // need to create the plain-text part
                $mailer->ll($textBody);
                $mailer->setHtmlBody($body);
            }
            $sugar_emails = array();

            foreach ($recipients as $recipient) {
                // reuse the mailer, but process one send per recipient
                $mailer->clearRecipients();
                $mailer->addRecipientsTo(new EmailIdentity($recipient["email"], $recipient["name"]));
                $mailer->send();
                array_push($sugar_emails, array(
                    'to_addrs' => $recipient["email"],
                    'subject' => $subject,
                    'body' => $body,
                    'parent_type' => $bean->parent_type,
                    'parent_id' => $bean->parent_id,
                ));
            }
        } catch (MailerException $me) {
            $message = $me->getMessage();

            switch ($me->getCode()) {
                case MailerException::FailedToConnectToRemoteServer:
                    $GLOBALS["log"]->error("Email Reminder: error sending email, system smtp server is not set");
                    break;
                default:
                    $GLOBALS["log"]->error("Email Reminder: error sending e-mail (method: {$mailTransmissionProtocol}), (error: {$message})");
                    break;
            }

            return false;
        }
        //save email to crm, after email is send. 
        foreach ($sugar_emails as $email) {
            $this->saveToSugarEmail($email);
        }

        return true;
    }

    protected function saveToSugarEmail($params) {
        if (!empty($params)) {
            $emailObj = new Email();
            $defaults = $emailObj->getSystemDefaultEmail();
            $emailObj->to_addrs = $params['to_addrs'];
            $emailObj->type = 'out';
            $emailObj->deleted = '0';
            $emailObj->name = $params['subject'];
            $emailObj->description = null;
            $emailObj->description_html = $params['body'];
            $emailObj->from_addr = $defaults['email'];
            $emailObj->date_sent = TimeDate::getInstance()->nowDb();
            $emailObj->status = 'sent';
            $emailObj->state = 'Archived';
            $emailObj->parent_type = $params['parent_type'];
            $emailObj->parent_id = $params['parent_id'];
            $emailObj->save();
        }
    }

    protected function customSetReminderBody(XTemplate $xtpl, SugarBean $bean, User $user) {

        $object = strtoupper($bean->object_name);
        $xtpl->assign("{$object}_SUBJECT", $bean->name);
        //This function returns null (sugarcrm bug)
        //$date = $GLOBALS['timedate']->fromUser($bean->date_start, $GLOBALS['current_user']);
        $date=new SugarDateTime($bean->date_start);
        $xtpl->assign("{$object}_STARTDATE", $GLOBALS['timedate']->asUser($date, $user)." ".TimeDate::userTimezoneSuffix($date, $user));
        if (isset($bean->location)) {
            $xtpl->assign("{$object}_LOCATION", $bean->location);
        }
        $xtpl->assign("{$object}_CREATED_BY", $user->full_name);
        $xtpl->assign("{$object}_DESCRIPTION", $bean->description);

        return $xtpl;
    }

}
