<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/DRI_SubWorkflows/Ext/LogicHooks/license_check.php


$hook_array['before_retrieve'][] = array (
    1,
    'DRI_Workflows\ConnectorHelper::checkLicense',
    'modules/DRI_Workflows/ConnectorHelper.php',
    'DRI_Workflows\ConnectorHelper',
    'checkLicenseBeanHook'
);

$hook_array['before_save'][] = array (
    1,
    'DRI_Workflows\ConnectorHelper::checkLicense',
    'modules/DRI_Workflows/ConnectorHelper.php',
    'DRI_Workflows\ConnectorHelper',
    'checkLicenseBeanHook'
);

$hook_array['before_delete'][] = array (
    1,
    'DRI_Workflows\ConnectorHelper::checkLicense',
    'modules/DRI_Workflows/ConnectorHelper.php',
    'DRI_Workflows\ConnectorHelper',
    'checkLicenseBeanHook'
);

?>
