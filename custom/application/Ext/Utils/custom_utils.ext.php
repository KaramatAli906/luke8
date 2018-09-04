<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/Utils/dri-customer-journey.php


SugarAutoLoader::addNamespace('DRI_Workflows\\', 'modules/DRI_Workflows/', 'psr4');
SugarAutoLoader::addNamespace('DRI_SubWorkflows\\', 'modules/DRI_SubWorkflows/', 'psr4');
SugarAutoLoader::addNamespace('DRI_Workflow_Task_Templates\\', 'modules/DRI_Workflow_Task_Templates/', 'psr4');
SugarAutoLoader::addNamespace('DRI_Workflow_Templates\\', 'modules/DRI_Workflow_Templates/', 'psr4');
SugarAutoLoader::addNamespace('DRI_SubWorkflow_Templates\\', 'modules/DRI_SubWorkflow_Templates/', 'psr4');
SugarAutoLoader::addNamespace('Leads\\LogicHook\\', 'custom/modules/Leads/LogicHook/', 'psr4');

SugarAutoLoader::addNamespace('Accounts\\CustomerJourney\\', 'custom/modules/Accounts/CustomerJourney/', 'psr4');
SugarAutoLoader::addNamespace('Leads\\CustomerJourney\\', 'custom/modules/Leads/CustomerJourney/', 'psr4');
SugarAutoLoader::addNamespace('Contacts\\CustomerJourney\\', 'custom/modules/Contacts/CustomerJourney/', 'psr4');
SugarAutoLoader::addNamespace('Opportunities\\CustomerJourney\\', 'custom/modules/Opportunities/CustomerJourney/', 'psr4');
SugarAutoLoader::addNamespace('Cases\\CustomerJourney\\', 'custom/modules/Cases/CustomerJourney/', 'psr4');

?>
<?php
// Merged from custom/Extension/application/Ext/Utils/addoptify-customer-journey-parent.m_CAMS.php


SugarAutoLoader::addNamespace('m_CAMS\\CustomerJourney\\', 'custom/modules/m_CAMS/CustomerJourney/', 'psr4');

?>
<?php
// Merged from custom/Extension/application/Ext/Utils/get_mailchimp_lists.php


function MailChimpLists() {
    require_once('custom/include/MailChimp/MailChimpConnector.php');
    $mailchimp_connector = new MailChimpConnector;
    $lists = $mailchimp_connector->getLists();
    $response = array('' => 'Please select');
    if(!empty($lists) && is_array($lists) && count($lists) > 0) {
        $admin = new Administration();
        $admin->retrieveSettings();
        foreach($lists as $list) {
            $id = $list['id'];
            $name = $list['name'];
            if(!empty($admin->settings['mailchimp_'.$id])) {
                $old = !is_array($admin->settings['mailchimp_'.$id]) ? json_decode($admin->settings['mailchimp_'.$id]) : (object) $admin->settings['mailchimp_'.$id];
                if(!empty($old->sync_mailchimp_list)) {
                    $old->mailchimp_list_name = $name;
                    $admin->saveSetting("mailchimp", $id, json_encode($old));
                }
            }
            $response[$id] = $name;
        }
    }
    return $response;
}
?>
<?php
// Merged from custom/Extension/application/Ext/Utils/get_mailchimp_campaigns.php


function MailChimpCampaigns() {
    require_once('custom/include/MailChimp/MailChimpConnector.php');
    $mailchimp_connector = new MailChimpConnector;
    $campaigns = $mailchimp_connector->getMailChimpCampaigns();
    $response = array('' => 'Please select');
    if(!empty($campaigns) && is_array($campaigns) && count($campaigns) > 0) {
        foreach($campaigns as $campaign){
            $response[$campaign['id']] = $campaign['settings']['title'];
        }
    }
    return $response;
}
?>
<?php
// Merged from custom/Extension/application/Ext/Utils/getCalendarTypes.php


/**
 * This function is associated with custom field in meetings with calendar type
 * 
 * In record view of a meeting, this calendar 
 * displays all available calendar types in the form of a drop down
 * 
 */
function getCalendarTypes() {

    require_once 'custom/include/Google/GoogleHelper.php';

    $GLOBALS['rt_gcalender'] = array();
    $calender_info = array();
    $calender_info['primary'] = 'primary';

    global $current_user;
    $ghelper = new GoogleHelper();
    $ghelper->init_sync();
    $jsonCredentials = $ghelper->auth_handler->getStoredCredentials($current_user->id);

    if ($jsonCredentials) {
        $oauthCredentials = $ghelper->auth_handler->getOauth2Credentials($jsonCredentials);
        $ghelper->google_client->setAccessToken($oauthCredentials->toJson());

        if ($ghelper->google_client->getAccessToken()) {

            $service = new Google_CalendarService($ghelper->google_client);
            $ghelper->google_client->setUseObjects(true);
            $calendarList = $service->calendarList->listCalendarList();

            foreach ($calendarList->getItems() as $calendarListEntry) {
                $calendar_id_c = $calendarListEntry->getId();
                $calendar_type = $calendarListEntry->getSummary();
                $access_role = $calendarListEntry->getAccessRole();
                //use 'primary' as calendar id instead of user's email for main calendar
                if ($calendar_id_c == $current_user->gmail_id) {
                    $calendar_type = $calendar_id_c = 'primary';
                }
                if (strpos($calendar_id_c, "@group.calendar.google.com")) {
                    $calender_info[$calendar_type] = $calendar_type;
                    $GLOBALS['rt_gcalender'][$calendar_type] = $calendar_id_c;
                }
            }
        }
    }

    $admin = new Administration();
    $admin->saveSetting('rt_gsync_cal_id_' . $current_user->id, 'ids', json_encode($GLOBALS['rt_gcalender']));

    return $calender_info;

    //old implementation
    static $calendarTypes = null;
    if (!$calendarTypes) {
        global $db;
        $tables = array('Meetings', 'Calls', 'Tasks');
        $calendarTypes = array();
        $calendarTypes['primary'] = 'primary';
        foreach ($tables as $table) {
            $q = new SugarQuery();
            $q->from(BeanFactory::getBean($table), array('team_security' => false));
            $q->select(array('calendar_type'));
            $q->distinct(true);
            $res = $q->execute();
            foreach ($res as $value) {
                $calendarTypes[$value['calendar_type']] = $value['calendar_type'];
            }
        }
    }
    return $calendarTypes;
}

?>
