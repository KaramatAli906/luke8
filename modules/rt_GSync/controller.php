<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class rt_GSyncController extends SugarController {

    /**
    * Check if current user needs to authenticate from gmail
    * only called for sugar versions less than 7
    */
    public function action_needAuthentication()
    {
        global $current_user;
        if (!empty($current_user->id) && $current_user->enable_gsync && empty($current_user->gdrive_refresh_code)) {
            echo true;
        }
        echo false;
    }
}
