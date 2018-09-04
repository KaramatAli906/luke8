<?php
require_once 'modules/Meetings/Meeting.php';

class CustomMeeting extends Meeting
{
    /**
     * Override save function for save and send invitee button
     *
     * @param string $check_notify
     * @return string $return_id
     */
    public function save($check_notify = false)
    {
        if (!empty($this->send_invites_jobqueue)) {
            $this->send_invites = false;
        }

        $return_id = parent::save($check_notify);

        // If record is saved succesfully then add the job in queue
        if (!empty($return_id) && !empty($this->send_invites_jobqueue)) {
            try {
                $this->perpareSendInvitesJob();
            } catch(Exception $e) {
                $GLOBALS['log']->debug(__file__.': '.__function__.'(): Creating job Error : '. $e->getMessage());
            }
        }

        return $return_id;
    }

    /**
     * Prepare the job and add in queue for sending invitees for Meeting
     *
     * @param string $check_notify
     * @return string $return_id
     */
    protected function perpareSendInvitesJob()
    {
        if (empty($this->contacts_arr) && empty($this->users_arr) && empty($this->leads_arr)) {
            $GLOBALS['log']->debug(__file__.': '.__function__.'(): No Invites in list');
            return;
        }

        $inviteEmailFrom = $inviteEmailFromName = '';
        if (!empty($this->assigned_user_id)) {
            $userBean = BeanFactory::getBean('Users', $this->assigned_user_id);
            if (!empty($userBean)) {
                $inviteEmailFrom = $userBean->emailAddress->getPrimaryAddress($userBean);
                $inviteEmailFromName = empty($inviteEmailFrom) ? $inviteEmailFrom: $userBean->full_name;
            }
        }

        $args = array(
            'record_id' => $this->id,
            'module_name' => $this->module_name,
            'contacts_arr' => $this->contacts_arr,
            'users_arr' => $this->users_arr,
            'leads_arr' => $this->leads_arr,
            'invite_email_from' => $inviteEmailFrom,
            'invite_email_from_name' => $inviteEmailFromName,
        );

        $jobId = scheduleCustomJob(
            array(
                'job_name' => "Send Custom Emails to Invites of Meeting",
                'job_target' => "class::SugarJobSendInvitesEmailsForMeetings",
                'assigned_user_id' => '1',
                'data' => $args
            )
        );

        $GLOBALS['log']->debug(
            __file__.': '.__function__.'(): Creating a job ('. $jobId.') to generate export file '. 'Data for the job is: '.print_r($args, 1)
        );
    }

    /**
    * Send assignment notifications and invites for meetings from scheduler job
     * @param bool $check_notify
    */
    public function sendNotificationsForMeetingInvites($check_notify)
    {
        $this->_sendNotifications($check_notify);
    }

    /**
    * Handles sending out email notifications when items are first assigned to users
    *
    * @param string $notify_user user to notify
    * @param string $admin the admin user that sends out the notification
    */
    function send_assignment_notifications($notify_user, $admin)
    {

        if($this->ext_synced_from_ext) {
            return;
        }

        // If there is email template selected in Admin section the use that email
        // template for Meeting invites else parent behavior

        if (empty($this->send_invites_jobqueue) || empty($this->templateIdForInvites)) {
            parent::send_assignment_notifications($notify_user, $admin);
            return;
        }

        try {
            $GLOBALS['log']->debug(__file__.': '.__function__.'():Start Custom Email send to Meeting Invites');

            global $current_user;
            $current_user_backup = $current_user;
            $current_user = BeanFactory::getBean('Users', $this->assigned_user_id);

            // If email sending failed from the assigned user of meetings due to
            // invalid credentials then re-send it using the default outbound email settings
            if (!$this->sendEmail($notify_user, $current_user)) {
                $current_user = BeanFactory::getBean('Users', '1');
                $this->sendEmail($notify_user, $current_user, true);
            }
            $current_user = $current_user_backup;
        } catch (MailerException $me) {
            $message = $me->getMessage();

            switch ($me->getCode()) {
                case MailerException::FailedToConnectToRemoteServer:
                    $GLOBALS['log']->debug("Notifications: error sending e-mail, smtp server was not found ", 'From: '.$mail->From, 'To: '.$to);
                    break;
                default:
                    $GLOBALS['log']->debug("Notifications: error sending e-mail (method: {$mailTransmissionProtocol}), (error: {$message})", 'From: '.$mail->From, 'To: '.$to);
                    break;
            }
        }
    }

    protected function sendEmail($notify_user, $current_user, $use_default = false)
    {
        $mail = new SugarPHPMailer();
        $mail->IsHTML(true);
        $mail->setMailer();

        if ($use_default) {
            $emailObj = new Email();
            $defaults = $emailObj->getSystemDefaultEmail();

            $mail->From = $defaults['email'];
            $mail->FromName = $defaults['name'];
        } else {
            $mail->From = $current_user->email1;
            $mail->FromName = $current_user->full_name;
        }

        $to = $notify_user->emailAddress->getPrimaryAddress($notify_user);
        $mail->AddAddress($to);

        $mail->Subject = from_html($this->subjectForInvites);
        $mail->Body = from_html($this->htmlBodyForInvites);
        $mail->prepForOutbound();

        foreach ($this->attachmentsForInvites as $key => $attributes) {
            if (!empty($attributes['path'] && $attributes['file_name'] && $attributes['mime_type'])) {
                $mail->addAttachment($attributes['path'], $attributes['file_name'], 'base64', $attributes['mime_type']);
            }
        }
        $response = $mail->Send();

        if ($response) {
            $GLOBALS['log']->debug("Notifications: e-mail successfully sent", 'From: '.$mail->From, 'To: '.$to);
        } else {
            $GLOBALS['log']->debug("Notifications: e-mail failed", 'From: '.$mail->From, 'To: '.$to);
        }

        return $response;
    }
}
