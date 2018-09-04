<?php

$hook_array['before_save'][] = Array(100, 'Handling gevent_id for Tasks:Google Calendar Sync', 'custom/include/Google/google_hook.php', 'GoogleHook', 'geventHandler');

//Before saving, fetch calendar id against calendar type and update in DB
$hook_array['before_save'][] = Array(1, 'Setting Calendar ID against a calendar type', 'custom/include/Google/google_hook.php','GoogleHook', 'updateCalendarIDBeforeSave');
