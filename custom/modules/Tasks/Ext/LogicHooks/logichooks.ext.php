<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/LogicHooks/dri-customer-journey.php


$hook_array['before_save'][] = array (
    0,
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks::saveFetchedRow',
    'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks',
    'saveFetchedRow'
);

$hook_array['before_save'][] = array (
    1,
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks::reorder',
    'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks',
    'reorder'
);

$hook_array['before_save'][] = array (
    2,
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks::calculate',
    'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks',
    'calculate'
);

$hook_array['before_save'][] = array (
    3,
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks::validate',
    'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks',
    'validate'
);

$hook_array['after_save'][] = array (
    50,
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks::resaveIfChanged',
    'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks',
    'resaveIfChanged'
);

$hook_array['after_delete'][] = array (
    50,
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks::resave',
    'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php',
    'DRI_Workflow_Task_Templates_Activity_ActivityHooks',
    'resave'
);

?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/LogicHooks/workflow_override.php


$hook_array['after_save'][] = array (
    101,
    'Clear triggered starts registry to enable Adv Workflow to run more than once',
    'custom/include/Datasync/clearRegistryHook.php',
    'WorkflowHooks',
    'clearTriggeredStartsRegistry'
);
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/LogicHooks/setReminderHookDef.php

$hook_array['before_save'][] = Array(
	1,
	'Set Reminder Time',
	'custom/modules/Tasks/SetReminderTime.php',
	'SetReminderTime',
	'before_save_method'
);
// custom/Extension/modules/MODULE/Ext/LogicHooks/NAME.php
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/LogicHooks/rt_GSync_hooks.php


$hook_array['before_save'][] = Array(100, 'Handling gevent_id for Tasks:Google Calendar Sync', 'custom/include/Google/google_hook.php', 'GoogleHook', 'geventHandler');

//Before saving, fetch calendar id against calendar type and update in DB
$hook_array['before_save'][] = Array(1, 'Setting Calendar ID against a calendar type', 'custom/include/Google/google_hook.php','GoogleHook', 'updateCalendarIDBeforeSave');

?>
