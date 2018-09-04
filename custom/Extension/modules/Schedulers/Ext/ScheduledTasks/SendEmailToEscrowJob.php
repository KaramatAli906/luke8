<?php

use Sugarcrm\Sugarcrm\ProcessManager;

function SendEmailToEscrowJob($job) {
    $bean = BeanFactory::retrieveBean('m_CAMS', $job->data);

    global $current_user;
    $current_user_old_id = $current_user->id;
    //coonie user to be used
    $current_user = BeanFactory::getBean('Users', '7965eeea-8ecf-11e7-9900-000d3a9007e4');

    if (!empty($job->data) && !empty($bean)) {
        $opp = BeanFactory::retrieveBean('Opportunities', $bean->m_cams_opportunities_1opportunities_idb);
        $link = "contacts";
        if (!empty($opp) && $opp->load_relationship($link)) {
            //Get connieo user 
            $templateName = 'Punchlist Complete Notification';
            $query = new SugarQuery();
            $query->select(array('subject', 'body_html'));
            $query->from(BeanFactory::getBean('pmse_Emails_Templates'));
            $query->where()->equals('name', $templateName);

            $results = $query->execute();
            $subject = $results[0]['subject'];
            $html = $results[0]['body_html'];

            if (count($results) == 0) {
                return true;
            }

            $relatedBeans = $opp->$link->getBeans();
            foreach ($relatedBeans as $contact) {
                if ($contact->opportunity_role == "Title Escrow") {
                    $beanUtils = ProcessManager\Factory::getPMSEObject('PMSEBeanHandler');
                    $subject = from_html($subject); //from_html($emailTemp->subject);
                    $body = from_html($html);
                    //Grabs email defaults from the system values set in the admin panel (SMTP, username, password, port, etc)
                    $emailObj = new Email();
                    //$defaults = $emailObj->getSystemDefaultEmail();
                    $mail = new SugarPHPMailer();
                    $mail->IsHTML(true);
                    //Email will be send from user settings
                    $mail->setMailer();
                    //$mail->setMailerForSystem();
                    $mail->From = $current_user->email1; //$defaults['email'];
                    $mail->FromName = $current_user->full_name; //$defaults['name'];

                    $mail->AddAddress($contact->email1);
                    $mail->AddCC("lukep@mtvistahomes.com", "Luke Pickerill");
                    $mail->AddCC("connieo@mtvistahomes.com", $current_user->full_name);

                    $mail->Subject = from_html($beanUtils->mergeBeanInTemplate($bean, $subject));
                    $mail->Body = from_html($beanUtils->mergeBeanInTemplate($bean, $body));
                    $mail->prepForOutbound();

                    $send = $mail->Send();
                    if (!$send) {
                        $GLOBALS['log']->fatal("Could not send Mail:  " . $mail->ErrorInfo);
                    } else {
                        $emailObj->to_addrs = $contact->email1;
                        $emailObj->type = 'out';
                        $emailObj->deleted = '0';
                        $emailObj->name = $mail->Subject;
                        $emailObj->description = null;
                        $emailObj->description_html = $mail->Body;
                        $emailObj->from_addr = $mail->Username;
                        $emailObj->date_sent = TimeDate::getInstance()->nowDb();
                        $emailObj->status = 'sent';
                        $emailObj->state = 'Archived';
                        $emailObj->parent_type = 'Opportunities';
                        $emailObj->parent_id = $opp->id;
                        $emailObj->cc_addrs = 'lukep@mtvistahomes.com';
                        $emailObj->save();
                    }
                }
            }
        }
    }
    $current_user = BeanFactory::getBean('Users', $current_user_old_id);
    return true;
}