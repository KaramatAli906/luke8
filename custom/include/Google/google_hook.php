<?php

require_once("modules/Configurator/Configurator.php");
require_once('custom/include/Google/GoogleHelper.php');
require_once("include/utils/encryption_utils.php");
require_once("modules/Administration/Administration.php");
require_once 'include/SugarQueue/SugarJobQueue.php';
require_once 'modules/SchedulersJobs/SchedulersJob.php';
require_once 'custom/include/Google/lib/GoogleOauthHandler.php';

/**

 */
class GoogleHook {
    /*
     * sets defaults before_save on following
     * 
     * sets defaults before_save on following
     * <ul>
     * <li> gevent_id for Meetings   </li>
     * <li> gevent_id for Calls      </li>
     * <li> gevent_id for Tasks      </li>
     * <li> gcontact_id for Contacts </li>
     * <li> Gmail ID for Users       </li>
     * <li> gdrive_id for Documents  </li>
     * </ul>
     */

    function geventHandler($bean, $event) {
        global $db, $current_user;
        /* unlink Meetings,Calls,Tasks from google event list */
        if ($bean->module_dir == 'Meetings' || $bean->module_dir == 'Calls' || $bean->module_dir == 'Tasks') {
            if ($bean->ext_synced_from_ext !=0 && !empty($bean->fetched_row) && $bean->fetched_row['assigned_user_id'] != $bean->assigned_user_id && !empty($bean->fetched_row['assigned_user_id'])) {
                $bean->gevent_id = '';
                $bean->is_gevent = '0';
            }
            
            if ($bean->ext_synced_from_ext !=0 && !empty($bean->fetched_row) && $bean->fetched_row['calendar_type'] != $bean->calendar_type && !empty($bean->fetched_row['calendar_type'])) {
                $bean->gevent_id='';
            }

            if ($bean->allday == 1 && !isset($_SESSION['dcheckAlldayFunc']) && !empty($bean->fetched_row)) {
                $GLOBALS['log']->debug("All day time reassign....");
                $bean->date_start = $bean->fetched_row['date_start'];
                if ($bean->module_dir == 'Meetings' || $bean->module_dir == 'Calls') {
                    $bean->date_end = $bean->fetched_row['date_end'];
                    $bean->duration_hours = $bean->fetched_row['duration_hours'];
                    $bean->duration_minutes = $bean->fetched_row['duration_minutes'];
                }
                if ($bean->module_dir == 'Tasks') {
                    $bean->date_due = $bean->fetched_row['date_due'];
                }
            }
            //handling of Recurrences in Sugar
            if (!empty($bean->fetched_row) && $bean->fetched_row['id'] != $bean->id && !empty($bean->repeat_type)) {
                //$bean->gevent_id = '';
            }
        }
        /* unlink Contacts from google Contacts list */
        if ($bean->module_dir == 'Contacts') {
            if (!empty($bean->fetched_row) && $bean->fetched_row['assigned_user_id'] != $bean->assigned_user_id) {
                $bean->gcontact_id = '';
            }
        }
        /* unlink Documents from google drive */
        if ($bean->module_dir == 'Documents') {
            if (!empty($bean->fetched_row) && $bean->fetched_row['assigned_user_id'] != $bean->assigned_user_id) {
                $bean->gdrive_id = '';
            }
        }
        /* unlink Documents,Contacts,Meetings,Calls,Tasks from google if user has changed his gmail id in settings */
        if ($bean->module_dir == 'Users') {
            if (!empty($bean->fetched_row) && $bean->fetched_row['gmail_id'] != $bean->gmail_id) {
                //start clean sync for cal
                if (!empty($bean->fetched_row['gmail_id'])) {

                    // get current gmail stored credentials (auth, refresh token's etc) and save them
                    // in job data because those will be replaced by new gmail credentials until the job 
                    // will run as user have now changed its gmail id
                    $auth_handler = new GoogleOauthHandler();
                    $stored_credentials = $auth_handler->getStoredCredentials($bean->id);
                    $data = array(
                        'gmail_id' => $bean->fetched_row['gmail_id'],
                        'user_bean_id' => $bean->id,
                        'stored_credentials' => $stored_credentials
                    );
                    // lock the calender sync job until clean sync is performed
                    // this hook can be called by multiple users, multiple times, so assign guid to each lock 
                    // so that each job unlocks its own entry
                    $configurator = new Configurator();
                    $guid = create_guid();
                    $configurator->config = array_merge($configurator->config, array(
                        'calender_sync_lock' => array(
                            $guid => true
                        )
                    ));
                    $configurator->saveConfig();
                    $data['sync_lock_id'] = $guid;
                    //create and submit clean sync job as gmail id is changed
                    $job = new SchedulersJob();
                    $job->name = "RTGSync: Clean Sync";
                    $job->target = "class::CleanSyncJob";
                    $job->assigned_user_id = $current_user->id;
                    $job->data = json_encode($data);
                    $queue = new SugarJobQueue();
                    $queue->submitJob($job);
                }
                $sql_contacts = "UPDATE contacts SET gcontact_id='', date_modified='" . $bean->date_modified . "' WHERE assigned_user_id='" . $bean->id . "';";
                $sql_documents = "UPDATE documents SET gdrive_id='', date_modified='" . $bean->date_modified . "' WHERE assigned_user_id='" . $bean->id . "';";
                $db->query($sql_contacts);
                $db->query($sql_documents);
                //unset refresh code
                $bean->gdrive_refresh_code = '';
                //unset sync date
                $bean->lastsync_calendar = '2013-01-01 01:01:01';
                $bean->lastsync_contacts = '2013-01-01 01:01:01';
                $bean->lastsync_drive = '2013-01-01 01:01:01';
            }
            //START: edit 02-01-2013 for docs/authorization
            if (!empty($bean->gmail_id) && ($bean->fetched_row['gmail_id'] != $bean->gmail_id || empty($bean->gdrive_refresh_code)) && sugar_is_file('custom/include/Google/google-api-php-client/src/Google_Client.php')) {
                $GLOBALS['log']->info("setting redirect for google authorization token for user: " . $bean->name);
                $_REQUEST['oauth_redirect'] = '1';
            }
            //END: edit 02-01-2013 for docs
        }
    }

    //START: edit 02-01-2013 for docs , redirecting user to a google authorization page
    /*
     * redirecting user to a google authorization page
     * 
     * after_save on Users
     */
    function gdriveHandler($bean, $event) {
        global $db, $current_user;
        if ($bean->module_dir == 'Users' && $current_user->id == $bean->id) {
            if (isset($_REQUEST['oauth_redirect']) && $_REQUEST['oauth_redirect'] == '1' &&
                    !empty($_REQUEST['return_module']) && $_REQUEST['return_module'] == 'Users') {
                $GLOBALS['log']->info("redirecting...");
                SugarApplication::redirect("index.php?module=Users&action=GoogleOauth");
            }
        }
        /* as date modified of document is not going to be changed when new revisions are created , this hook will change date_modified
          and also as there is no facility to update file of doc as excel or other type due to this reason we have to unlink that doc to be created new one
         */
        if ($bean->module_dir == 'DocumentRevisions') {
            if (!empty($bean->file_mime_type) && !empty($bean->documents->beans[$bean->document_id]->last_rev_mime_type)) {
                $sql_documents = "UPDATE documents SET documents.date_modified='" . $bean->date_modified . "' WHERE documents.id='" . $bean->document_id . "';";
                //Removed commented & unused code
                $db->query($sql_documents); //documents
            }
        }
    }

    /**
     * relationship removed (using subpanel) with invitee update date modified so that it can be synced when sync will be performed
     * 
     * after_relationship_delete on meetings
     * after_relationship_delete on calls
     */
    function inviteeHandler($bean, $event, $arguments) {
        if (isset($arguments['related_module'])) {
            if (in_array($arguments['related_module'], array(
                        'Contacts',
                        'Users',
                        'Leads'
                    )) && $bean->deleted != '1'
            ) {
                $bean->save();
                $GLOBALS['log']->debug("Bean saved in after_relationship_delete hook");
            }
        }
    }

    /**
     * The purpose of this function is to sync all recurring event. i.e If we update one recurring event, 
     *  all related recuuring event become like this updated event. 
     */
    function syncRecurringEvent($bean, $event) {
        global $db;
        //Removed commented code
    }

    /**
     * The purpose of this function is to delete recurring event contact. 
     */
    function deleteRecurringEventContact($bean, $event, $arguments) {
        global $db;
        //Removed commented code
    }

    /**
     * This function is responsible for determining suitable google calendar before saving meeting, calls or tasks
     *
     *
     * It performs certain checks:
     * 1. checks if GSync is saving a new event, skips processing
     * 2. If an event is being updated and there is no change in calendar type, skip
     * 3. If calendar type is changed to a read only calendar, set calendar type back to original
     * 4. Else find calendar id against calendar type and update bean's calendar id
     * 
     * @param  object  $bean    bean     
     * @param  string  $event   sugar status
     * @access public
     */
    function updateCalendarIDBeforeSave($bean, $event) {
        global $current_user;


        $admin = new Administration();
        $admin->retrieveSettings();

        $g_cal_ids = $admin->settings['rt_gsync_cal_id_' . $current_user->id . '_ids'];
        $cid = $g_cal_ids[$bean->calendar_type];

        //If GSync is creating a new event, no need to process
        if ($bean->is_gevent == 1 &&
                array_key_exists('gsync_from_google', $_ENV) && $_ENV['gsync_from_google'] == 1) {
            return;
        }

        //If updated calendar type is read only, set it back to the previous and log
        if (strpos($bean->calendar_type, ' (read only)') == true) {

            $ctype = str_replace(' (read only)', '', $bean->calendar_type);
            $GLOBALS['log']->fatal($ctype . " is a read only calendar, hence " . $bean->object_name . ": " . $bean->name . " can not be updated in it.");

            //If it's previous calendar was also read only, don't update the date_modified
            if (strpos($bean->fetched_row['calendar_type'], ' (read only)') == true) {
                $bean->calendar_type = $bean->fetched_row['calendar_type'];
                $bean->date_modified = $bean->fetched_row['date_modified'];
                return;
            }

            $bean->calendar_id_c = $bean->fetched_row['calendar_id_c'] ? : 'primary';
            $bean->calendar_type = $bean->fetched_row['calendar_type'] ? : 'primary';
            return;
        }

        global $current_user;
        // If change of calendar is authentic, search for calendar id
        // against new calendar type from calendar modules 
        // and set the bean's calendar id accordingly
        /*$c_modules = array('Meetings', 'Calls', 'Tasks');
        foreach ($c_modules as $c_module) {
            $q = new SugarQuery();
            $q->from(BeanFactory::newBean($c_module), array('team_security' => false));
            $q->select(array('calendar_id_c'));
            $q->where()->equals('calendar_type', $bean->calendar_type);
            $q->distinct(true);
            // in case you want to see the query built (without parameters)
            //$GLOBALS['log']->fatal(print_r($q->compile()->getSQL(), 1));
            $result = $q->execute();
            if (isset($result[0]['calendar_id_c']) && $result[0]['calendar_id_c']) {
                $cid = $result[0]['calendar_id_c'];
                // no need to process the remaining tables
                break;
            }
        }*/

        if ($bean->assigned_user_id == NULL)
            $bean->assigned_user_id = $current_user->id;

        if (isset($cid) && $cid)
            $bean->calendar_id_c = $cid;
        else
            $bean->calendar_id_c = $bean->calendar_type = 'primary';

        $bean->gcid_changed_c = 1;
    }

}
