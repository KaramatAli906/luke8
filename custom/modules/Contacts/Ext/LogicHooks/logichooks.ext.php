<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/LogicHooks/dri-customer-journey.php


require 'custom/include/SugarObjects/implements/customer_journey_parent/Ext/LogicHooks/addoptify-customer-journey.php';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/LogicHooks/rt_GSync_hooks.php


$hook_array['before_save'][] = Array(100, 'Handling gcontact_id for Contacts:Google Sync', 'custom/include/Google/google_hook.php', 'GoogleHook', 'geventHandler');

?>
