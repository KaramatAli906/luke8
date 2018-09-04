<?php
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
