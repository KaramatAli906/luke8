<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'm_cams_opportunities_1' => 
  array (
    'name' => 'm_cams_opportunities_1',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'm_cams_opportunities_1' => 
      array (
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'm_cams_opportunities_1_c',
        'join_key_lhs' => 'm_cams_opportunities_1m_cams_ida',
        'join_key_rhs' => 'm_cams_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'm_cams_opportunities_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'm_cams_opportunities_1m_cams_ida' => 
      array (
        'name' => 'm_cams_opportunities_1m_cams_ida',
        'type' => 'id',
      ),
      'm_cams_opportunities_1opportunities_idb' => 
      array (
        'name' => 'm_cams_opportunities_1opportunities_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_m_cams_opportunities_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_m_cams_opportunities_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'm_cams_opportunities_1m_cams_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_m_cams_opportunities_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'm_cams_opportunities_1opportunities_idb',
          1 => 'deleted',
        ),
      ),
    ),
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-one',
    'join_table' => 'm_cams_opportunities_1_c',
    'join_key_lhs' => 'm_cams_opportunities_1m_cams_ida',
    'join_key_rhs' => 'm_cams_opportunities_1opportunities_idb',
    'readonly' => true,
    'relationship_name' => 'm_cams_opportunities_1',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'm_cams_activities_1_meetings' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'CAMS',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm_CAMS',
    'rhs_module' => 'Meetings',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm_cams_activities_1_meetings',
  ),
  'm_cams_activities_1_calls' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'CAMS',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm_CAMS',
    'rhs_module' => 'Calls',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm_cams_activities_1_calls',
  ),
  'm_cams_activities_1_notes' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'CAMS',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm_CAMS',
    'rhs_module' => 'Notes',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm_cams_activities_1_notes',
  ),
  'm_cams_activities_1_tasks' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'CAMS',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm_CAMS',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm_cams_activities_1_tasks',
  ),
  'm_cams_modified_user' => 
  array (
    'name' => 'm_cams_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'm_cams_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_created_by' => 
  array (
    'name' => 'm_cams_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'm_cams_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_activities' => 
  array (
    'name' => 'm_cams_activities',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'm_CAMS',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'm_cams_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_following' => 
  array (
    'name' => 'm_cams_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'm_CAMS',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'm_cams_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_favorite' => 
  array (
    'name' => 'm_cams_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'm_CAMS',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'm_cams_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_assigned_user' => 
  array (
    'name' => 'm_cams_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'm_cams_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_dri_workflow_templates' => 
  array (
    'name' => 'm_cams_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'dri_workflow_template_id',
    'readonly' => true,
    'relationship_name' => 'm_cams_dri_workflow_templates',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_mv_attachments' => 
  array (
    'name' => 'm_cams_mv_attachments',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'm_CAMS',
    'readonly' => true,
    'relationship_name' => 'm_cams_mv_attachments',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'dri_workflow_m_cams' => 
  array (
    'name' => 'dri_workflow_m_cams',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'm_cams_id',
    'readonly' => true,
    'relationship_name' => 'dri_workflow_m_cams',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'm_cams_activities_1_emails' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'CAMS',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm_CAMS',
    'rhs_module' => 'Emails',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm_cams_activities_1_emails',
  ),
);