<?php 
 $GLOBALS["dictionary"]["DRI_Workflow_Task_Template"]=array (
  'table' => 'dri_workflow_task_templates',
  'audited' => false,
  'unified_search' => true,
  'duplicate_merge' => true,
  'comment' => 'DRI_Workflow_Task_Template',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Unique identifier',
      'mandatory_fetch' => true,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 50,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.55,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'duplicate_on_record_copy' => 'always',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'massupdate' => false,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'sortable' => true,
      ),
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'options' => 'date_range_search_dom',
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'massupdate' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'type' => 'id',
        'aggregations' => 
        array (
          'modified_user_id' => 
          array (
            'type' => 'MyItems',
            'label' => 'LBL_AGG_MODIFIED_BY_ME',
          ),
        ),
      ),
      'processes' => 
      array (
        'types' => 
        array (
          'RR' => false,
          'ALL' => true,
        ),
      ),
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'full_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'type' => 'id',
        'aggregations' => 
        array (
          'created_by' => 
          array (
            'type' => 'MyItems',
            'label' => 'LBL_AGG_CREATED_BY_ME',
          ),
        ),
      ),
      'processes' => 
      array (
        'types' => 
        array (
          'RR' => false,
          'ALL' => true,
        ),
      ),
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'full_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => false,
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'full_text_search' => 
      array (
        'enabled' => false,
      ),
      'rows' => 6,
      'cols' => 80,
      'duplicate_on_record_copy' => 'always',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_templates_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'side' => 'right',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_templates_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'side' => 'right',
    ),
    'activities' => 
    array (
      'name' => 'activities',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_template_activities',
      'vname' => 'LBL_ACTIVITY_STREAM',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'following' => 
    array (
      'massupdate' => false,
      'name' => 'following',
      'vname' => 'LBL_FOLLOWING',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Is user following this record',
      'studio' => 'false',
      'link' => 'following_link',
      'rname' => 'id',
      'rname_exists' => true,
    ),
    'following_link' => 
    array (
      'name' => 'following_link',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_templates_following',
      'source' => 'non-db',
      'vname' => 'LBL_FOLLOWING',
      'reportable' => false,
    ),
    'my_favorite' => 
    array (
      'massupdate' => false,
      'name' => 'my_favorite',
      'vname' => 'LBL_FAVORITE',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Favorite for the user',
      'studio' => 
      array (
        'list' => false,
        'recordview' => false,
        'basic_search' => false,
        'advanced_search' => false,
      ),
      'link' => 'favorite_link',
      'rname' => 'id',
      'rname_exists' => true,
    ),
    'favorite_link' => 
    array (
      'name' => 'favorite_link',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_templates_favorite',
      'source' => 'non-db',
      'vname' => 'LBL_FAVORITE',
      'reportable' => false,
      'workflow' => false,
      'full_text_search' => 
      array (
        'type' => 'favorites',
        'enabled' => true,
        'searchable' => false,
        'aggregations' => 
        array (
          'favorite_link' => 
          array (
            'type' => 'MyItems',
            'options' => 
            array (
              'field' => 'user_favorites',
            ),
          ),
        ),
      ),
    ),
    'tag' => 
    array (
      'name' => 'tag',
      'vname' => 'LBL_TAGS',
      'type' => 'tag',
      'link' => 'tag_link',
      'source' => 'non-db',
      'module' => 'Tags',
      'relate_collection' => true,
      'studio' => 
      array (
        'portal' => false,
        'base' => 
        array (
          'popuplist' => false,
        ),
        'mobile' => 
        array (
          'wirelesseditview' => true,
          'wirelessdetailview' => true,
        ),
      ),
      'massupdate' => true,
      'exportable' => true,
      'sortable' => false,
      'rname' => 'name',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
      ),
    ),
    'tag_link' => 
    array (
      'name' => 'tag_link',
      'type' => 'link',
      'vname' => 'LBL_TAGS_LINK',
      'relationship' => 'dri_workflow_task_templates_tags',
      'source' => 'non-db',
      'exportable' => false,
      'duplicate_merge' => 'disabled',
    ),
    'locked_fields' => 
    array (
      'name' => 'locked_fields',
      'vname' => 'LBL_LOCKED_FIELDS',
      'type' => 'locked_fields',
      'link' => 'locked_fields_link',
      'source' => 'non-db',
      'module' => 'pmse_BpmProcessDefinition',
      'relate_collection' => true,
      'studio' => false,
      'massupdate' => false,
      'exportable' => false,
      'sortable' => false,
      'rname' => 'pro_locked_variables',
      'collection_fields' => 
      array (
        0 => 'pro_locked_variables',
      ),
      'full_text_search' => 
      array (
        'enabled' => false,
        'searchable' => false,
      ),
      'hideacl' => true,
    ),
    'locked_fields_link' => 
    array (
      'name' => 'locked_fields_link',
      'type' => 'link',
      'vname' => 'LBL_LOCKED_FIELDS_LINK',
      'relationship' => 'dri_workflow_task_templates_locked_fields',
      'source' => 'non-db',
      'exportable' => false,
      'duplicate_merge' => 'disabled',
    ),
    'team_id' => 
    array (
      'name' => 'team_id',
      'vname' => 'LBL_TEAM_ID',
      'group' => 'team_name',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'team_list',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'Team ID for the account',
    ),
    'team_set_id' => 
    array (
      'name' => 'team_set_id',
      'rname' => 'id',
      'id_name' => 'team_set_id',
      'vname' => 'LBL_TEAM_SET_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => 'false',
      'dbType' => 'id',
      'duplicate_on_record_copy' => 'always',
    ),
    'acl_team_set_id' => 
    array (
      'name' => 'acl_team_set_id',
      'vname' => 'LBL_TEAM_SET_SELECTED_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => false,
      'isnull' => true,
      'duplicate_on_record_copy' => 'always',
    ),
    'team_count' => 
    array (
      'name' => 'team_count',
      'rname' => 'team_count',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'join_name' => 'ts1',
      'table' => 'teams',
      'type' => 'relate',
      'required' => 'true',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_count_link',
      'massupdate' => false,
      'dbType' => 'int',
      'source' => 'non-db',
      'importable' => 'false',
      'reportable' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'studio' => 'false',
      'hideacl' => true,
    ),
    'team_name' => 
    array (
      'name' => 'team_name',
      'db_concat_fields' => 
      array (
        0 => 'name',
        1 => 'name_2',
      ),
      'sort_on' => 'tj.name',
      'join_name' => 'tj',
      'rname' => 'name',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'type' => 'relate',
      'required' => 'true',
      'table' => 'teams',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_link',
      'massupdate' => true,
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'custom_type' => 'teamset',
      'studio' => 
      array (
        'portallistview' => false,
        'portalrecordview' => false,
      ),
      'duplicate_on_record_copy' => 'always',
      'exportable' => true,
      'fields' => 
      array (
        0 => 'acl_team_set_id',
      ),
    ),
    'acl_team_names' => 
    array (
      'name' => 'acl_team_names',
      'table' => 'teams',
      'module' => 'Teams',
      'vname' => 'LBL_TEAM_SET_SELECTED_TEAMS',
      'rname' => 'name',
      'id_name' => 'acl_team_set_id',
      'source' => 'non-db',
      'link' => 'team_link',
      'type' => 'relate',
      'custom_type' => 'teamset',
      'exportable' => true,
      'studio' => false,
      'massupdate' => false,
      'hideacl' => true,
    ),
    'team_link' => 
    array (
      'name' => 'team_link',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_templates_team',
      'vname' => 'LBL_TEAMS_LINK',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'Team',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
      'side' => 'right',
    ),
    'team_count_link' => 
    array (
      'name' => 'team_count_link',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_templates_team_count_relationship',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'TeamSet',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'studio' => 'false',
      'side' => 'right',
    ),
    'teams' => 
    array (
      'name' => 'teams',
      'type' => 'link',
      'relationship' => 'dri_workflow_task_templates_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
      'side' => 'left',
    ),
    'task_due_date_type' => 
    array (
      'name' => 'task_due_date_type',
      'vname' => 'LBL_TASK_DUE_DATE_TYPE',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'dri_workflow_task_templates_task_due_date_type_list',
      'type' => 'enum',
      'visibility_grid' => 
      array (
        'trigger' => 'activity_type',
        'values' => 
        array (
          'Tasks' => 
          array (
            0 => '',
            1 => 'days_from_created',
            2 => 'days_from_stage_started',
            3 => 'days_from_previous_activity_completed',
          ),
          'Meetings' => 
          array (
            0 => 'days_from_created',
            1 => 'days_from_stage_started',
            2 => 'days_from_previous_activity_completed',
          ),
          'Calls' => 
          array (
            0 => 'days_from_created',
            1 => 'days_from_stage_started',
            2 => 'days_from_previous_activity_completed',
          ),
        ),
      ),
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'task_priority_dom',
      'type' => 'enum',
      'default' => 'Medium',
      'len' => 100,
      'dependency' => 'equal($activity_type, "Tasks")',
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'dri_workflow_task_templates_type_list',
      'type' => 'enum',
      'default' => 'customer_task',
      'dependency' => 'equal($activity_type, "Tasks")',
    ),
    'activity_type' => 
    array (
      'name' => 'activity_type',
      'vname' => 'LBL_ACTIVITY_TYPE',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'dri_workflow_task_templates_activity_type_list',
      'type' => 'enum',
      'default' => 'Tasks',
    ),
    'duration_minutes' => 
    array (
      'name' => 'duration_minutes',
      'vname' => 'LBL_DURATION_MINUTES',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'duration_intervals',
      'type' => 'enum',
      'len' => 2,
      'default' => 0,
    ),
    'direction' => 
    array (
      'name' => 'direction',
      'vname' => 'LBL_DIRECTION',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'call_direction_dom',
      'type' => 'enum',
      'len' => 100,
      'default' => 'Outbound',
      'dependency' => 'equal($activity_type, "Calls")',
    ),
    'points' => 
    array (
      'name' => 'points',
      'vname' => 'LBL_POINTS',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'dri_workflow_task_templates_points_list',
      'type' => 'enum',
      'default' => 10,
      'dependency' => 'not($is_parent)',
      'dbType' => 'int',
      'len' => 3,
    ),
    'send_invites' => 
    array (
      'name' => 'send_invites',
      'vname' => 'LBL_SEND_INVITES',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'dri_workflow_task_templates_send_invites_list',
      'type' => 'enum',
      'default' => 'none',
      'dependency' => 'or(equal($activity_type, "Meetings"), equal($activity_type, "Calls"))',
    ),
    'time_of_day' => 
    array (
      'name' => 'time_of_day',
      'vname' => 'LBL_TIME_OF_DAY',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'varchar',
      'len' => 255,
      'dependency' => 'and(or(equal($activity_type, "Meetings"), equal($activity_type, "Calls")), not(equal($task_due_date_type, "")))',
      'default' => '12:00',
    ),
    'sort_order' => 
    array (
      'name' => 'sort_order',
      'vname' => 'LBL_SORT_ORDER',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'varchar',
      'len' => 255,
      'default' => 1,
    ),
    'task_due_days' => 
    array (
      'name' => 'task_due_days',
      'vname' => 'LBL_TASK_DUE_DAYS',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'int',
      'len' => 8,
      'options' => 'numeric_range_search_dom',
      'enable_range_search' => true,
      'dependency' => 'not(equal($task_due_date_type, ""))',
    ),
    'duration_hours' => 
    array (
      'name' => 'duration_hours',
      'vname' => 'LBL_DURATION_HOURS',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'int',
      'len' => 3,
      'options' => 'numeric_range_search_dom',
      'enable_range_search' => true,
      'default' => 1,
    ),
    'duration' => 
    array (
      'name' => 'duration',
      'vname' => 'LBL_DURATION',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'int',
      'len' => 8,
      'options' => 'numeric_range_search_dom',
      'enable_range_search' => true,
      'source' => 'non-db',
      'dependency' => 'and(or(equal($activity_type, "Meetings"), equal($activity_type, "Calls")), not(equal($task_due_date_type, "")))',
    ),
    'is_parent' => 
    array (
      'name' => 'is_parent',
      'vname' => 'LBL_IS_PARENT',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'bool',
      'readonly' => true,
      'default' => false,
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'vname' => 'LBL_TASKS',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'left',
      'bean_name' => 'Task',
      'relationship' => 'task_dri_workflow_task_templates',
      'module' => 'Tasks',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'vname' => 'LBL_CALLS',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'left',
      'bean_name' => 'Call',
      'relationship' => 'call_dri_workflow_task_templates',
      'module' => 'Calls',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'vname' => 'LBL_MEETINGS',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'left',
      'bean_name' => 'Meeting',
      'relationship' => 'meeting_dri_workflow_task_templates',
      'module' => 'Meetings',
    ),
    'children' => 
    array (
      'name' => 'children',
      'vname' => 'LBL_CHILDREN',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'left',
      'bean_name' => 'DRI_Workflow_Task_Template',
      'relationship' => 'dri_workflow_task_template_parent_dri_workflow_task_templates',
      'module' => 'DRI_Workflow_Task_Templates',
    ),
    'blocked_by' => 
    array (
      'name' => 'blocked_by',
      'vname' => 'LBL_BLOCKED_BY',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'json',
      'dbType' => 'text',
      'isMultiSelect' => true,
    ),
    'dri_subworkflow_template_label' => 
    array (
      'name' => 'dri_subworkflow_template_label',
      'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE_LABEL',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'source' => 'non-db',
      'type' => 'relate',
      'rname' => 'label',
      'table' => 'dri_subworkflow_templates',
      'id_name' => 'dri_subworkflow_template_id',
      'sort_on' => 'dri_subworkflow_template_label',
      'module' => 'DRI_SubWorkflow_Templates',
      'link' => 'dri_subworkflow_template_link',
    ),
    'dri_subworkflow_template_sort_order' => 
    array (
      'name' => 'dri_subworkflow_template_sort_order',
      'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE_SORT_ORDER',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'source' => 'non-db',
      'type' => 'relate',
      'rname' => 'sort_order',
      'table' => 'dri_subworkflow_templates',
      'id_name' => 'dri_subworkflow_template_id',
      'sort_on' => 'dri_subworkflow_template_sort_order',
      'module' => 'DRI_SubWorkflow_Templates',
      'link' => 'dri_subworkflow_template_link',
    ),
    'dri_subworkflow_template_id' => 
    array (
      'name' => 'dri_subworkflow_template_id',
      'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'id',
    ),
    'dri_subworkflow_template_name' => 
    array (
      'name' => 'dri_subworkflow_template_name',
      'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
      'required' => true,
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
    ),
    'dri_subworkflow_template_link' => 
    array (
      'name' => 'dri_subworkflow_template_link',
      'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_SubWorkflow_Template',
      'relationship' => 'dri_workflow_task_template_dri_subworkflow_templates',
      'module' => 'DRI_SubWorkflow_Templates',
    ),
    'dri_workflow_template_id' => 
    array (
      'name' => 'dri_workflow_template_id',
      'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'id',
    ),
    'dri_workflow_template_name' => 
    array (
      'name' => 'dri_workflow_template_name',
      'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
      'required' => true,
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
      'readonly' => true,
      'link' => 'dri_workflow_template_link',
    ),
    'dri_workflow_template_link' => 
    array (
      'name' => 'dri_workflow_template_link',
      'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_Workflow_Template',
      'relationship' => 'dri_workflow_task_template_dri_workflow_templates',
      'module' => 'DRI_Workflow_Templates',
    ),
    'blocked_by_id' => 
    array (
      'name' => 'blocked_by_id',
      'vname' => 'LBL_BLOCKED_BY',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'id',
    ),
    'blocked_by_name' => 
    array (
      'name' => 'blocked_by_name',
      'vname' => 'LBL_BLOCKED_BY',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'source' => 'non-db',
      'type' => 'relate',
      'rname' => 'name',
      'table' => 'dri_workflow_task_templates',
      'id_name' => 'blocked_by_id',
      'sort_on' => 'name',
      'module' => 'DRI_Workflow_Task_Templates',
      'link' => 'blocked_by_link',
    ),
    'blocked_by_link' => 
    array (
      'name' => 'blocked_by_link',
      'vname' => 'LBL_BLOCKED_BY',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_Workflow_Task_Template',
      'relationship' => 'dri_workflow_task_template_blocked_by_dri_workflow_task_templates',
      'module' => 'DRI_Workflow_Task_Templates',
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'vname' => 'LBL_PARENT',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'id',
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'vname' => 'LBL_PARENT',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'source' => 'non-db',
      'type' => 'relate',
      'rname' => 'name',
      'table' => 'dri_workflow_task_templates',
      'id_name' => 'parent_id',
      'sort_on' => 'name',
      'module' => 'DRI_Workflow_Task_Templates',
      'readonly' => true,
      'dependency' => 'not(equal($parent_id, ""))',
      'link' => 'parent_link',
    ),
    'parent_link' => 
    array (
      'name' => 'parent_link',
      'vname' => 'LBL_PARENT',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_Workflow_Task_Template',
      'relationship' => 'dri_workflow_task_template_parent_dri_workflow_task_templates',
      'module' => 'DRI_Workflow_Task_Templates',
    ),
  ),
  'relationships' => 
  array (
    'dri_workflow_task_templates_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'dri_workflow_task_templates_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'dri_workflow_task_template_activities' => 
    array (
      'lhs_module' => 'DRI_Workflow_Task_Templates',
      'lhs_table' => 'dri_workflow_task_templates',
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
      'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
    ),
    'dri_workflow_task_templates_following' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'subscriptions',
      'join_key_lhs' => 'created_by',
      'join_key_rhs' => 'parent_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
      'user_field' => 'created_by',
    ),
    'dri_workflow_task_templates_favorite' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'sugarfavorites',
      'join_key_lhs' => 'modified_user_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
      'user_field' => 'created_by',
    ),
    'dri_workflow_task_templates_tags' => 
    array (
      'lhs_module' => 'DRI_Workflow_Task_Templates',
      'lhs_table' => 'dri_workflow_task_templates',
      'lhs_key' => 'id',
      'rhs_module' => 'Tags',
      'rhs_table' => 'tags',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tag_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'tag_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
      'dynamic_subpanel' => true,
    ),
    'dri_workflow_task_templates_locked_fields' => 
    array (
      'lhs_module' => 'DRI_Workflow_Task_Templates',
      'lhs_table' => 'dri_workflow_task_templates',
      'lhs_key' => 'id',
      'rhs_module' => 'pmse_BpmProcessDefinition',
      'rhs_table' => 'pmse_bpm_process_definition',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'locked_field_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'pd_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
    ),
    'dri_workflow_task_templates_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'dri_workflow_task_templates_teams' => 
    array (
      'lhs_module' => 'DRI_Workflow_Task_Templates',
      'lhs_table' => 'dri_workflow_task_templates',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'dri_workflow_task_templates_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'dri_workflow_task_template_dri_subworkflow_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_SubWorkflow_Templates',
      'lhs_table' => 'dri_subworkflow_templates',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'dri_subworkflow_template_id',
    ),
    'dri_workflow_task_template_dri_workflow_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_Workflow_Templates',
      'lhs_table' => 'dri_workflow_templates',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'dri_workflow_template_id',
    ),
    'dri_workflow_task_template_blocked_by_dri_workflow_task_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_Workflow_Task_Templates',
      'lhs_table' => 'dri_workflow_task_templates',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'blocked_by_id',
    ),
    'dri_workflow_task_template_parent_dri_workflow_task_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_Workflow_Task_Templates',
      'lhs_table' => 'dri_workflow_task_templates',
      'rhs_module' => 'DRI_Workflow_Task_Templates',
      'rhs_table' => 'dri_workflow_task_templates',
      'rhs_key' => 'parent_id',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'idx_dri_workflow_task_templates_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'idx_dri_workflow_task_templates_date_modfied',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'deleted' => 
    array (
      'name' => 'idx_dri_workflow_task_templates_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'idx_dri_workflow_task_templates_date_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_entered',
      ),
    ),
    'name_del' => 
    array (
      'name' => 'idx_dri_workflow_task_templates_name_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
        1 => 'deleted',
      ),
    ),
    'team_set_dri_workflow_task_templates' => 
    array (
      'name' => 'idx_dri_workflow_task_templates_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
        1 => 'deleted',
      ),
    ),
    'acl_team_set_dri_workflow_task_templates' => 
    array (
      'name' => 'idx_dri_workflow_task_templates_acl_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acl_team_set_id',
        1 => 'deleted',
      ),
    ),
    'idx_dri_subworkflow_template_id' => 
    array (
      'name' => 'idx_dri_subworkflow_template_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dri_subworkflow_template_id',
      ),
    ),
    'idx_dri_workflow_template_id' => 
    array (
      'name' => 'idx_dri_workflow_template_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dri_workflow_template_id',
      ),
    ),
    'idx_blocked_by_id' => 
    array (
      'name' => 'idx_blocked_by_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'blocked_by_id',
      ),
    ),
    'idx_parent_id' => 
    array (
      'name' => 'idx_parent_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_id',
      ),
    ),
  ),
  'optimistic_lock' => true,
  'acls' => 
  array (
    'SugarACLDeveloperOrAdmin' => 
    array (
      'adminFor' => 'DRI_Workflow_Templates',
      'allowUserRead' => true,
    ),
    'SugarACLLockedFields' => true,
    'SugarACLCustomerJourney' => true,
    'SugarACLStatic' => true,
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'duplicate_check' => 
  array (
    'enabled' => false,
    'FilterDuplicateCheck' => 
    array (
      'filter_template' => 
      array (
        0 => 
        array (
          'name' => 
          array (
            '$starts' => '$name',
          ),
        ),
      ),
      'ranking_fields' => 
      array (
        0 => 
        array (
          'in_field_name' => 'name',
          'dupe_field_name' => 'name',
        ),
      ),
    ),
  ),
  'favorites' => true,
  'templates' => 
  array (
    'basic' => 'basic',
    'following' => 'following',
    'favorite' => 'favorite',
    'taggable' => 'taggable',
    'lockable_fields' => 'lockable_fields',
    'team_security' => 'team_security',
  ),
  'custom_fields' => false,
  'has_pii_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);