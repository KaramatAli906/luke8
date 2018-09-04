<?php

require_once 'include/SugarQuery/SugarQuery.php';

class SugarJobSendInvitesEmailsForMeetings implements RunnableSchedulerJob
{
    /**
     * @var SchedulersJob
     */
    protected $job;
    
    /**
     * @param SchedulersJob $job
     */
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    /**
     * @param $data
     * @return bool
     */
    public function run($data)
    {
        if (!empty($data)) {
            $data = unserialize(base64_decode($data));
            if (!empty($data)) {
                try {
                    $GLOBALS['log']->debug(
                        __file__.': '.__function__,
                        'Data: '. $data
                    );
                    $recordBean = BeanFactory::getBean($data['module_name'], $data['record_id']);
                    $recordBean->send_invites_jobqueue = true;
                    $recordBean->send_invites = true;
                    $recordBean->contacts_arr = $data['contacts_arr'];
                    $recordBean->users_arr = $data['users_arr'];
                    $recordBean->leads_arr = $data['leads_arr'];
                    $recordBean->invite_email_from = $data['invite_email_from'];
                    $recordBean->invite_email_from_name = $data['invite_email_from_name'];

                    $emailTemplateForInvites = SugarConfig::getInstance()->get('emailTemplateForInvites', null);
                    $templateObj = BeanFactory::getBean('EmailTemplates', $emailTemplateForInvites);
                    if (!empty($templateObj)) {
                        $attachments = [];
                        $uploadPath = SugarConfig::getInstance()->get('upload_dir','upload/');

                        $sugarQuery = new SugarQuery();
                        $sugarQuery->from(BeanFactory::newBean('Notes'));
                        $sugarQuery->where()->equals("email_id", $templateObj->id);
                        $sugarQuery->select(array('id', 'filename', 'file_mime_type'));
                        $result = $sugarQuery->execute();

                        foreach ($result as $note) {
                            $attachments[] = array(
                                'path' => $uploadPath. $note['id'],
                                'file_name' => $note['filename'],
                                'mime_type' => $note['file_mime_type']
                            );
                        }

                        $recordBean->htmlBodyForInvites = parse_alert_template(
                            $recordBean,
                            EmailTemplate::parse_template(
                                $templateObj->body_html,
                                $data['module_name'],
                                $recordBean
                            )
                        );
                        $recordBean->subjectForInvites = $templateObj->name;
                        $recordBean->templateIdForInvites = $emailTemplateForInvites;
                        $recordBean->attachmentsForInvites = $attachments;

                        $GLOBALS['log']->debug(
                            __file__.': '.__function__,
                            'subjectForInvites => ' . $recordBean->subjectForInvites,
                            'templateIdForInvites => '. $recordBean->templateIdForInvites,
                            'attachmentsForInvites => '. $recordBean->attachmentsForInvites,
                            'htmlBodyForInvites => '. $recordBean->htmlBodyForInvites
                        );
                    }

                    $GLOBALS['log']->debug(
                        __file__.': '.__function__,
                        'Start Send Notifications for Meeting Invites'
                    );
                    $recordBean->sendNotificationsForMeetingInvites(true);

                    $this->job->succeedJob();
                    return true;
                } catch(Exception $ex) {
                    $this->job->failJob();
                    return true;
                }
            }
        }
    }
}
