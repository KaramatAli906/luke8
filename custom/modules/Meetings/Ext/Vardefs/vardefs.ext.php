<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_reminder_time.php

 // created: 2017-08-28 15:11:50
$dictionary['Meeting']['fields']['reminder_time']['default']='60';
$dictionary['Meeting']['fields']['reminder_time']['audited']=false;
$dictionary['Meeting']['fields']['reminder_time']['comments']='Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start';
$dictionary['Meeting']['fields']['reminder_time']['duplicate_merge']='enabled';
$dictionary['Meeting']['fields']['reminder_time']['duplicate_merge_dom_value']='1';
$dictionary['Meeting']['fields']['reminder_time']['merge_filter']='disabled';
$dictionary['Meeting']['fields']['reminder_time']['calculated']=false;
$dictionary['Meeting']['fields']['reminder_time']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/dri-customer-journey.php


/**
 * Please note that this file has been generated based a file located on this path:
 * custom/modules/Meetings/vardefs/addoptify-customer-journey.yml
 * and may be overwritten at a later point..
 */

$dictionary['Meeting']['fields']['dri_workflow_sort_order'] = array (
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

$dictionary['Meeting']['fields']['customer_journey_score'] = array (
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

$dictionary['Meeting']['fields']['customer_journey_progress'] = array (
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

$dictionary['Meeting']['fields']['customer_journey_points'] = array (
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

$dictionary['Meeting']['fields']['customer_journey_parent_activity_type'] = array (
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

$dictionary['Meeting']['fields']['customer_journey_blocked_by'] = array (
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

$dictionary['Meeting']['fields']['customer_journey_parent_activity_id'] = array (
  'name' => 'customer_journey_parent_activity_id',
  'vname' => 'LBL_CUSTOMER_JOURNEY_PARENT_ACTIVITY_ID',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Meeting']['fields']['is_customer_journey_parent_activity'] = array (
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

$dictionary['Meeting']['fields']['is_customer_journey_activity'] = array (
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

$dictionary['Meeting']['fields']['dri_subworkflow_link'] = array (
  'name' => 'dri_subworkflow_link',
  'vname' => 'LBL_DRI_SUBWORKFLOW',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_SubWorkflow',
  'relationship' => 'meeting_dri_subworkflows',
  'module' => 'DRI_SubWorkflows',
);

$dictionary['Meeting']['fields']['current_customer_journey_activity_at'] = array (
  'name' => 'current_customer_journey_activity_at',
  'vname' => 'LBL_CURRENT_CUSTOMER_JOURNEY_ACTIVITY_AT',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'left',
  'bean_name' => 'DRI_Workflow',
  'relationship' => 'meetings_flex_relate_dri_workflows',
  'module' => 'DRI_Workflows',
);

$dictionary['Meeting']['fields']['dri_workflow_task_template_id'] = array (
  'name' => 'dri_workflow_task_template_id',
  'vname' => 'LBL_DRI_WORKFLOW_TASK_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Meeting']['fields']['dri_workflow_task_template_name'] = array (
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

$dictionary['Meeting']['fields']['dri_workflow_task_template_link'] = array (
  'name' => 'dri_workflow_task_template_link',
  'vname' => 'LBL_DRI_WORKFLOW_TASK_TEMPLATE',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_Workflow_Task_Template',
  'relationship' => 'meeting_dri_workflow_task_templates',
  'module' => 'DRI_Workflow_Task_Templates',
);

$dictionary['Meeting']['fields']['dri_subworkflow_id'] = array (
  'name' => 'dri_subworkflow_id',
  'vname' => 'LBL_DRI_SUBWORKFLOW',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Meeting']['fields']['dri_subworkflow_name'] = array (
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

$dictionary['Meeting']['fields']['dri_subworkflow_template_id'] = array (
  'name' => 'dri_subworkflow_template_id',
  'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Meeting']['fields']['dri_subworkflow_template_name'] = array (
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

$dictionary['Meeting']['fields']['dri_subworkflow_template_link'] = array (
  'name' => 'dri_subworkflow_template_link',
  'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_SubWorkflow_Template',
  'relationship' => 'meeting_dri_subworkflow_templates',
  'module' => 'DRI_SubWorkflow_Templates',
);

$dictionary['Meeting']['fields']['dri_workflow_template_id'] = array (
  'name' => 'dri_workflow_template_id',
  'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
  'required' => false,
  'reportable' => false,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'id',
);

$dictionary['Meeting']['fields']['dri_workflow_template_name'] = array (
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

$dictionary['Meeting']['fields']['dri_workflow_template_link'] = array (
  'name' => 'dri_workflow_template_link',
  'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
  'source' => 'non-db',
  'type' => 'link',
  'side' => 'right',
  'bean_name' => 'DRI_Workflow_Template',
  'relationship' => 'meeting_dri_workflow_templates',
  'module' => 'DRI_Workflow_Templates',
);

$dictionary['Meeting']['relationships']['meetings_flex_relate_dri_workflows'] = array (
  'lhs_key' => 'id',
  'relationship_type' => 'one-to-many',
  'lhs_module' => 'Meetings',
  'lhs_table' => 'meetings',
  'rhs_key' => 'parent_id',
  'rhs_module' => 'DRI_Workflows',
  'rhs_table' => 'dri_workflows',
  'relationship_role_column_value' => 'Meetings',
  'relationship_role_column' => 'parent_type',
);

$dictionary['Meeting']['relationships']['meeting_dri_workflow_task_templates'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_Workflow_Task_Templates',
  'lhs_table' => 'dri_workflow_task_templates',
  'rhs_module' => 'Meetings',
  'rhs_table' => 'meetings',
  'rhs_key' => 'dri_workflow_task_template_id',
);

$dictionary['Meeting']['relationships']['meeting_dri_subworkflows'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_SubWorkflows',
  'lhs_table' => 'dri_subworkflows',
  'rhs_module' => 'Meetings',
  'rhs_table' => 'meetings',
  'rhs_key' => 'dri_subworkflow_id',
);

$dictionary['Meeting']['relationships']['meeting_dri_subworkflow_templates'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_SubWorkflow_Templates',
  'lhs_table' => 'dri_subworkflow_templates',
  'rhs_module' => 'Meetings',
  'rhs_table' => 'meetings',
  'rhs_key' => 'dri_subworkflow_template_id',
);

$dictionary['Meeting']['relationships']['meeting_dri_workflow_templates'] = array (
  'relationship_type' => 'one-to-many',
  'lhs_key' => 'id',
  'lhs_module' => 'DRI_Workflow_Templates',
  'lhs_table' => 'dri_workflow_templates',
  'rhs_module' => 'Meetings',
  'rhs_table' => 'meetings',
  'rhs_key' => 'dri_workflow_template_id',
);

$dictionary['Meeting']['indices']['idx_dri_workflow_task_template_id'] = array (
  'name' => 'idx_dri_workflow_task_template_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_workflow_task_template_id',
  ),
);

$dictionary['Meeting']['indices']['idx_dri_subworkflow_id'] = array (
  'name' => 'idx_dri_subworkflow_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_subworkflow_id',
  ),
);

$dictionary['Meeting']['indices']['idx_dri_subworkflow_template_id'] = array (
  'name' => 'idx_dri_subworkflow_template_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_subworkflow_template_id',
  ),
);

$dictionary['Meeting']['indices']['idx_dri_workflow_template_id'] = array (
  'name' => 'idx_dri_workflow_template_id',
  'type' => 'index',
  'fields' => 
  array (
    0 => 'dri_workflow_template_id',
  ),
);

?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/attachments.php


$parentObject = "Meeting";
$parentModule = "Meetings";
$parentTable = "meetings";

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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/m_cams_activities_1_meetings_Meetings.php

// created: 2018-02-06 21:26:20
$dictionary["Meeting"]["fields"]["m_cams_activities_1_meetings"] = array (
  'name' => 'm_cams_activities_1_meetings',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_meetings',
  'source' => 'non-db',
  'module' => 'm_CAMS',
  'bean_name' => 'm_CAMS',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_MEETINGS_FROM_M_CAMS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_allday.php

//all day event
$dictionary["Meeting"]["fields"]['allday'] = array(
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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_gevent_id.php

$dictionary["Meeting"]["fields"]['gevent_id'] = array(
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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_invitee_email_addresses.php

//added to handle invitees
$dictionary["Meeting"]["fields"]['invitee_email_addresses'] = array(
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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_is_gevent.php

//added for cleanup process
$dictionary["Meeting"]["fields"]['is_gevent'] = array(
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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_calendar_type.php
	
//all day event
$dictionary["Meeting"]["fields"]['calendar_type'] = array (
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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_gcid_changed_c.php

 // created: 2018-06-27 06:42:57

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_calendar_id_c.php

 // created: 2018-07-02 11:52:02
$dictionary['Meeting']['fields']['calendar_id_c']['labelValue']='Calendar Id';
$dictionary['Meeting']['fields']['calendar_id_c']['dependency']='';
$dictionary['Meeting']['fields']['calendar_id_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_ext_gevent_id.php

$dictionary["Meeting"]["fields"]['ext_event_id'] = array(
    'name' => 'ext_event_id',
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
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_calendar_type_dep.php


$dictionary["Meeting"]["fields"]['calendar_type']['dependency'] ='not(isCurrentUser($assigned_user_id))';
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_ext_sync_time.php


$dictionary["Meeting"]["fields"]['ext_sync_time'] = array(
    'name' => 'ext_sync_time',
    'vname' => 'LBL_EXT_SYNC_TIME',
    'type' => 'datetime',
    'readonly' => true,
);
?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_ext_synced_from_ext.php


$dictionary["Meeting"]["fields"]['ext_synced_from_ext'] = array(
    'name' => 'ext_synced_from_ext',
    'vname' => 'LBL_SYNCED_FROM_EXT',
    'type' => 'bool',
    'readonly' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/sugarfield_not_added_invitee.php

//added to handle invitees
$dictionary["Meeting"]["fields"]['not_added_invitee'] = array(
    'name' => 'not_added_invitee',
    'vname' => 'LBL_NOT_ADDED_INVITEE',
    'type' => 'text',
    'studio' => true,
    'readonly' => false,
);

?>
<?php
// Merged from custom/Extension/modules/Meetings/Ext/Vardefs/send_invites_fields.php


// Field for save and send invites button to check if request from save_send_invites button
$dictionary['Meeting']['fields']['send_invites_jobqueue'] = array(
      'name' => 'send_invites_jobqueue',
      'vname' => 'LBL_SEND_INVITES_JOBQUEUE',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not to send out invites via job queue or not',
      'massupdate' => false,
      'exportable' => false,
);

// Field in Admin Section to set the email template for Invites in Config file.
$dictionary['Meeting']['fields']['email_template_id_for_invites'] = array(
      'name' => 'email_template_id_for_invites',
      'vname' => 'LBL_EMAIL_TEMPLATE_ID_FOR_INVITES',
      'type' => 'email-template-for-invites-enum',
      'source' => 'non-db',
      'massupdate' => false,
      'exportable' => false,
      'required' => true
);

?>
