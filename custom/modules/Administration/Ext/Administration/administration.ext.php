<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/FilterDeployerLicenseAdmin.php



    global $sugar_version, $admin_group_header;

    if (!is_array($jckl_options_defs)) {
        $jckl_options_defs=array();
    }

    $jckl_options_defs['Administration']['jackal_Filter_license']= array('helpInline','LBL_JCKL_FILTER_LICENSEADDON_LICENSE_TITLE','LBL_JCKL_FILTER_LICENSEADDON_LICENSE','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=jckl_FilterTemplates&action=license", {trigger: true});');

    $jckl_options_defs['Administration']['jackal_Filter_link']=array(
        'Administration',
        'LBL_JACKAL_FILTER_TITLE',
        'LBL_JACKAL_FILTER_DESCRIPTION',
        'javascript:parent.SUGAR.App.router.navigate("#jckl_FilterTemplates", {trigger: true})'
    );
    $admin_group_header['jackal_software']=array(
        'LBL_JACKAL_DASHBOARD_MANAGER_GROUP_TITLE',
        '',
        'false',
        $jckl_options_defs,
        'LBL_JACKAL_DASHBOARD_MANAGER_GROUP_DESCRIPTION',
    );
?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/dri_customer_journey_settings.php


$admin_option_defs = array();
$admin_option_defs['DRI_Workflows']['dri_customer_journey_templates'] = array (
    'DRI_Workflow_Templates',
    'LBL_DRI_CUSTOMER_JOURNEY_TEMPLATES_LINK_NAME',
    'LBL_DRI_CUSTOMER_JOURNEY_TEMPLATES_LINK_DESC',
    'javascript:parent.SUGAR.App.router.navigate("DRI_Workflow_Templates", {trigger: true});',
);

$admin_option_defs['Administration']['dri_customer_journey_settings'] = array (
    'Administration',
    'LBL_DRI_CUSTOMER_JOURNEY_SETTINGS_LINK_NAME',
    'LBL_DRI_CUSTOMER_JOURNEY_SETTINGS_LINK_DESC',
    'javascript:parent.SUGAR.App.router.navigate("DRI_Workflows/layout/configuration", {trigger: true});',
);

$admin_option_defs['Administration']['dri_customer_journey_configure_modules'] = array (
    'Administration',
    'LBL_DRI_CUSTOMER_JOURNEY_CONFIGURE_MODULES_LINK_NAME',
    'LBL_DRI_CUSTOMER_JOURNEY_CONFIGURE_MODULES_LINK_DESC',
    'javascript:parent.SUGAR.App.router.navigate("DRI_Workflows/layout/configure-modules", {trigger: true});',
);

$admin_group_header[] = array(
    'LBL_DRI_CUSTOMER_JOURNEY_SETTINGS_TITLE',
    '',
    false,
    $admin_option_defs,
    'LBL_DRI_CUSTOMER_JOURNEY_SETTINGS_DESC',
);

?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/smart_sheet_config.php


global $sugar_version, $admin_group_header;

if (!is_array($smartsheet_options_defs)) {
    $smartsheet_options_defs = array();
}

$smartsheet_options_defs['Administration']['smartsheet_config'] = array(
    'Administration',
    'LBL_SMARTSHEET_TITLE',
    'LBL_SMARTSHEET_DESCRIPTION',
    './index.php?module=Administration&action=smartSheetConfig'
);

$smartsheet_options_defs['Administration']['syn_sugar_tosmartsheet'] = array(
    'Administration',
    'LBL_SYN_SUGAR_TOSMARTSHEET',
    'LBL_SYN_SUGAR_TOSMARTSHEET_DESCRIPTION',
    './index.php?module=Administration&action=validatesmartsheetkey'
);

/*
  //Sugar to smartsheet
  $smartsheet_options_defs['Administration']['sugar_to_smartsheet_sync'] = array(
  'Administration',
  'LBL_SUGAR_TO_SMARTSHEET_ADMIN_BTN',
  'LBL_SUGAR_TO_SMARTSHEET_DESCRIPTION_ADMIN_BTN',
  './index.php?entryPoint=test?mode=a'
  );

  //smartsheet to sugar
  $smartsheet_options_defs['Administration']['smartsheet_to_sugar_sync'] = array(
  'Administration',
  'LBL_SMARTSHEET_TO_SUGAR_ADMIN_BTN',
  'LBL_SMARTSHEET_TO_SUGAR_DESCRIPTION_ADMIN_BTN',
  './index.php?entryPoint=test?mode=b'
  );
 */
//main header
$admin_group_header['smartsheet_header'] = array(
    'LBL_SMARTSHEET_HEADER',
    '',
    'false',
    $smartsheet_options_defs,
    'LBL_SMARTSHEET_DESCRIPTION',
);

?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/mailchimp_settings.php


$admin_option_defs = array();

$admin_option_defs['Administration']['mailchimp_configuration'] = array('Administration', 'LBL_MAILCHIMP_CONFIGURATION_PANEL_LINK', 'LBL_MAILCHIMP_CONFIGURATION_INFO', './index.php?module=Administration&action=mailChimpConfiguration');

$admin_option_defs['Administration']['mailchimp_fields_mapping'] = array('Administration', 'LBL_MAILCHIMP_FIELDS_MAPPING_PANEL_LINK', 'LBL_MAILCHIMP_FIELDS_MAPPING_INFO', './index.php?module=Administration&action=mailChimpFieldsMapping');

$admin_option_defs['Administration']['mailchimp_modules_mapping'] = array('Administration', 'LBL_MAILCHIMP_MODULES_MAPPING_PANEL_LINK', 'LBL_MAILCHIMP_MODULES_MAPPING_INFO', './index.php?module=Administration&action=mailChimpModulesMapping');

$admin_group_header[] = array('LBL_MAILCHIMP_CONFIGURATION_PANEL', '', false, $admin_option_defs, '');

?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/administration_docusign_configrations.php


global $current_user;

$admin_option_defs = array();
$admin_option_defs['RT_DocuSign']['config_docusign'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'RT_DocuSign',
    //Link name label 
    'LBL_LINK_NAME',
    //Link description label
    'LBL_LINK_DESCRIPTION',
    //Link URL
    'javascript:parent.SUGAR.App.router.navigate("RT_DocuSign/layout/dsconfig",{trigger: true});',
);
$admin_option_defs['RT_DocuSign']['field_mapping_docusign'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'RT_DocuSign',
    //Link name label 
    'LBL_MAPPING_LINK',
    //Link description label
    'LBL_MAPPING_DESCRIPTION',
    //Link URL
    './index.php?module=Administration&action=docuSignFieldsMapping',
);

$admin_group_header[] = array(
    //Section header label
    'LBL_SECTION_HEADER',
    //$other_text parameter for get_form_header()
    '',
    //$show_help parameter for get_form_header()
    false,
    //Section links
    $admin_option_defs,
    //Section description label
    'LBL_SECTION_DESCRIPTION'
);

if (!$current_user->isAdmin() == 1) {
    unset($admin_group_header[4]);
}

?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/ops_modules.php


    $section_links = array(
        'Administration' => array(
            'ops_backups' => array(
                'DataSets',
                'LBL_OPS_BACKUPS',
                'LBL_OPS_BACKUPS_DESCRIPTION',
                'javascript:parent.SUGAR.App.router.navigate("ops_Backups", {trigger: true});',
            ),
        )
    );

    if (strpos($GLOBALS['sugar_version'], "7.5") === false) {
        $section_links['Administration']['ops_notification_settings'] = array(
            'Administration',
            'LBL_OPS_NOTIFICATION_SETTINGS_LINK_NAME',
            'LBL_OPS_NOTIFICATION_SETTINGS_LINK_DESCRIPTION',
            'javascript:parent.SUGAR.App.router.navigate("ops_Backups/config", {trigger: true});',
        );
    }

    $admin_group_header[] = array(
        //Section header label
        'LBL_OPS_ONDEMAND_SECTION_HEADER',
        //$other_text parameter for get_form_header()
        '',
        //$show_help parameter for get_form_header()
        false,
        //Section links
        $section_links,
        //Section description label
        'LBL_OPS_ONDEMAND_SECTION_DESCRIPTION'
    );

?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/excelsheet_config.php


$admin_option_defs = array();
$admin_option_defs['RT_DocuSign']['excel_field_mapping'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'RT_DocuSign',
    //Link name label 
    'LBL_LINK_NAME_EXCELSHEET',
    //Link description label
    'LBL_LINK_DESCRIPTION_EXCELSHEET',
    //Link URL
    './index.php?module=Administration&action=excelSheetFieldsMapping',
);


$admin_group_header[] = array(
    //Section header label
    'LBL_SECTION_HEADER_EXCELSHEET',
    //$other_text parameter for get_form_header()
    '',
    //$show_help parameter for get_form_header()
    false,
    //Section links
    $admin_option_defs,
    //Section description label
    'LBL_SECTION_DESCRIPTION_EXCELSHEET'
);


?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/Schedulers_admin.php

global $sugar_version;
$isSugarBW = version_compare($sugar_version, '7.0.0.0', '<');

//URLs for sugar7
$gsync_configure_users = 'javascript:parent.SUGAR.App.router.navigate("#rt_GSync/layout/userconfiguration", {trigger: true});';

//If sugar is backward
if($isSugarBW){
	$gsync_configure_users = './index.php?module=rt_GSync&action=configureUsers';
}
$admin_option_defs = array();
$admin_option_defs['Administration']['gsync_configure_users'] = array('rt_GSync','LBL_GSYNC_CONFIGURE_USERS_TITLE','LBL_GSYNC_CONFIGURE_USERS',$gsync_configure_users);

$admin_group_header[] = array('LBL_GMAILLICENSEADDON', '', false, $admin_option_defs, '');

?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/emailTemplateForMeetingInvitesMangement.php


$admin_option_defs = array();
$admin_option_defs['Administration']['email_template_for_meeting_invites_mangement'] = array(
    '',
    'LBL_EMAIL_TEMPLATE_FOR_MEETING_INVITES_MANGEMENT_ADMIN',
    'LBL_EMAIL_TEMPLATE_FOR_MEETING_INVITES_MANGEMENT_ADMIN_DESC',
    'javascript:parent.SUGAR.App.router.navigate("#Meetings/layout/email-template-for-invites", {trigger: true})',
);

$admin_group_header[] = array(
    'LBL_EMAIL_TEMPLATE_FOR_MEETING_INVITES_MANGEMENT',
    '',
    false,
    $admin_option_defs,
    ''
);

?>
