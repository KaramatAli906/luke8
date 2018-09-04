<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/LogicHooks/dri-customer-journey.php


$hook_array['before_save'][] = array (
    1,
    'Leads_LogicHook_DRICustomerJourney::saveFetchedRow',
    'custom/modules/Leads/LogicHook/DRICustomerJourney.php',
    'Leads_LogicHook_DRICustomerJourney',
    'saveFetchedRow'
);

$hook_array['after_save'][] = array (
    1,
    'Leads_LogicHook_DRICustomerJourney::startJourney',
    'custom/modules/Leads/LogicHook/DRICustomerJourney.php',
    'Leads_LogicHook_DRICustomerJourney',
    'startJourney'
);

$hook_array['after_save'][] = array (
    2,
    'Leads_LogicHook_DRICustomerJourney::convertLead',
    'custom/modules/Leads/LogicHook/DRICustomerJourney.php',
    'Leads_LogicHook_DRICustomerJourney',
    'convertLead'
);

?>
