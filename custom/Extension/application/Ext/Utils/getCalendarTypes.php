<?php

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
