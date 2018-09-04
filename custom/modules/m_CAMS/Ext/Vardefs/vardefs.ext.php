<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/address.php


$dictionary['m_CAMS']['fields']['primary_address_street'] = array(
    'name' => 'primary_address_street',
    'vname' => 'LBL_PRIMARY_ADDRESS_STREET',
    'type' => 'text',
    'dbType' => 'varchar',
    'len' => 150,
    'group' => 'primary_address',
    'group_label' => 'LBL_PRIMARY_ADDRESS',
    'duplicate_on_record_copy' => 'always',
    'full_text_search' => array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.34000000000000002,
    ),
    'comment' => 'The street address used for for primary purposes',
    'merge_filter' => 'enabled',
);
$dictionary['m_CAMS']['fields']['primary_address_street_2'] = array(
    'name' => 'primary_address_street_2',
    'vname' => 'LBL_PRIMARY_ADDRESS_STREET_2',
    'type' => 'varchar',
    'len' => 150,
    'duplicate_on_record_copy' => 'always',
    'source' => 'non-db',
);
$dictionary['m_CAMS']['fields']['primary_address_street_3'] = array(
    'name' => 'primary_address_street_3',
    'vname' => 'LBL_PRIMARY_ADDRESS_STREET_3',
    'type' => 'varchar',
    'len' => 150,
    'duplicate_on_record_copy' => 'always',
    'source' => 'non-db',
);
$dictionary['m_CAMS']['fields']['primary_address_street_4'] = array(
    'name' => 'primary_address_street_4',
    'vname' => 'LBL_PRIMARY_ADDRESS_STREET_4',
    'type' => 'varchar',
    'len' => 150,
    'duplicate_on_record_copy' => 'always',
    'source' => 'non-db',
);
$dictionary['m_CAMS']['fields']['primary_address_city'] = array(
    'name' => 'primary_address_city',
    'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
    'type' => 'varchar',
    'len' => 100,
    'group' => 'primary_address',
    'duplicate_on_record_copy' => 'always',
    'comment' => 'The city used for the primary address',
    'merge_filter' => 'enabled',
);
$dictionary['m_CAMS']['fields']['primary_address_state'] = array(
    'name' => 'primary_address_state',
    'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
    'type' => 'varchar',
    'len' => 100,
    'group' => 'primary_address',
    'duplicate_on_record_copy' => 'always',
    'comment' => 'The state used for the primary address',
    'merge_filter' => 'disabled',
    'audited' => false,
    'massupdate' => true,
    'comments' => 'The state used for the primary address',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'calculated' => false,
    'dependency' => false,
);
$dictionary['m_CAMS']['fields']['primary_address_postalcode'] = array(
    'name' => 'primary_address_postalcode',
    'vname' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
    'type' => 'varchar',
    'len' => 20,
    'group' => 'primary_address',
    'duplicate_on_record_copy' => 'always',
    'comment' => 'The zip code used for the primary address',
    'merge_filter' => 'enabled',
);
$dictionary['m_CAMS']['fields']['primary_address_country'] = array(
    'name' => 'primary_address_country',
    'vname' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
    'type' => 'varchar',
    'group' => 'primary_address',
    'duplicate_on_record_copy' => 'always',
    'comment' => 'The country used for the primary address',
    'merge_filter' => 'enabled',
);


?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/email.php


// $dictionary['m_CAMS']['fields']['email'] = array(
//     'name' => 'email',
//     'type' => 'email',
//     'query_type' => 'default',
//     'source' => 'non-db',
//     'operator' => 'subquery',
//     'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
//     'db_field' => array (
//         0 => 'id',
//     ),
//     'vname' => 'LBL_ANY_EMAIL',
//     'studio' => array (
//         'visible' => true,
//         'searchview' => true,
//         'editview' => true,
//         'editField' => true,
//     ),
//     'duplicate_on_record_copy' => 'always',
//     'len' => 100,
//     'link' => 'email_addresses_primary',
//     'rname' => 'email_address',
//     'module' => 'EmailAddresses',
//     'full_text_search' => array(
//         'enabled' => true,
//         'searchable' => true,
//         'boost' => 1.95,
//     ),
// );

// $dictionary['m_CAMS']['fields']['email_addresses_primary'] = array(
//     'name' => 'email_addresses_primary',
//     'type' => 'link',
//     'relationship' => 'm_cams_email_addresses_primary',
//     'source' => 'non-db',
//     'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
//     'duplicate_merge' => 'disabled',
//     'primary_only' => true,
// );

// $dictionary['m_CAMS']['relationships']['m_cams_email_addresses_primary'] = array(
//     'lhs_module' => 'm_CAMS',
//     'lhs_table' => 'm_cams',
//     'lhs_key' => 'id',
//     'rhs_module' => 'EmailAddresses',
//     'rhs_table' => 'email_addresses',
//     'rhs_key' => 'id',
//     'relationship_type' => 'many-to-many',
//     'join_table' => 'email_addr_bean_rel',
//     'join_key_lhs' => 'bean_id',
//     'join_key_rhs' => 'email_address_id',
//     'relationship_role_column' => 'bean_module',
//     'relationship_role_column_value' => 'm_CAMS',
//     'primary_flag_column' => 'primary_address',
// );


?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/addoptify-customer-journey-parent.php


VardefManager::addTemplate('m_CAMS', 'm_CAMS', 'customer_journey_parent', 'm_CAMS', true);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_subdivision.php

 // created: 2017-09-21 23:01:04
$dictionary['m_CAMS']['fields']['community']['default']='';
$dictionary['m_CAMS']['fields']['community']['required']=true;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/attachments.php


$parentObject = "m_CAMS";
$parentModule = "m_CAMS";
$parentTable = "m_cams";

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
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_lot_inventory_note.php

 // created: 2017-10-02 12:13:51

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_permit_total_days.php

 // created: 2017-10-02 13:08:54
$dictionary['m_CAMS']['fields']['permit_total_days']['importable']='false';
$dictionary['m_CAMS']['fields']['permit_total_days']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['permit_total_days']['duplicate_merge_dom_value']=0;
$dictionary['m_CAMS']['fields']['permit_total_days']['calculated']='1';
$dictionary['m_CAMS']['fields']['permit_total_days']['formula']='daysBetween($permit_issued_date,$permit_upload_date)';
$dictionary['m_CAMS']['fields']['permit_total_days']['enforced']=true;
$dictionary['m_CAMS']['fields']['permit_total_days']['precision']=0;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_actual_hard_lot_costs.php

 // created: 2017-10-02 13:09:15
$dictionary['m_CAMS']['fields']['actual_hard_lot_costs']['calculated']='1';
$dictionary['m_CAMS']['fields']['actual_hard_lot_costs']['precision']=2;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_gross_margin.php

 // created: 2017-10-02 13:09:24
$dictionary['m_CAMS']['fields']['gross_margin']['precision']=2;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_mgr_walk_close_days.php

 // created: 2017-10-04 16:43:17
$dictionary['m_CAMS']['fields']['mgr_walk_close_days']['importable']='false';
$dictionary['m_CAMS']['fields']['mgr_walk_close_days']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['mgr_walk_close_days']['duplicate_merge_dom_value']=0;
$dictionary['m_CAMS']['fields']['mgr_walk_close_days']['calculated']='1';
$dictionary['m_CAMS']['fields']['mgr_walk_close_days']['formula']='abs(daysBetween($closing_date,$const_finish_date))';
$dictionary['m_CAMS']['fields']['mgr_walk_close_days']['enforced']=true;
$dictionary['m_CAMS']['fields']['mgr_walk_close_days']['precision']=0;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_sale_type.php

 // created: 2017-11-19 00:35:25
$dictionary['m_CAMS']['fields']['sale_type']['required']=false;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_cost_variance_budget.php

 // created: 2017-12-02 00:46:37
$dictionary['m_CAMS']['fields']['cost_variance_budget']['full_text_search']=array (
);
$dictionary['m_CAMS']['fields']['cost_variance_budget']['precision']=2;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_hard_cost_per_sales.php

 // created: 2017-12-02 00:48:08
$dictionary['m_CAMS']['fields']['hard_cost_per_sales']['calculated']='1';
$dictionary['m_CAMS']['fields']['hard_cost_per_sales']['precision']=2;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_closing_date.php

 // created: 2017-12-02 00:48:36
$dictionary['m_CAMS']['fields']['closing_date']['massupdate']=false;
$dictionary['m_CAMS']['fields']['closing_date']['importable']='true';
$dictionary['m_CAMS']['fields']['closing_date']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['closing_date']['duplicate_merge_dom_value']='0';
$dictionary['m_CAMS']['fields']['closing_date']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_lot_cost_percent.php

 // created: 2017-12-07 16:59:03
$dictionary['m_CAMS']['fields']['lot_cost_percent']['calculated']='1';
$dictionary['m_CAMS']['fields']['lot_cost_percent']['precision']=2;
$dictionary['m_CAMS']['fields']['lot_cost_percent']['required']=false;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_pre_start_status_c.php

 // created: 2017-12-14 13:13:25
$dictionary['m_CAMS']['fields']['pre_start_status_c']['labelValue']='Pre-Start Status';
$dictionary['m_CAMS']['fields']['pre_start_status_c']['dependency']='';
$dictionary['m_CAMS']['fields']['pre_start_status_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_equity_requirement_c.php

 // created: 2017-12-30 05:49:17
$dictionary['m_CAMS']['fields']['equity_requirement_c']['labelValue']='Equity Requirement';
$dictionary['m_CAMS']['fields']['equity_requirement_c']['enforced']='';
$dictionary['m_CAMS']['fields']['equity_requirement_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_list_price_date_c.php

 // created: 2018-01-03 16:05:53
$dictionary['m_CAMS']['fields']['list_price_date_c']['labelValue']='List Price Date';
$dictionary['m_CAMS']['fields']['list_price_date_c']['enforced']='false';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_list_price_by_name_c.php

 // created: 2018-01-03 16:17:49
$dictionary['m_CAMS']['fields']['list_price_by_name_c']['labelValue']='List Price By';
$dictionary['m_CAMS']['fields']['list_price_by_name_c']['dependency']='';
$dictionary['m_CAMS']['fields']['list_price_by_name_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_list_price_c.php

 // created: 2018-01-03 16:18:17
$dictionary['m_CAMS']['fields']['list_price_c']['labelValue']='List Price';
$dictionary['m_CAMS']['fields']['list_price_c']['enforced']='';
$dictionary['m_CAMS']['fields']['list_price_c']['dependency']='';
$dictionary['m_CAMS']['fields']['list_price_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_projected_margin_c.php

 // created: 2018-01-03 16:18:58
$dictionary['m_CAMS']['fields']['projected_margin_c']['labelValue']='Projected Margin';
$dictionary['m_CAMS']['fields']['projected_margin_c']['enforced']='';
$dictionary['m_CAMS']['fields']['projected_margin_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_loan_status.php

 // created: 2018-01-24 17:22:56
$dictionary['m_CAMS']['fields']['loan_status']['default']='Need to Submit';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_community.php

 // created: 2018-01-26 05:15:17

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/m_cams_activities_1_meetings_m_CAMS.php

// created: 2018-02-06 21:26:20
$dictionary["m_CAMS"]["fields"]["m_cams_activities_1_meetings"] = array (
  'name' => 'm_cams_activities_1_meetings',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_MEETINGS_FROM_MEETINGS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/m_cams_activities_1_calls_m_CAMS.php

// created: 2018-02-06 21:26:54
$dictionary["m_CAMS"]["fields"]["m_cams_activities_1_calls"] = array (
  'name' => 'm_cams_activities_1_calls',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_CALLS_FROM_CALLS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/m_cams_activities_1_notes_m_CAMS.php

// created: 2018-02-06 21:27:15
$dictionary["m_CAMS"]["fields"]["m_cams_activities_1_notes"] = array (
  'name' => 'm_cams_activities_1_notes',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_NOTES_FROM_NOTES_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/m_cams_activities_1_tasks_m_CAMS.php

// created: 2018-02-06 21:27:40
$dictionary["m_CAMS"]["fields"]["m_cams_activities_1_tasks"] = array (
  'name' => 'm_cams_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_TASKS_FROM_TASKS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/m_cams_activities_1_emails_m_CAMS.php

// created: 2018-02-06 21:28:03
$dictionary["m_CAMS"]["fields"]["m_cams_activities_1_emails"] = array (
  'name' => 'm_cams_activities_1_emails',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_EMAILS_FROM_EMAILS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_smartsheet_modified_at.php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['m_CAMS']['fields']['smartsheet_modified_at'] = array(
    'name' => 'smartsheet_modified_at',
    'vname' => 'LBL_SMARTSHEET_DATE_MODIFIED',
    'type' => 'datetime',
    'comment' => 'smart sheet Date record last modified',
    'readonly' => true,
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_last_sync_time.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['m_CAMS']['fields']['last_sync_time']=array(
    'name' => 'last_sync_time',
    'label' => 'LBL_DATETIME_FIELD_LAST_SYNC_TIME',
    'vname' => 'LBL_DATETIME_FIELD_LAST_SYNC_TIME',
    'type' => 'datetimecombo',
    'help' => 'Last sync time of this record with smartsheet',
    'readonly' => true,
);


?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_sync_cam_to_smartsheet.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['m_CAMS']['fields']['sync_cam_to_smartsheet']=array(
    'name' => 'sync_cam_to_smartsheet',
    'label' => 'LBL_SYNC_CAM_TO_SMARTSHEET',
    'vname' => 'LBL_SYNC_CAM_TO_SMARTSHEET',
    'type' => 'bool',
);
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_has_synchronized.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['m_CAMS']['fields']['has_synchronized']=array(
    'name' => 'has_synchronized',
    'label' => 'LBL_HAS_SYNCHRONIZED',
    'vname' => 'LBL_HAS_SYNCHRONIZED',
    'type' => 'bool',
    'readonly' => true,
);
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_smartsheet_sync_logs.php


$dictionary['m_CAMS']['fields']['smartsheet_sync_logs']=array(
    'name' => 'smartsheet_sync_logs',
    'label' => 'LBL_SMARTSHEET_SYNC_LOGS',
    'vname' => 'LBL_SMARTSHEET_SYNC_LOGS',
    'type' => 'text',
);
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_smartsheet_id.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['m_CAMS']['fields']['smartsheet_id']=array(
    'name' => 'smartsheet_id',
    'label' => 'LBL_SMARTSHEET_ID',
    'vname' => 'LBL_SMARTSHEET_ID',
    'type' => 'varchar',
    'readonly' => true,
);
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/contacts.php


    $dictionary['m_CAMS']['fields']['contacts'] = array(
        'name' => 'contacts',
        'type' => 'link',
        'relationship' => 'contacts_m_cams',
        'module' => 'Contacts',
        'bean_name' => 'Contacts',
        'source' => 'non-db',
        'vname' => 'LBL_CONTACTS',
    );
    $dictionary['m_CAMS']['relationships']['contacts_m_cams'] = array(
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'm_cam_id',
        'relationship_type' => 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/documents.php


    $dictionary['m_CAMS']['fields']['documents'] = array(
        'name' => 'documents',
        'type' => 'link',
        'relationship' => 'documents_m_cams',
        'module' => 'Documents',
        'bean_name' => 'Documents',
        'source' => 'non-db',
        'vname' => 'LBL_DOCUMENTS',
    );

    $dictionary['m_CAMS']['relationships']['documents_m_cams'] = array(
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'm_cam_id',
        'relationship_type' => 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/dp_doucumentspackets_cases.php

// created: 2015-09-18 04:41:52
$dictionary["m_CAMS"]["fields"]["dp_doucumentspackets_m_cams"] = array (
  'name' => 'dp_doucumentspackets_m_cams',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_m_cams',
  'source' => 'non-db',
  'module' => 'DP_DoucumentsPackets',
  'bean_name' => 'DP_DoucumentsPackets',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_M_CAMS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_slot_to_actual_days_c.php

 // created: 2018-02-13 04:04:15
$dictionary['m_CAMS']['fields']['slot_to_actual_days_c']['duplicate_merge_dom_value']=0;
$dictionary['m_CAMS']['fields']['slot_to_actual_days_c']['labelValue']='Slot to Actual Days';
$dictionary['m_CAMS']['fields']['slot_to_actual_days_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['m_CAMS']['fields']['slot_to_actual_days_c']['calculated']='true';
$dictionary['m_CAMS']['fields']['slot_to_actual_days_c']['formula']='abs(daysBetween($projected_start_date,$const_start_date))';
$dictionary['m_CAMS']['fields']['slot_to_actual_days_c']['enforced']='true';
$dictionary['m_CAMS']['fields']['slot_to_actual_days_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/m_cams_opportunities_1_m_CAMS.php

// created: 2017-09-19 14:11:42
$dictionary["m_CAMS"]["fields"]["m_cams_opportunities_1"] = array (
  'name' => 'm_cams_opportunities_1',
  'type' => 'link',
  'relationship' => 'm_cams_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_M_CAMS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'm_cams_opportunities_1opportunities_idb',
);
$dictionary["m_CAMS"]["fields"]["m_cams_opportunities_1_name"] = array (
  'name' => 'm_cams_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_M_CAMS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'm_cams_opportunities_1opportunities_idb',
  'link' => 'm_cams_opportunities_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
  'populate_list' => [
    'source' => 'target',
    'amount' => 'contract_price',
    'sales_stage' => 'sales_stage',
    'date_closed' => 'closing_date',
    'opportunity_type' => 'sale_type',
    'warranty_exp' => 'warranty_exp',
    'pending_date' => 'pending_date',
    'elevation' => 'elevation',  
    'garage_type' => 'garage_type',  
    'floor_plan' => 'floor_plan',  
    'square_ft' => 'square_footage',  
    'precon' => 'precon',
    'account_id' => 'account_id',
    'account_name' => 'account_name'
  ]
);
$dictionary["m_CAMS"]["fields"]["m_cams_opportunities_1opportunities_idb"] = array (
  'name' => 'm_cams_opportunities_1opportunities_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_M_CAMS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'm_cams_opportunities_1opportunities_idb',
  'link' => 'm_cams_opportunities_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/Account_CAM.php


$dictionary['m_CAMS']['fields']['account_name'] = array(
    'source' => 'non-db',
    'name' => 'account_name',
    'vname' => 'LBL_ACCOUNT_NAME',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 255,
    'size' => '20',
    'id_name' => 'account_id',
    'module' => 'Accounts',
    'table' => 'accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'readonly' => true,
);

$dictionary['m_CAMS']['fields']['account_id'] = array(
    'name' => 'account_id',
    'vname' => 'LBL_ACCOUNT_NAME_ACCOUNT_ID',
    'type' => 'id',
    'dbType' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
);

$dictionary['m_CAMS']['fields']['accounts'] = array(
    'name' => 'accounts',
    'vname' => 'LBL_Account',
    'source' => 'non-db',
    'type' => 'link',
    'bean_name' => 'Account',
    'relationship' => 'account_cams_relation',
    'module' => 'Accounts',
);
$dictionary['m_CAMS']['relationships']['account_cams_relation'] = array(
    'name' => 'account_cams_relation',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/pre_construction.php


$dictionary['m_CAMS']['fields']['precon'] = array(
    'name' => 'precon',
    'vname' => 'LBL_PRECON',
    'type' => 'datetime',
    'options' => 'date_range_search_dom',
    'full_text_search' =>
    array(
        'enabled' => true,
        'searchable' => false,
    ),
    'enable_range_search' => true,
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'merge_filter' => 'disabled',
    'importable' => true,
    'required' => false,
    'comments' => '',
    'massupdate' => true,
    'audited' => true,
    'reportable' => true,
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_job_number.php

$dictionary['m_CAMS']['fields']['job_number']['required']=true;
$dictionary['m_CAMS']['fields']['job_number']['audited']=true;

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_const_start_date.php

$dictionary['m_CAMS']['fields']['const_start_date']['audited']=true;

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_smartsheet_row_id.php


$dictionary['m_CAMS']['fields']['smartsheet_row_id']=array(
    'name' => 'smartsheet_row_id',
    'label' => 'LBL_SMARTSHEET_ROW_ID',
    'vname' => 'LBL_SMARTSHEET_ROW_ID',
    'type' => 'varchar',
    'readonly' => false,
    'audited' => true,
);


?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_const_finish_date.php

 // created: 2017-12-13 20:41:36
$dictionary['m_CAMS']['fields']['const_finish_date']['audited']=true;
 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/signed_copies.php

 // created: 2018-03-10 05:09:53

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_total_build_days.php

 // created: 2018-04-06 05:12:23
$dictionary['m_CAMS']['fields']['total_build_days']['importable']='false';
$dictionary['m_CAMS']['fields']['total_build_days']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['total_build_days']['duplicate_merge_dom_value']=0;
$dictionary['m_CAMS']['fields']['total_build_days']['calculated']='1';
$dictionary['m_CAMS']['fields']['total_build_days']['formula']='abs(daysBetween($const_finish_date,$const_start_date))';
$dictionary['m_CAMS']['fields']['total_build_days']['enforced']=true;
$dictionary['m_CAMS']['fields']['total_build_days']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['m_CAMS']['fields']['total_build_days']['min']=false;
$dictionary['m_CAMS']['fields']['total_build_days']['max']=false;
$dictionary['m_CAMS']['fields']['total_build_days']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_spec_dom.php

 // created: 2018-04-25 13:21:27
$dictionary['m_CAMS']['fields']['spec_dom']['importable']='false';
$dictionary['m_CAMS']['fields']['spec_dom']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['spec_dom']['duplicate_merge_dom_value']=0;
$dictionary['m_CAMS']['fields']['spec_dom']['calculated']='1';
$dictionary['m_CAMS']['fields']['spec_dom']['formula']='ifElse(greaterThan(strlen($sales_stage),0),
	abs(subtract(ifElse(equal(toString($const_finish_date),""),0,daysUntil($const_finish_date)),
		ifElse(equal(toString($pending_date),""),0,daysUntil($pending_date)))),
	abs(subtract(ifElse(equal(toString($const_finish_date),""),0,daysUntil($const_finish_date)),daysUntil(today())))
)';
$dictionary['m_CAMS']['fields']['spec_dom']['enforced']=true;
$dictionary['m_CAMS']['fields']['spec_dom']['precision']=0;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_loan_submission_date_c.php

 // created: 2018-05-09 04:10:15
$dictionary['m_CAMS']['fields']['loan_submission_date_c']['options']='date_range_search_dom';
$dictionary['m_CAMS']['fields']['loan_submission_date_c']['labelValue']='Loan Submission Date';
$dictionary['m_CAMS']['fields']['loan_submission_date_c']['enforced']='';
$dictionary['m_CAMS']['fields']['loan_submission_date_c']['dependency']='';
$dictionary['m_CAMS']['fields']['loan_submission_date_c']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_superintendent.php

 // created: 2018-05-09 05:09:47
$dictionary['m_CAMS']['fields']['superintendent']['default']='James Cavan';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_construction_stage.php

 // created: 2018-05-15 14:49:17
$dictionary['m_CAMS']['fields']['construction_stage']['audited']=true;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/rt_docusign_fields.php


$dictionary['m_CAMS']['fields']['contact_id_c'] =
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

    $dictionary['m_CAMS']['fields']['attachedcontacts_c'] = 
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


$dictionary['m_CAMS']['fields']['attacheddocuments_c'] = 
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

     $dictionary['m_CAMS']['fields']['document_id_c'] = 
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
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/mvh_colorselection_m_cams_m_CAMS.php

// created: 2018-06-11 08:59:55
$dictionary["m_CAMS"]["fields"]["mvh_colorselection_m_cams"] = array (
  'name' => 'mvh_colorselection_m_cams',
  'type' => 'link',
  'relationship' => 'mvh_colorselection_m_cams',
  'source' => 'non-db',
  'module' => 'mvh_Colorselection',
  'bean_name' => 'mvh_Colorselection',
  'side' => 'right',
  'vname' => 'LBL_MVH_COLORSELECTION_M_CAMS_FROM_M_CAMS_TITLE',
  'id_name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'link-type' => 'one',
);
$dictionary["m_CAMS"]["fields"]["mvh_colorselection_m_cams_name"] = array (
  'name' => 'mvh_colorselection_m_cams_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_M_CAMS_FROM_MVH_COLORSELECTION_TITLE',
  'save' => true,
  'id_name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'link' => 'mvh_colorselection_m_cams',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'name',
);
$dictionary["m_CAMS"]["fields"]["mvh_colorselection_m_camsmvh_colorselection_ida"] = array (
  'name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_M_CAMS_FROM_M_CAMS_TITLE_ID',
  'id_name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'link' => 'mvh_colorselection_m_cams',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_price_per_foot.php

 // created: 2018-06-19 12:52:39
$dictionary['m_CAMS']['fields']['price_per_foot']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['m_CAMS']['fields']['price_per_foot']['calculated']='1';
$dictionary['m_CAMS']['fields']['price_per_foot']['formula']='ifElse(equal($sales_stage,"Pending"),
divide($contract_price,$square_footage),
ifElse(equal($sales_stage,"Closed Won"),
divide($contract_price,$square_footage),
divide($list_price_c,$square_footage)
)
)';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_construction_note.php

 // created: 2018-07-06 22:19:00
$dictionary['m_CAMS']['fields']['construction_note']['audited']=true;

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_projection_comments_c.php

 // created: 2018-07-06 22:19:39
$dictionary['m_CAMS']['fields']['projection_comments_c']['labelValue']='Projection Comments';
$dictionary['m_CAMS']['fields']['projection_comments_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['m_CAMS']['fields']['projection_comments_c']['enforced']='';
$dictionary['m_CAMS']['fields']['projection_comments_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_estimate_errors.php

 // created: 2018-07-08 20:12:36
$dictionary['m_CAMS']['fields']['estimate_errors']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['estimate_errors']['duplicate_merge_dom_value']='0';

 
?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_projected_close_date.php

 // created: 2018-05-21 06:04:30
$dictionary['m_CAMS']['fields']['projected_close_date']['massupdate']=false;
$dictionary['m_CAMS']['fields']['projected_close_date']['importable']='false';
$dictionary['m_CAMS']['fields']['projected_close_date']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['projected_close_date']['duplicate_merge_dom_value']='0';
$dictionary['m_CAMS']['fields']['projected_close_date']['calculated']='1';
$dictionary['m_CAMS']['fields']['projected_close_date']['formula']='projectDate(equal($sale_type,"Spec"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,60)),ifElse(equal($sale_type,"Pre-Sale"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,14)),ifElse(equal($sale_type,"Spec-Sale"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,14)),ifElse(equal($sale_type,"Multifamily Hold"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,14)),$const_finish_date))))';
$dictionary['m_CAMS']['fields']['projected_close_date']['enforced']=true;
$dictionary['m_CAMS']['fields']['projected_close_date']['type']='date';
$dictionary['m_CAMS']['fields']['projected_close_date']['audited']=true;

?>
<?php
// Merged from custom/Extension/modules/m_CAMS/Ext/Vardefs/sugarfield_floor_plan.php

 // created: 2018-07-20 15:59:13
$dictionary['m_CAMS']['fields']['floor_plan']['default']='';
$dictionary['m_CAMS']['fields']['floor_plan']['required']=false;

 
?>
