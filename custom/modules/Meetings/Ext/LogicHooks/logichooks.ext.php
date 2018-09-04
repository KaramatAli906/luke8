<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/LogicHooks/dri-customer-journey.php


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
// Merged from custom/Extension/modules/Meetings/Ext/LogicHooks/rt_GSync_hooks.php



$hook_array['after_relationship_delete'][] = Array(1, 'inviteeHandler for Meetings:Google Calendar Sync', 'custom/include/Google/google_hook.php', 'GoogleHook', 'inviteeHandler');
$hook_array['after_relationship_delete'][] = Array(2, 'Delete relationship of recurring meeting in sugarcrm', 'custom/include/Google/google_hook.php', 'GoogleHook', 'deleteRecurringEventContact');

$hook_array['before_save'][] = Array(100, 'Handling gevent_id for Meetings:Google Calendar Sync', 'custom/include/Google/google_hook.php', 'GoogleHook', 'geventHandler');

$hook_array['after_save'][] = Array(100, 'Sync all recurring meeting in sugarcrm', 'custom/include/Google/google_hook.php', 'GoogleHook', 'syncRecurringEvent');

//Before saving, fetch calendar id against calendar type and update in DB
$hook_array['before_save'][] = Array(1, 'Setting Calendar ID against a calendar type', 'custom/include/Google/google_hook.php','GoogleHook', 'updateCalendarIDBeforeSave');

?>
