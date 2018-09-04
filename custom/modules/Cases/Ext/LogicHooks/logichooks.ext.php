<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/LogicHooks/dri-customer-journey.php


require 'custom/include/SugarObjects/implements/customer_journey_parent/Ext/LogicHooks/addoptify-customer-journey.php';

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/LogicHooks/SetNameHookDef.php

$hook_array['after_save'][] = Array(
	1,
	'Set the Name field properly',
	'custom/modules/Cases/SetName.php',
	'SetName',
	'after_save_method'
);
// custom/Extension/modules/Cases/Ext/LogicHooks/NAME.php
?>
