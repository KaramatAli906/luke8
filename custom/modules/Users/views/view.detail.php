<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
require_once('modules/Users/views/view.detail.php');
require_once 'custom/include/Google/GoogleHelper.php';

class CustomUsersViewDetail extends UsersViewDetail {
    public function preDisplay()
    {
        parent::preDisplay();
        $this->addButtons();
    }

    /**
    * add button in actions drop down of users detail view to authenticate from google
    */
    private function addButtons()
    {
        global $current_user, $sugar_version;
        $isSugarBWC = version_compare($sugar_version, '7.0.0.0', '<');
        if ($this->bean->id != $current_user->id) {
            return;
        }
        $buttons = $this->ss->get_template_vars('EDITBUTTONS');
        $google_helper = new GoogleHelper();
        $auth_url = $google_helper->getAuthUrl();
        $buttons[] = "<input title='".translate('LBL_GOOGLE_AUTH','Users')."' class='button' LANGUAGE=javascript onclick='redirectToGoogle(\"".$auth_url."\", \"".$this->bean->gmail_id."\", \"".$isSugarBWC."\");' type='button' name='google_auth' value='".translate('LBL_GOOGLE_AUTH','Users')."'>";
        $this->ss->assign('EDITBUTTONS',$buttons);
        $this->dv->defs['templateMeta']['includes'][] = array(
            'file' => 'custom/include/rt_GSync/google_auth.js',
        );
    }
}
