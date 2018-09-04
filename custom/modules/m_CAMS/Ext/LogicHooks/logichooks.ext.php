<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/LogicHooks/addoptify-customer-journey-parent.php


require "custom/include/SugarObjects/implements/customer_journey_parent/Ext/LogicHooks/addoptify-customer-journey.php";

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/LogicHooks/smartsheet_hooks.php


$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'smartsheet logic hooks',

    //The PHP file where your class is located.
    'custom/modules/m_CAMS/LogicHooks/m_CAMSLogicHookClass.php',

    //The class the method is in.
    'm_CAMSLogicHookClass',

    //The method to call.
    'beforeSave'
);
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/LogicHooks/unlink_opportunity_hook.php



?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/LogicHooks/popullate_opportunity.php



?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/LogicHooks/unlink_account_before_save_hook.php



?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/LogicHooks/constructionstage_hooks.php


$hook_version = 1;
$hook_array = Array();

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'smartsheet logic hooks',

    //The PHP file where your class is located.
    'custom/modules/m_CAMS/LogicHooks/m_CAMSLogicHookClass.php',

    //The class the method is in.
    'm_CAMSLogicHookClass',

    //The method to call.
    'afterSave'
);

?>
