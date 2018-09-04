<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/mailchimp_sync.php


array_push($job_strings, 'mailchimp_sync');

/**
 * @return bool
 */
function mailchimp_sync() {
    require_once('custom/include/MailChimp/MailChimpConnector.php');
    $connector = new MailChimpConnector;
    $connector->syncLists();
    return true;
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/smart_sheet_sync.php


$job_strings[] = 'sugar_to_smartsheet_sync';
$job_strings[] = 'verify_webhooks';
$job_strings[] = 'smartsheet_to_sugar_sync';

require_once 'custom/include/Helpers/SmartSheets/smartSheetSynchronizer.php';
require_once 'custom/include/Helpers/SmartSheets/SmartSheetApiHelper.php';

function sugar_to_smartsheet_sync() {

    $GLOBALS['log']->debug("sugar_to_smartsheet_sync");
    $admin = new Administration();
    $admin->retrieveSettings();
    //$sheet_id = $admin->settings['smartsheet_id'];
    $sheet_id=SmartSheetApiHelper::retrieveSettings($admin->settings['smartsheet_id']);

    if (!empty($sheet_id)) {
        $smart_sheet_synchronizer = new smartSheetSynchronizer($sheet_id);
        $query=" sync_cam_to_smartsheet='1' AND smartsheet_row_id<>'' ";
        $smart_sheet_synchronizer->syncSugarToSmartSheet(" $query ");
    } else {
        //notify user
    }
    return true;
}

function verify_webhooks() {

    $GLOBALS['log']->debug("Webhook sch called");

    $admin = new Administration();
    $admin->retrieveSettings();
    //$sheet_id = $admin->settings['smartsheet_id'];
    $sheet_id=SmartSheetApiHelper::retrieveSettings($admin->settings['smartsheet_id']);
    //$webhook_id = $admin->settings['smartsheet_webhook_id'];
    $webhook_id=SmartSheetApiHelper::retrieveSettings($admin->settings['smartsheet_webhook_id']);
    $smart_sheet_synchronizer = new smartSheetSynchronizer($sheet_id);
    $response = $smart_sheet_synchronizer->isWebHookEnabled($webhook_id, true);


    if ($response->enabled == 1 && $response->status == 'ENABLED') {
        $GLOBALS['log']->debug("Webhook is enabled");
    } else {
        /*
         * manual attempt to enable webhook.
         * manually sync records from smartsheet to sugar
         */
        $smart_sheet_synchronizer->syncSmartSheetToSugar(true);
        $webhook_update_response = $smart_sheet_synchronizer->enableWebHook($webhook_id);
        $GLOBALS['log']->debug("response after update webhook--->", $webhook_update_response);
    }

    //disabledDetails
    //status
    //enabled

    return true;
}

function smartsheet_to_sugar_sync() {

    $GLOBALS['log']->debug("sugar_to_smartsheet_sync");
    $admin = new Administration();
    $admin->retrieveSettings();
    //$sheet_id = $admin->settings['smartsheet_id'];
    $sheet_id=SmartSheetApiHelper::retrieveSettings($admin->settings['smartsheet_id']);
    if (!empty($sheet_id)) {
        $smart_sheet_synchronizer = new smartSheetSynchronizer($sheet_id);
        $smart_sheet_synchronizer->syncSmartSheetToSugar(true);
    } else {
        // notify user
    }


    return true;
}


?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/ops_backups_fetch_exports.php


$job_strings[] = 'ops_backups_fetch_exports';

function ops_backups_fetch_exports() {
    global $sugar_config;

    // First lets clean out any old junk
    $Backup = BeanFactory::newBean('ops_Backups');

    if (empty($Backup)) {
        $GLOBALS['log']->error("Failed to instantiate ops_Backups bean");
        return;
    }

    ops_Backups::removeExpired();

    $backups = $Backup->getAppInstanceExports();

    foreach ($backups as $backup) {
        $backup = $Backup->verifyExport($backup);
        if ($backup) {
            $sql = new SugarQuery();
            $sql->select('id');
            $sql->from($Backup);
            $sql->where()->equals('download_url', $backup->download_url);

            $result = $sql->execute();
            $count = count($result);

            if ($count == 0) {
                $newBean = BeanFactory::newBean($Backup->module_name);
                if (empty($newBean)) {
                    $GLOBALS['log']->error("Failed to instantiate a new ops_Backups bean");
                    continue;
                }
                $newBean->name = (isset($backup->name)?$backup->name:$sugar_config['host_name']);
                $newBean->date_entered = $backup->created_at->format('Y-m-d H:i:s');
                $newBean->expires_at = $backup->expires_at->format('Y-m-d H:i:s');
                $newBean->description = sprintf(translate('LBL_CREATED_DESC', 'ops_Backups'),
                    $sugar_config['host_name'],
                    $backup->created_at->format($GLOBALS['timedate']->get_date_format())
                );
                $newBean->description .= sprintf(translate('LBL_EXPIRES_DESC', 'ops_Backups'),
                    $backup->expires_at->format($GLOBALS['timedate']->get_date_format())
                );
                $newBean->download_url = $backup->download_url;
                $newBean->save();
                if ($newBean->id) {
                    $GLOBALS['log']->info(sprintf("opsBackups saved backup: %s", $newBean->id));
                } else {
                    $GLOBALS['log']->fatal(sprintf("opsBackups failed to save backup: %s", $backup->download_url));
                }
            } else {
                $GLOBALS['log']->info(sprintf("opsBackups skipping this export because we already have a record for %s", $backup->download_url));
            }
        }
    }
    return true;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/smartsheet_vendor_sync.php


$job_strings[] = 'smartsheet_vendor_sync';

function smartsheet_vendor_sync()
{
    $GLOBALS['log']->fatal("InScheduler");
    require_once 'custom/EntryPoints/smartsheet/smartsheet_vendor_syncing.php';
    return true;
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/CleanSyncJob.php


require_once('custom/include/Google/GoogleHelper.php');

/**
* This class acts as a job to perform clean sync functionality for RTGSync
*/
class CleanSyncJob implements RunnableSchedulerJob
{
    /**
     * This method implements setJob from RunnableSchedulerJob. It sets the
     * SchedulersJob instance for the class.
     *
     * @param SchedulersJob $job the SchedulersJob instance set by the job queue
     */
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    /**
     * Executes a job to clean sync.
     * @param $data
     * @return bool
     */
    public function run($data)
    {
        try{
            $data = json_decode($data,1);
            if (!empty($data['stored_credentials']) && !empty($data['gmail_id']) && !empty($data['user_bean_id']))
            {
                $gh = new GoogleHelper();
                $gh->cleanSync($data['gmail_id'], $data['user_bean_id'], $data['stored_credentials']);
            }
            $this->unlockCalendarSync($data['sync_lock_id']);
        } catch (Exception $e) {
            $this->job->failJob($e->getMessage());
            return false;
        }

        return true;
    }

    /**
    * set lock attributes in config
    * @param $lock_id string
    */
    private function unlockCalendarSync($lock_id = '')
    {
        //unlock calendar sync job
        $calender_sync_lock_config = SugarConfig::getInstance()->get('calender_sync_lock');
        if (!empty($lock_id) && !empty($calender_sync_lock_config[$lock_id])) {
            $configurator = new Configurator();
            $configurator->config['calender_sync_lock'][$lock_id] = false;
            $configurator->saveConfig();
        }
    }
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/googleDriveSync.php


if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
require_once('custom/include/Google/GoogleHelper.php');
require_once("include/utils/encryption_utils.php");
require_once("modules/Administration/Administration.php");
$job_strings[] = 'googleDriveSync';

/**
* Sync documents to/from google
*
*
* This function performs certain checks before sycing documents
* <ul>
    * <li> Checks for php client file </li>
    * <li> Then checks if repair and rebuild is performed after installation </li>
    * <li> If all conditions are fulfilled, the sync is performed and last_sync is updated </li>
* </ul>
* <br> In case of any failure, the appropriate message is logged
* 
* @return bool  true    if syncing is successful, false otherwise
* @access public
*/
function googleDriveSync()
{

        $admin = new Administration();
        $admin->retrieveSettings();
        if (sugar_is_file('custom/include/Google/google-api-php-client/src/Google_Client.php')) { // if php client exist then do drive sync
            if (GoogleHelper::check_column_if_exist($GLOBALS['sugar_config']['dbconfig']['db_name'], 'users', 'enable_gsync')) {
            $gh = new GoogleHelper();
            $tmp = array(
                'rt_set_time_limit' => 'set_time_limit',
                'rt_ini_set' => 'ini_set',
            );
            //increasing limits
            //set_time_limit(9000);
            $tmp['rt_set_time_limit'](9000);
            $json = getJSONobj();
            //ini_set('memory_limit', '2048M'); //blacklist while package scan
            $tmp['rt_ini_set']('memory_limit', '2048M'); //blacklist while package scan
            //ahmed nawaz
            $module = "Users";
            $q = new SugarQuery();
            $q->from(BeanFactory::getBean($module), array('team_security' => false));
            $q->joinTable('rt_gsync', array('joinType' => 'LEFT'))->on()->equalsField('users.id', 'rt_gsync.id.user_id')->equals('rt_gsync.deleted', '0');
            $q->select(array('users.id', 'users.user_name', 'users.gmail_id', 'users.lastsync_calendar', 'users.lastsync_drive', array('rt_gsync.id', 'GSyncID'), 'rt_gsync.calendar_google', 'rt_gsync.calendar_sugar', 'rt_gsync.calendar_calls', 'rt_gsync.calendar_tasks', 'rt_gsync.contacts_google', 'rt_gsync.contacts_sugar', 'rt_gsync.documents_google', 'rt_gsync.documents_sugar'));
            $q->where()->equals('users.status', 'Active')->equals('users.enable_gsync', 1);
            $q->distinct(true);
            //$sql = $q->compileSql();
            //$res = $GLOBALS['db']->query($sql);
            $res = $q->execute();
            $processed = array();
            //while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
            foreach ($res as $row) {
                $schedulers = array();

                try {

                    //if not saved 
                    if (empty($row['GSyncID'])) {
                        $schedulers = array(
                            "calendar_google" => true,
                            "calendar_sugar" => true,
                            "contacts_google" => false,
                            "contacts_sugar" => true,
                            "documents_google" => true,
                            "documents_sugar" => true,
                            "calendar_meetings" => true,
                            "calendar_calls" => true,
                            "calendar_tasks" => true,
                        );
                    } else {
                        $schedulers = array(
                            "calendar_google" => true,
                            "calendar_sugar" => true,
                            "contacts_google" => $row["contacts_google"],
                            "contacts_sugar" => $row["contacts_sugar"],
                            "documents_google" => $row["documents_google"],
                            "documents_sugar" => $row["documents_sugar"],
                            "calendar_meetings" => true,
                            "calendar_calls" => $row["calendar_calls"],
                            "calendar_tasks" => $row["calendar_tasks"],
                        );
                    }
                    $gh->prefrences = array('schedulers' => $schedulers);
                    /* user gsync prefrences */
                    if (!empty($row['gmail_id']) && ($gh->prefrences["schedulers"]["documents_google"] == true || $gh->prefrences["schedulers"]["documents_sugar"] == true)) {
                        if (in_array(strtolower($row['gmail_id']), $processed)) {
                            $GLOBALS['log']->fatal("This email (" . $row['gmail_id'] . ") is configured in multiple users settings,skipping....");
                            continue;
                        } else {
                            $processed[] = strtolower($row['gmail_id']);
                        }
                        $GLOBALS['log']->fatal('STARTED: Drive sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                        if (empty($row['lastsync_drive']) || !isset($row['lastsync_drive'])) {
                            $row['lastsync_drive'] = '2013-01-01 01:01:01';
                        }
                        $current_date = date($GLOBALS['timedate']->get_db_date_time_format());
                        $dateAdded = strtotime(date($GLOBALS['timedate']->get_db_date_time_format(), strtotime($current_date)) . "+03 seconds");
                        $last_synch = gmdate($GLOBALS['timedate']->get_db_date_time_format(), $dateAdded);
                        $gh->performSync($row['gmail_id'], $row['id'], $row['lastsync_drive'], 'drive');
                        //last sync date saving to db
                        $sql_update = "UPDATE users set lastsync_drive='" . $last_synch . "' WHERE id='" . $row['id'] . "'";
                        $res_update = $GLOBALS['db']->query($sql_update);
                        $GLOBALS['log']->fatal('COMPLETED: Drive sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                    }
                } catch (Exception $ex) {
                    $GLOBALS['log']->fatal('ERROR:' . $ex->getMessage());
                }
            }
            return true;
        } else {
            $GLOBALS['log']->fatal('Gmail Sync failed in CRON run. do quick repair and rebuild first.');
            return false;
        }
    } else {
        $GLOBALS['log']->fatal('Google api php client does not exist');
        return false;
    }
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/SendEmailToEscrowJob.php


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
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/customEmailReminders.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$job_strings[] = 'custom_email_reminders';

function custom_email_reminders()
{
    require_once 'custom/modules/Activities/customEmailReminders.php';
    $reminder = new customEmailReminders();
    return $reminder->process();
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/rt_GSyncSugar7Schedulers.php


if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
require_once('custom/include/Google/GoogleHelper.php');
require_once("include/utils/encryption_utils.php");
require_once("modules/Administration/Administration.php");
require_once 'include/SugarQuery/SugarQuery.php';
/* calendar scheduler */
$job_strings[] = 'googleCalenderSync';
/**
* Sync calendars to/from google
*
*
* This function performs certain checks before sycing calendars
* <br> --> Then, it checks for php client file
* <br> --> Finally it see if repair and rebuild is performed after installation
* <br> If all conditions are fulfilled, the sync is performed and last_sync is updated
* <br> ----------------In case of any failure, the appropriate message is logged----------------
* @return bool  true    if syncing is successful, false otherwise
* @access public
*/
function googleCalenderSync()
{
    // check if job is not locked by clean sync job
    // we don't runt this job until clean sync job is executed successfully.
    $configuratorObj = new Configurator();
    $configuratorObj->loadConfig();
    $calender_sync_lock_config = $configuratorObj->config['calender_sync_lock'];
    if (is_array($calender_sync_lock_config)) {
        foreach ($calender_sync_lock_config as $key => $value) {
            if ($value) {
                $GLOBALS['log']->fatal('GSync- Calendar postponed until clean sync if performed');
                return false;
            }
        }
        //clear the lock array
        $configurator                               = new Configurator();
        $configurator->config['calender_sync_lock'] = false;
        $configurator->saveConfig();
    }

    $admin = new Administration();
    $admin->retrieveSettings();
    $_SESSION['dcheckAlldayFunc'] = 1;
    if (GoogleHelper::check_column_if_exist($GLOBALS['sugar_config']['dbconfig']['db_name'], 'users', 'enable_gsync')) {
        $gh = new GoogleHelper();
        //$sql= "SELECT DISTINCT users.id, users.user_name, users.gmail_id, users.lastsync_calendar, rt_gsync.id AS GSyncID, rt_gsync.calendar_google, rt_gsync.calendar_sugar, rt_gsync.calendar_calls, rt_gsync.calendar_tasks, rt_gsync.contacts_google, rt_gsync.contacts_sugar, rt_gsync.documents_google, rt_gsync.documents_sugar FROM users LEFT JOIN rt_gsync ON rt_gsync.id=users.id AND rt_gsync.deleted='0' WHERE users.deleted='0' AND users.status='Active' AND enable_gsync=1";
        $module = "Users";
        $q = new SugarQuery();
        $q->from(BeanFactory::getBean($module), array('team_security' => false));
        $q->joinTable('rt_gsync', array(
            'joinType' => 'LEFT'
        ))->on()->equalsField('users.id', 'rt_gsync.id.user_id')->equals('rt_gsync.deleted', '0');
        $q->select(array(
            'users.id',
            'users.user_name',
            'users.gmail_id',
            'users.lastsync_calendar',
            array(
                'rt_gsync.id',
                'GSyncID'
            ),
            'rt_gsync.calendar_google',
            'rt_gsync.calendar_sugar',
            'rt_gsync.calendar_calls',
            'rt_gsync.calendar_tasks',
            'rt_gsync.contacts_google',
            'rt_gsync.contacts_sugar',
            'rt_gsync.documents_google',
            'rt_gsync.documents_sugar',
            'rt_gsync.multi_calendar',
            'rt_gsync.calendar_meetings',
        ));
        $q->where()->equals('users.status', 'Active')->equals('users.enable_gsync', 1);
        $q->distinct(true);
        //$sql = $q->compileSql();
        //$res = $GLOBALS['db']->query($sql);
        $res = $q->execute();
        $processed = array();
        //while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
        foreach ($res as $row) {
            $schedulers = array();
            try {
                //if not saved 
                if (empty($row['GSyncID'])) {
                    $schedulers = array(
                        "calendar_google" => false,
                        "calendar_sugar" => true,
                        "contacts_google" => false,
                        "contacts_sugar" => true,
                        "documents_google" => true,
                        "documents_sugar" => true,
                        "calendar_meetings" => true,
                        "calendar_calls" => true,
                        "calendar_tasks" => true,
                        "multi_calendar" => false
                    );
                } else {
                    $schedulers = array(
                        "calendar_google" => $row["calendar_google"],
                        "calendar_sugar" => $row["calendar_sugar"],
                        "contacts_google" => $row["contacts_google"],
                        "contacts_sugar" => $row["contacts_sugar"],
                        "documents_google" => $row["documents_google"],
                        "documents_sugar" => $row["documents_sugar"],
                        "calendar_meetings" => $row["calendar_meetings"],
                        "calendar_calls" => $row["calendar_calls"],
                        "calendar_tasks" => $row["calendar_tasks"],
                        "multi_calendar" => $row["multi_calendar"]
                    );
                }
                $gh->prefrences = array('schedulers' => $schedulers);
                /* user gsync prefrences */
                if (!empty($row['gmail_id']) ) {
                    if (in_array(strtolower($row['gmail_id']), $processed)) {
                        $GLOBALS['log']->fatal("This email (" . $row['gmail_id'] . ") is configured in multiple users settings,skipping....");
                        continue;
                    } else {
                        $processed[] = strtolower($row['gmail_id']);
                    }
                    $GLOBALS['log']->fatal('STARTED: Calendar sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                    if (empty($row['lastsync_calendar']) || !isset($row['lastsync_calendar'])) {
                        $row['lastsync_calendar'] = '2013-01-01 01:01:01';
                    }
                    
                    $gh->performSync($row['gmail_id'], $row['id'], $row['lastsync_calendar'], 'calendar', $row['multi_calendar']);
                    $GLOBALS['log']->fatal('COMPLETED: Calendar sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                }
            } catch (Exception $ex) {
                $GLOBALS['log']->fatal('ERROR:' . $ex->getMessage());
            }
        }
        unset($_SESSION['dcheckAlldayFunc']);
        return true;
    } else {
        $GLOBALS['log']->fatal('Gmail Sync failed in CRON run. do quick repair and rebuild first.');
        return false;
    }
}

/* contacts scheduler */
$job_strings[] = 'googleContactsSync';
/**
* Sync contacts to/from google
*
*
* This function performs certain checks before sycing contacts
* <br> --> Then, it checks for php client file
* <br> --> Finally it see if repair and rebuild is performed after installation
* <br> If all conditions are fulfilled, the sync is performed and last_sync is updated
* <br> ----------------In case of any failure, the appropriate message is logged----------------
* @return bool  true    if syncing is successful, false otherwise
* @access public
*/
function googleContactsSync()
{
    $admin = new Administration();
    $admin->retrieveSettings();
    if (GoogleHelper::check_column_if_exist($GLOBALS['sugar_config']['dbconfig']['db_name'], 'users', 'enable_gsync')) {
        $gh = new GoogleHelper();
        //$sql= "SELECT DISTINCT users.id, users.user_name, users.gmail_id, users.lastsync_contacts,users.gdrive_refresh_code, rt_gsync.id AS GSyncID, rt_gsync.calendar_google, rt_gsync.calendar_sugar, rt_gsync.contacts_google, rt_gsync.contacts_sugar, rt_gsync.documents_google, rt_gsync.documents_sugar FROM users LEFT JOIN rt_gsync ON rt_gsync.id=users.id AND rt_gsync.deleted='0' WHERE users.deleted='0' AND users.status='Active' AND enable_gsync=1";
        $module = "Users";
        $q = new SugarQuery();
        $q->from(BeanFactory::getBean($module), array('team_security' => false));
        $q->joinTable('rt_gsync', array('joinType' => 'LEFT'))->on()->equalsField('users.id', 'rt_gsync.id.user_id')->equals('rt_gsync.deleted', '0');
        $q->select(array('users.id', 'users.user_name', 'users.gmail_id', 'users.lastsync_contacts', 'users.gdrive_refresh_code', array('rt_gsync.id', 'GSyncID'), 'rt_gsync.calendar_google', 'rt_gsync.calendar_sugar', 'rt_gsync.contacts_google', 'rt_gsync.contacts_sugar', 'rt_gsync.documents_google', 'rt_gsync.documents_sugar'));
        $q->where()->equals('users.status', 'Active')->equals('users.enable_gsync', 1);
        $q->distinct(true);
        //$sql = $q->compileSql();
        //$res = $GLOBALS['db']->query($sql);
        $res = $q->execute();
        $processed = array();
        //while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
        foreach ($res as $row) {
            $schedulers = array();
            try {
                //if not saved 
                if (empty($row['GSyncID'])) {
                    $schedulers = array(
                        "calendar_google" => true,
                        "calendar_sugar" => true,
                        "contacts_google" => false,
                        "contacts_sugar" => true,
                        "documents_google" => true,
                        "documents_sugar" => true
                    );
                } else {
                    $schedulers = array(
                        "calendar_google" => true,
                        "calendar_sugar" => true,
                        "contacts_google" => $row["contacts_google"],
                        "contacts_sugar" => $row["contacts_sugar"],
                        "documents_google" => $row["documents_google"],
                        "documents_sugar" => $row["documents_sugar"]
                    );
                }
                $gh->prefrences = array('schedulers' => $schedulers);
                if (!empty($row['gmail_id']) && !empty($row['gdrive_refresh_code']) && ($gh->prefrences["schedulers"]["contacts_google"] == true || $gh->prefrences["schedulers"]["contacts_sugar"] == true)) {
                    if (in_array(strtolower($row['gmail_id']), $processed)) {
                        $GLOBALS['log']->fatal("This email (" . $row['gmail_id'] . ") is configured in multiple users settings,skipping....");
                        continue;
                    } else {
                        $processed[] = strtolower($row['gmail_id']);
                    }
                    $GLOBALS['log']->fatal('STARTED: Contacts sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                    if (empty($row['lastsync_contacts']) || !isset($row['lastsync_contacts'])) {
                        
                        $row['lastsync_contacts'] = '2013-01-01 01:01:01';
                        $GLOBALS['log']->fatal("last sync date is1".$row['lastsync_contacts']);
                    }
                    $current_date = date($GLOBALS['timedate']->get_db_date_time_format());
                    $dateAdded    = strtotime(date($GLOBALS['timedate']->get_db_date_time_format(), strtotime($current_date)) . "+03 seconds");
                    $last_synch   = gmdate($GLOBALS['timedate']->get_db_date_time_format(), $dateAdded);
                    $gh->performSync($row['gmail_id'], $row['id'], $row['lastsync_contacts'], 'contacts');
                    //last sync date saving to db
                    $sql_update = "UPDATE users set lastsync_contacts='" . $last_synch . "' WHERE id='" . $row['id'] . "'";
                    $res_update = $GLOBALS['db']->query($sql_update);
                    $GLOBALS['log']->fatal('COMPLETED: Contacts sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                } else {
                    if (empty($row['gdrive_refresh_code'])) {
                        $GLOBALS['log']->fatal("Please go to your user profile and re save Gmail id");
                    }
                }
            } catch (Exception $ex) {
                $GLOBALS['log']->fatal('ERROR:' . $ex->getMessage());
            }
        }
        return true;
    } else {
        $GLOBALS['log']->fatal('Gmail Sync failed in CRON run. do quick repair and rebuild first.');
        return false;
    }
}

/* archive emails scheduler */
$job_strings[] = 'importCacheEmails';
/**
* Sync emails to/from google
*
*
* @return bool  true    if syncing is successful, false otherwise
* @access public
*/
function importCacheEmails()
{
    $admin = new Administration();
    $admin->retrieveSettings();
    require_once('custom/include/CacheEmails/CacheEmails.php');
    return CacheEmails::import_emails();
}

/* calendar recurring scheduler */

// TODO
// $job_strings[] = 'googleCalenderRecurringSync';

/**
* Sync repeating (recurring) calendar events to/from google
*
*
* This function performs certain checks before sycing recurring calendar events
* <br> --> It checks for php client file
* <br> --> Finally it see if repair and rebuild is performed after installation
* <br> If all conditions are fulfilled, the sync is performed and last_sync ish updated
* <br> ----------------In case of any failure, the appropriate message is logged----------------
* @return bool  true    if syncing is successful, false otherwise
* @access public
*/
function googleCalenderRecurringSync()
{
    $admin = new Administration();
    $admin->retrieveSettings();
    $_SESSION['dcheckAlldayFunc'] = 1;
    if (GoogleHelper::check_column_if_exist($GLOBALS['sugar_config']['dbconfig']['db_name'], 'users', 'enable_gsync')) {
        $gh = new GoogleHelper();
        /* $sql       = "SELECT 
          DISTINCT U.id,U.user_name,U.gmail_id,U.lastsync_calendar
          FROM users AS U
          WHERE
          U.deleted='0' AND
          U.status='Active' AND U.enable_gsync=1"; */
        $module = "Users";
        $q = new SugarQuery();
        $q->from(BeanFactory::getBean($module), array('team_security' => false));
        $q->select(array('users.id', 'users.user_name', 'users.gmail_id', 'users.lastsync_calendar'));
        $q->where()->equals('users.status', 'Active')->equals('users.enable_gsync', 1);
        $q->distinct(true);
        //$sql = $q->compileSql();
        //$res = $GLOBALS['db']->query($sql);
        $res = $q->execute();
        $processed = array();
        //while ($row = $GLOBALS['db']->fetchByAssoc($res)) {
        foreach ($res as $row) {
            try {

                if (!empty($row['gmail_id']) ) {
                    if (in_array(strtolower($row['gmail_id']), $processed)) {
                        $GLOBALS['log']->fatal("This email (" . $row['gmail_id'] . ") is configured in multiple users settings,skipping....");
                        continue;
                    } else {
                        $processed[] = strtolower($row['gmail_id']);
                    }
                    $GLOBALS['log']->fatal('STARTED: calendarRecurring sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                    if (empty($row['lastsync_calendar']) || !isset($row['lastsync_calendar'])) {
                        $row['lastsync_calendar'] = '2013-01-01 01:01:01';
                    }
                    $gh->performSync($row['gmail_id'], $row['id'], $row['lastsync_calendar'], 'calendarRecurring');

                    $GLOBALS['log']->fatal('COMPLETED: calendarRecurring sync: ' . $row['user_name'] . '(' . $row['gmail_id'] . ')');
                }
            } catch (Exception $ex) {
                $GLOBALS['log']->fatal('ERROR:' . $ex->getMessage());
            }
        }
        unset($_SESSION['dcheckAlldayFunc']);
        return true;
    } else {
        $GLOBALS['log']->fatal('Gmail Sync failed in CRON run. do quick repair and rebuild first.');
        return false;
    }
}

?>
