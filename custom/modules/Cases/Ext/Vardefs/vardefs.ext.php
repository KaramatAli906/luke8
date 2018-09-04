<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/dri-customer-journey.php


VardefManager::addTemplate('Cases', 'Case', 'customer_journey_parent', 'case', true);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/cases_mv_srvreq_1_Cases.php

// created: 2017-09-19 11:48:09
$dictionary["Case"]["fields"]["cases_mv_srvreq_1"] = array (
  'name' => 'cases_mv_srvreq_1',
  'type' => 'link',
  'relationship' => 'cases_mv_srvreq_1',
  'source' => 'non-db',
  'module' => 'mv_SrvReq',
  'bean_name' => 'mv_SrvReq',
  'vname' => 'LBL_CASES_MV_SRVREQ_1_FROM_CASES_TITLE',
  'id_name' => 'cases_mv_srvreq_1cases_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_total_cost_c.php

 // created: 2017-09-25 10:03:08
$dictionary['Case']['fields']['total_cost_c']['labelValue']='Total Cost';
$dictionary['Case']['fields']['total_cost_c']['enforced']='';
$dictionary['Case']['fields']['total_cost_c']['dependency']='';
$dictionary['Case']['fields']['total_cost_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_currency_id.php

 // created: 2017-09-25 10:03:09

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_base_rate.php

 // created: 2017-09-25 10:03:09

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_service_call_duration_c.php

 // created: 2017-09-25 10:05:13
$dictionary['Case']['fields']['service_call_duration_c']['labelValue']='Service Call Duration';
$dictionary['Case']['fields']['service_call_duration_c']['dependency']='';
$dictionary['Case']['fields']['service_call_duration_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_elevation_c.php

 // created: 2017-09-29 11:48:31
$dictionary['Case']['fields']['elevation_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['elevation_c']['labelValue']='Elevation';
$dictionary['Case']['fields']['elevation_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['elevation_c']['calculated']='true';
$dictionary['Case']['fields']['elevation_c']['formula']='related($opportunities_cases_1,"elevation")';
$dictionary['Case']['fields']['elevation_c']['enforced']='true';
$dictionary['Case']['fields']['elevation_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_floor_plan_c.php

 // created: 2017-09-29 11:49:19
$dictionary['Case']['fields']['floor_plan_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['floor_plan_c']['labelValue']='Floor Plan';
$dictionary['Case']['fields']['floor_plan_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['floor_plan_c']['calculated']='true';
$dictionary['Case']['fields']['floor_plan_c']['formula']='related($opportunities_cases_1,"floor_plan")';
$dictionary['Case']['fields']['floor_plan_c']['enforced']='true';
$dictionary['Case']['fields']['floor_plan_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_garage_type_c.php

 // created: 2017-09-29 11:50:00
$dictionary['Case']['fields']['garage_type_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['garage_type_c']['labelValue']='Garage Type';
$dictionary['Case']['fields']['garage_type_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['garage_type_c']['calculated']='true';
$dictionary['Case']['fields']['garage_type_c']['formula']='related($opportunities_cases_1,"garage_type")';
$dictionary['Case']['fields']['garage_type_c']['enforced']='true';
$dictionary['Case']['fields']['garage_type_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_job_code_c.php

 // created: 2017-09-29 11:50:54
$dictionary['Case']['fields']['job_code_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['job_code_c']['labelValue']='Job Code';
$dictionary['Case']['fields']['job_code_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['job_code_c']['calculated']='true';
$dictionary['Case']['fields']['job_code_c']['formula']='related($opportunities_cases_1,"job_code")';
$dictionary['Case']['fields']['job_code_c']['enforced']='true';
$dictionary['Case']['fields']['job_code_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_square_feet_c.php

 // created: 2017-09-29 11:51:32
$dictionary['Case']['fields']['square_feet_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['square_feet_c']['labelValue']='Square Feet';
$dictionary['Case']['fields']['square_feet_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['square_feet_c']['calculated']='true';
$dictionary['Case']['fields']['square_feet_c']['formula']='related($opportunities_cases_1,"square_ft")';
$dictionary['Case']['fields']['square_feet_c']['enforced']='true';
$dictionary['Case']['fields']['square_feet_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_community_c.php

 // created: 2017-09-29 11:52:12
$dictionary['Case']['fields']['community_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['community_c']['labelValue']='Community';
$dictionary['Case']['fields']['community_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['community_c']['calculated']='true';
$dictionary['Case']['fields']['community_c']['formula']='related($opportunities_cases_1,"community")';
$dictionary['Case']['fields']['community_c']['enforced']='true';
$dictionary['Case']['fields']['community_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_warranty_exp_date_c.php

 // created: 2017-09-29 11:52:58
$dictionary['Case']['fields']['warranty_exp_date_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['warranty_exp_date_c']['labelValue']='Warranty Expiration Date';
$dictionary['Case']['fields']['warranty_exp_date_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['warranty_exp_date_c']['calculated']='true';
$dictionary['Case']['fields']['warranty_exp_date_c']['formula']='related($opportunities_cases_1,"warranty_exp")';
$dictionary['Case']['fields']['warranty_exp_date_c']['enforced']='true';
$dictionary['Case']['fields']['warranty_exp_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/attachments.php


$parentObject = "Case";
$parentModule = "Cases";
$parentTable = "cases";

$childObject = "mv_Attachments";
$childModule = "mv_Attachments";
$childTable = "mv_attachments";

$relationship = strtolower($parentModule . "_" . $childModule);
$label = strtoupper("LBL_$childModule");
$label2 = strtoupper("LBL_$parentModule");


$GLOBALS["dictionary"][$parentObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'module' => $childModule,
  'bean_name' => $childObject,
  'source' => 'non-db',
  'vname' => $label,
];

$GLOBALS["dictionary"][$parentObject]['relationships'][$relationship] = [
  'lhs_module' => $parentModule,
  'lhs_table' => $parentTable,
  'lhs_key' => 'id',
  'rhs_module' => $childModule,
  'rhs_table' => $childTable,
  'rhs_key' => 'parent_id',
  'relationship_type' => 'one-to-many',
  'relationship_role_column' => 'parent_type',
  'relationship_role_column_value' => $parentModule,
];

// Note, you'll also need a relationship file on the Child Module.
// Name this file - "{child}.php" and save it on the parent

// You'll also need a subpanel
// It'll be at /Parent/Ext/c/b/l/subpanels/file.php






?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_consultation_date_c.php

 // created: 2017-09-25 10:05:38
$dictionary['Case']['fields']['consultation_date_c']['labelValue']='Service Consultation Date';
$dictionary['Case']['fields']['consultation_date_c']['enforced']='';
$dictionary['Case']['fields']['consultation_date_c']['dependency']='';
$dictionary['Case']['fields']['consultation_date_c']['type']='datetimecombo';
$dictionary['Case']['fields']['consultation_date_c']['dbType']='datetime';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_name_c.php

 // created: 2017-10-09 16:23:35
$dictionary['Case']['fields']['customer_name_c']['labelValue']='Customer Name';
$dictionary['Case']['fields']['customer_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['customer_name_c']['enforced']='';
$dictionary['Case']['fields']['customer_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_email_c.php

 // created: 2017-10-09 16:26:28
$dictionary['Case']['fields']['customer_email_c']['labelValue']='Customer Email';
$dictionary['Case']['fields']['customer_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['customer_email_c']['enforced']='';
$dictionary['Case']['fields']['customer_email_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_address_state_c.php

 // created: 2017-10-09 16:27:03
$dictionary['Case']['fields']['customer_address_state_c']['group']='customer_address_c';
$dictionary['Case']['fields']['customer_address_state_c']['group_label']='LBL_CUSTOMER_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_address_street_c.php

 // created: 2017-10-09 16:27:03
$dictionary['Case']['fields']['customer_address_street_c']['group']='customer_address_c';
$dictionary['Case']['fields']['customer_address_street_c']['group_label']='LBL_CUSTOMER_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_address_postalcode_c.php

 // created: 2017-10-09 16:27:03
$dictionary['Case']['fields']['customer_address_postalcode_c']['group']='customer_address_c';
$dictionary['Case']['fields']['customer_address_postalcode_c']['group_label']='LBL_CUSTOMER_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_address_city_c.php

 // created: 2017-10-09 16:27:03
$dictionary['Case']['fields']['customer_address_city_c']['group']='customer_address_c';
$dictionary['Case']['fields']['customer_address_city_c']['group_label']='LBL_CUSTOMER_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_address_country_c.php

 // created: 2017-10-09 16:27:04
$dictionary['Case']['fields']['customer_address_country_c']['group']='customer_address_c';
$dictionary['Case']['fields']['customer_address_country_c']['group_label']='LBL_CUSTOMER_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_name.php

 // created: 2017-10-09 16:35:23
$dictionary['Case']['fields']['name']['len']='255';
$dictionary['Case']['fields']['name']['massupdate']=false;
$dictionary['Case']['fields']['name']['comments']='The short description of the bug';
$dictionary['Case']['fields']['name']['importable']='false';
$dictionary['Case']['fields']['name']['duplicate_merge']='disabled';
$dictionary['Case']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['name']['merge_filter']='disabled';
$dictionary['Case']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.53',
  'searchable' => true,
);
$dictionary['Case']['fields']['name']['calculated']='true';
$dictionary['Case']['fields']['name']['formula']='ifElse(
	equal(related($opportunities_cases_1,"name"),""),
	concat(	$customer_address_street_c," ",$customer_address_city_c,", ",$customer_address_state_c),
	concat(	toString($case_number)," - ",related($opportunities_cases_1,"community")," - ",related($opportunities_cases_1,"job_code"))
)';
$dictionary['Case']['fields']['name']['enforced']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_service_date_c.php

 // created: 2017-10-09 16:38:44
$dictionary['Case']['fields']['service_date_c']['labelValue']='Service Call Date';
$dictionary['Case']['fields']['service_date_c']['enforced']='';
$dictionary['Case']['fields']['service_date_c']['dependency']='not(equal($service_call_duration_c,""))';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_date_entered.php

 // created: 2017-10-11 00:02:32
$dictionary['Case']['fields']['date_entered']['audited']=false;
$dictionary['Case']['fields']['date_entered']['comments']='Date record created';
$dictionary['Case']['fields']['date_entered']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['date_entered']['duplicate_merge_dom_value']=1;
$dictionary['Case']['fields']['date_entered']['merge_filter']='disabled';
$dictionary['Case']['fields']['date_entered']['calculated']=false;
$dictionary['Case']['fields']['date_entered']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_service_cons_reminder_c.php

 // created: 2017-10-25 15:15:50
$dictionary['Case']['fields']['service_cons_reminder_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['service_cons_reminder_c']['labelValue']='Service Consultation Reminder';
$dictionary['Case']['fields']['service_cons_reminder_c']['calculated']='true';
$dictionary['Case']['fields']['service_cons_reminder_c']['formula']='addDays($consultation_date_c,-1)';
$dictionary['Case']['fields']['service_cons_reminder_c']['enforced']='true';
$dictionary['Case']['fields']['service_cons_reminder_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_service_call_reminder_c.php

 // created: 2017-10-26 00:09:38
$dictionary['Case']['fields']['service_call_reminder_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['service_call_reminder_c']['labelValue']='service call reminder';
$dictionary['Case']['fields']['service_call_reminder_c']['calculated']='true';
$dictionary['Case']['fields']['service_call_reminder_c']['formula']='addDays($service_date_c,-1)';
$dictionary['Case']['fields']['service_call_reminder_c']['enforced']='true';
$dictionary['Case']['fields']['service_call_reminder_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_account_name.php


$dictionary['Case']['fields']['account_name']['importable']='true';

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/opportunities_cases_1_Cases.php

// created: 2017-09-25 10:18:59
$dictionary["Case"]["fields"]["opportunities_cases_1"] = array (
  'name' => 'opportunities_cases_1',
  'type' => 'link',
  'relationship' => 'opportunities_cases_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_CASES_TITLE',
  'id_name' => 'opportunities_cases_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["Case"]["fields"]["opportunities_cases_1_name"] = array (
  'name' => 'opportunities_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_cases_1opportunities_ida',
  'link' => 'opportunities_cases_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
  'importable' => 'true',
  'populate_list' => [
    'account_name' => 'account_name',
    'account_id' => 'account_id',
  ]
);
$dictionary["Case"]["fields"]["opportunities_cases_1opportunities_ida"] = array (
  'name' => 'opportunities_cases_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_CASES_TITLE_ID',
  'id_name' => 'opportunities_cases_1opportunities_ida',
  'link' => 'opportunities_cases_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
  'importable' => 'true',
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_request_completed_date_c.php

 // created: 2017-12-04 23:11:22
$dictionary['Case']['fields']['request_completed_date_c']['labelValue']='Service Request Completed Date';
$dictionary['Case']['fields']['request_completed_date_c']['enforced']='';
$dictionary['Case']['fields']['request_completed_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_days_to_complete_c.php

 // created: 2017-12-04 23:19:56
$dictionary['Case']['fields']['days_to_complete_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['days_to_complete_c']['labelValue']='Total Days To Complete';
$dictionary['Case']['fields']['days_to_complete_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['days_to_complete_c']['calculated']='1';
$dictionary['Case']['fields']['days_to_complete_c']['formula']='abs(subtract(daysUntil($request_completed_date_c),daysUntil($date_entered)))';
$dictionary['Case']['fields']['days_to_complete_c']['enforced']='1';
$dictionary['Case']['fields']['days_to_complete_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_assign_warranty_c.php

 // created: 2018-01-02 22:49:28
$dictionary['Case']['fields']['assign_warranty_c']['labelValue']='Assign Warranty';
$dictionary['Case']['fields']['assign_warranty_c']['enforced']='';
$dictionary['Case']['fields']['assign_warranty_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/dp_doucumentspackets_cases.php

// created: 2015-09-18 04:41:52
$dictionary["Case"]["fields"]["dp_doucumentspackets_cases"] = array (
  'name' => 'dp_doucumentspackets_cases',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_cases',
  'source' => 'non-db',
  'module' => 'DP_DoucumentsPackets',
  'bean_name' => 'DP_DoucumentsPackets',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_CASES_FROM_DP_DOUCUMENTSPACKETS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/remove_accounts_requirement.php


$dictionary["Case"]["fields"]["account_name"]['required'] = false;
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/signed_copies.php

 // created: 2018-03-10 05:08:58

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_customer_phone_c.php


$dictionary['Case']['fields']['customer_phone_c']['labelValue'] = 'Customer Phone';
$dictionary['Case']['fields']['customer_phone_c']['full_text_search'] = array(
    'enabled' => '0',
    'boost' => '1',
    'searchable' => false,
);
$dictionary['Case']['fields']['customer_phone_c']['enforced'] = '';
$dictionary['Case']['fields']['customer_phone_c']['dependency'] = '';
$dictionary['Case']['fields']['customer_phone_c']['type'] = 'phone';
$dictionary['Case']['fields']['customer_phone_c']['dbType'] = 'varchar';

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/custom_type_account_name.php


//This is only for Email template parsing 
//Line number 136 of the function parse_template_bean in file modules/EmailTemplates/EmailTemplate.php 

$dictionary["Case"]["fields"]["account_name"]['custom_type'] = 'test';

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/rt_docusign_fields.php


$dictionary['Case']['fields']['contact_id_c'] =
    array (
      'required' => false,
      'name' => 'contact_id_c',
      'vname' => 'LBL_ATTACHED_CONTACTS_ID',
      'type' => 'id',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    );

    $dictionary['Case']['fields']['attachedcontacts_c'] = 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'attachedcontacts_c',
      'vname' => 'LBL_ATTACHED_CONTACTS',
      'type' => 'relate',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'boost' => '0',
        'enabled' => false,
      ),
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'contact_id_c',
      'ext2' => 'Contacts',
      'module' => 'Contacts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
     );


$dictionary['Case']['fields']['attacheddocuments_c'] = 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'attacheddocuments_c',
      'vname' => 'LBL_ATTACHED_DOCUMENT',
      'type' => 'relate',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'boost' => '0',
        'enabled' => false,
      ),
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'document_id_c',
      'ext2' => 'Documents',
      'module' => 'Documents',
      'rname' => 'document_name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    );

     $dictionary['Case']['fields']['document_id_c'] = 
    array (
      'required' => false,
      'name' => 'document_id_c',
      'vname' => 'LBL_ATTACHED_CONTACTS_ID',
      'type' => 'id',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    );

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_extended_delay_customer_c.php

 // created: 2018-07-25 18:32:47
$dictionary['Case']['fields']['extended_delay_customer_c']['labelValue']='Extended Delay By Customer';
$dictionary['Case']['fields']['extended_delay_customer_c']['enforced']='';
$dictionary['Case']['fields']['extended_delay_customer_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_extended_delay_customer_note_c.php

 // created: 2018-07-25 18:36:52
$dictionary['Case']['fields']['extended_delay_customer_note_c']['labelValue']='Extended Delay By Customer Note';
$dictionary['Case']['fields']['extended_delay_customer_note_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['extended_delay_customer_note_c']['enforced']='';
$dictionary['Case']['fields']['extended_delay_customer_note_c']['dependency']='';

 
?>
