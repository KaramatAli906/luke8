<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/dri-customer-journey.php


/**
 * Please note that this file has been generated based a file located on this path:
 * custom/modules/Calls/vardefs/addoptify-customer-journey.yml
 * and may be overwritten at a later point..
 */

$dictionary['Call']['fields']['dri_workflow_sort_order'] = array (
  'name' => 'dri_workflow_sort_order',
  'vname' => 'LBL_DRI_WORKFLOW_SORT_ORDER',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'varchar',
  'len' => 255,
  'default' => 1,
  'dependency' => 'not(equal($dri_subworkflow_id, ""))',
);

$dictionary['Call']['fields']['customer_journey_score'] = array (
  'name' => 'customer_journey_score',
  'vname' => 'LBL_CUSTOMER_JOURNEY_SCORE',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'int',
  'len' => 8,
  'options' => 'numeric_range_search_dom',
  'enable_range_search' => true,
  'readonly' => true,
);

$dictionary['Call']['fields']['customer_journey_progress'] = array (
  'name' => 'customer_journey_progress',
  'vname' => 'LBL_CUSTOMER_JOURNEY_PROGRESS',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'float',
  'options' => 'numeric_range_search_dom',
  'enable_range_search' => true,
  'default' => 0,
  'readonly' => true,
  'validation' => 
  array (
    'type' => 'range',
    'min' => 0,
    'max' => 100,
  ),
);

$dictionary['Call']['fields']['customer_journey_points'] = array (
  'name' => 'customer_journey_points',
  'vname' => 'LBL_CUSTOMER_JOURNEY_POINTS',
  'required' => true,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'options' => 'dri_workflow_task_templates_points_list',
  'type' => 'enum',
  'dependency' => 'not(equal($dri_subworkflow_id, ""))',
  'default' => 10,
  'dbType' => 'int',
  'len' => 3,
);

$dictionary['Call']['fields']['customer_journey_parent_activity_type'] = array (
  'name' => 'customer_journey_parent_activity_type',
  'vname' => 'LBL_CUSTOMER_JOURNEY_PARENT_ACTIVITY_TYPE',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'options' => 'dri_customer_journey_parent_activity_type_list',
  'type' => 'enum',
);

$dictionary['Call']['fields']['customer_journey_blocked_by'] = array (
  'name' => 'customer_journey_blocked_by',
  'vname' => 'LBL_CUSTOMER_JOURNEY_BLOCKED_BY',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'json',
  'dbType' => 'text',
  'isMultiSelect' => true,
);

$dictionary['Call']['fields']['customer_journey_parent_activity_id'] = array (
  'name' => 'customer_journey_parent_activity_id',
  'vname' => 'LBL_CUSTOMER_JOURNEY_PARENT_ACTIVITY_ID',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Call']['fields']['is_customer_journey_parent_activity'] = array (
  'name' => 'is_customer_journey_parent_activity',
  'vname' => 'LBL_IS_CUSTOMER_JOURNEY_PARENT_ACTIVITY',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'bool',
  'default' => false,
);

$dictionary['Call']['fields']['is_customer_journey_activity'] = array (
  'name' => 'is_customer_journey_activity',
  'vname' => 'LBL_IS_CUSTOMER_JOURNEY_ACTIVITY',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'bool',
  'default' => false,
  'enforced' => true,
  'calculated' => true,
  'formula' => 'not(equal($dri_subworkflow_id, ""))',
);

$dictionary['Call']['fields']['dri_subworkflow_link'] = array (
  'name' => 'dri_subworkflow_link',
  'vname' => 'LBL_DRI_SUBWORKFLOW',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_SubWorkflow',
  'relationship' => 'call_dri_subworkflows',
  'module' => 'DRI_SubWorkflows',
);

$dictionary['Call']['fields']['current_customer_journey_activity_at'] = array (
  'name' => 'current_customer_journey_activity_at',
  'vname' => 'LBL_CURRENT_CUSTOMER_JOURNEY_ACTIVITY_AT',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'left',
  'bean_name' => 'DRI_Workflow',
  'relationship' => 'calls_flex_relate_dri_workflows',
  'module' => 'DRI_Workflows',
);

$dictionary['Call']['fields']['dri_workflow_task_template_id'] = array (
  'name' => 'dri_workflow_task_template_id',
  'vname' => 'LBL_DRI_WORKFLOW_TASK_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Call']['fields']['dri_workflow_task_template_name'] = array (
  'name' => 'dri_workflow_task_template_name',
  'vname' => 'LBL_DRI_WORKFLOW_TASK_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'source' => 'non-db',
  'type' => 'relate',
  'rname' => 'name',
  'table' => 'dri_workflow_task_templates',
  'id_name' => 'dri_workflow_task_template_id',
  'sort_on' => 'name',
  'module' => 'DRI_Workflow_Task_Templates',
  'link' => 'dri_workflow_task_template_link',
);

$dictionary['Call']['fields']['dri_workflow_task_template_link'] = array (
  'name' => 'dri_workflow_task_template_link',
  'vname' => 'LBL_DRI_WORKFLOW_TASK_TEMPLATE',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_Workflow_Task_Template',
  'relationship' => 'call_dri_workflow_task_templates',
  'module' => 'DRI_Workflow_Task_Templates',
);

$dictionary['Call']['fields']['dri_subworkflow_id'] = array (
  'name' => 'dri_subworkflow_id',
  'vname' => 'LBL_DRI_SUBWORKFLOW',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Call']['fields']['dri_subworkflow_name'] = array (
  'name' => 'dri_subworkflow_name',
  'vname' => 'LBL_DRI_SUBWORKFLOW',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'source' => 'non-db',
  'type' => 'relate',
  'rname' => 'name',
  'table' => 'dri_subworkflows',
  'id_name' => 'dri_subworkflow_id',
  'sort_on' => 'name',
  'module' => 'DRI_SubWorkflows',
  'link' => 'dri_subworkflow_link',
);

$dictionary['Call']['fields']['dri_subworkflow_template_id'] = array (
  'name' => 'dri_subworkflow_template_id',
  'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Call']['fields']['dri_subworkflow_template_name'] = array (
  'name' => 'dri_subworkflow_template_name',
  'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'source' => 'non-db',
  'type' => 'relate',
  'rname' => 'name',
  'table' => 'dri_subworkflow_templates',
  'id_name' => 'dri_subworkflow_template_id',
  'sort_on' => 'name',
  'module' => 'DRI_SubWorkflow_Templates',
  'link' => 'dri_subworkflow_template_link',
);

$dictionary['Call']['fields']['dri_subworkflow_template_link'] = array (
  'name' => 'dri_subworkflow_template_link',
  'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_SubWorkflow_Template',
  'relationship' => 'call_dri_subworkflow_templates',
  'module' => 'DRI_SubWorkflow_Templates',
);

$dictionary['Call']['fields']['dri_workflow_template_id'] = array (
  'name' => 'dri_workflow_template_id',
  'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Call']['fields']['dri_workflow_template_name'] = array (
  'name' => 'dri_workflow_template_name',
  'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'source' => 'non-db',
  'type' => 'relate',
  'rname' => 'name',
  'table' => 'dri_workflow_templates',
  'id_name' => 'dri_workflow_template_id',
  'sort_on' => 'name',
  'module' => 'DRI_Workflow_Templates',
  'link' => 'dri_workflow_template_link',
);

$dictionary['Call']['fields']['dri_workflow_template_link'] = array (
  'name' => 'dri_workflow_template_link',
  'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_Workflow_Template',
  'relationship' => 'call_dri_workflow_templates',
  'module' => 'DRI_Workflow_Templates',
);

$dictionary['Call']['relationships']['calls_flex_relate_dri_workflows'] = array (
  'lhs_key' => 'id',
  'relationship_type' => 'one-to-many',
  'lhs_module' => 'Calls',
  'lhs_table' => 'calls',
  'rhs_key' => 'parent_id',
  'rhs_module' => 'DRI_Workflows',
  'rhs_table' => 'dri_workflows',
  'relationship_role_column_value' => 'Calls',
  'relationship_role_column' => 'parent_type',
);

$dictionary['Call']['relationships']['call_dri_workflow_task_templates'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_Workflow_Task_Templates',
  'lhs_table' => 'dri_workflow_task_templates',
  'rhs_module' => 'Calls',
  'rhs_table' => 'calls',
  'rhs_key' => 'dri_workflow_task_template_id',
);

$dictionary['Call']['relationships']['call_dri_subworkflows'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_SubWorkflows',
  'lhs_table' => 'dri_subworkflows',
  'rhs_module' => 'Calls',
  'rhs_table' => 'calls',
  'rhs_key' => 'dri_subworkflow_id',
);

$dictionary['Call']['relationships']['call_dri_subworkflow_templates'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_SubWorkflow_Templates',
  'lhs_table' => 'dri_subworkflow_templates',
  'rhs_module' => 'Calls',
  'rhs_table' => 'calls',
  'rhs_key' => 'dri_subworkflow_template_id',
);

$dictionary['Call']['relationships']['call_dri_workflow_templates'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_Workflow_Templates',
  'lhs_table' => 'dri_workflow_templates',
  'rhs_module' => 'Calls',
  'rhs_table' => 'calls',
  'rhs_key' => 'dri_workflow_template_id',
);

$dictionary['Call']['indices']['idx_dri_workflow_task_template_id'] = array (
  'name' => 'idx_dri_workflow_task_template_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_workflow_task_template_id',
  ),
);

$dictionary['Call']['indices']['idx_dri_subworkflow_id'] = array (
  'name' => 'idx_dri_subworkflow_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_subworkflow_id',
  ),
);

$dictionary['Call']['indices']['idx_dri_subworkflow_template_id'] = array (
  'name' => 'idx_dri_subworkflow_template_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_subworkflow_template_id',
  ),
);

$dictionary['Call']['indices']['idx_dri_workflow_template_id'] = array (
  'name' => 'idx_dri_workflow_template_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_workflow_template_id',
  ),
);

?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/attachments.php


$parentObject = "Call";
$parentModule = "Calls";
$parentTable = "calls";

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
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/m_cams_activities_1_calls_Calls.php

// created: 2018-02-06 21:26:54
$dictionary["Call"]["fields"]["m_cams_activities_1_calls"] = array (
  'name' => 'm_cams_activities_1_calls',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_calls',
  'source' => 'non-db',
  'module' => 'm_CAMS',
  'bean_name' => 'm_CAMS',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_CALLS_FROM_M_CAMS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_allday.php

//all day event
$dictionary["Call"]["fields"]['allday'] = array(
    'name' => 'allday',
    'vname' => 'LBL_IS_ALLDAY',
    'type' => 'bool',
    'default' => 0,
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);

?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_gevent_id.php

$dictionary["Call"]["fields"]['gevent_id'] = array(
    'name' => 'gevent_id',
    'rname' => 'name',
    'vname' => 'LBL_GEVENT_ID',
    'type' => 'varchar',
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);

?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_invitee_email_addresses.php

//added to handle invitees
$dictionary["Call"]["fields"]['invitee_email_addresses'] = array(
    'name' => 'invitee_email_addresses',
    'rname' => 'name',
    'vname' => 'LBL_INVITEE_EMAIL_ADDRESSES',
    'type' => 'text',
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);

?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_is_gevent.php

//added for cleanup process
$dictionary["Call"]["fields"]['is_gevent'] = array(
    'name' => 'is_gevent',
    'vname' => 'LBL_IS_GEVENT',
    'type' => 'bool',
    'default' => '0',
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);

?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_calendar_type.php
	
//all day event
$dictionary["Call"]["fields"]['calendar_type'] = array (
	'name'=>'calendar_type',
	'vname' => 'LBL_CALENDAR_TYPE',
	'function' => 'getCalendarTypes',
	'type' => 'enum',
	'default' => 'primary',
	'reportable'=>false,
	'massupdate' => false,
	'importable' => 'false',
	'studio' => array(
		'listview' => true,
	    'detailview' => true,
	    'editview' => true),
);

?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_gcid_changed_c.php

 // created: 2018-06-27 06:42:57

 
?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_calendar_id_c.php

 // created: 2018-07-02 11:52:02
$dictionary['Call']['fields']['calendar_id_c']['labelValue']='Calendar Id';
$dictionary['Call']['fields']['calendar_id_c']['dependency']='';
$dictionary['Call']['fields']['calendar_id_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Calls/Ext/Vardefs/sugarfield_calendar_type_dep.php


$dictionary["Call"]["fields"]['calendar_type']['dependency'] ='not(isCurrentUser($assigned_user_id))';
?>
