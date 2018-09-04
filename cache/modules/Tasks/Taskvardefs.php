<?php 
 $GLOBALS["dictionary"]["Task"]=array (
  'table' => 'tasks',
  'audited' => true,
  'unified_search' => true,
  'full_text_search' => true,
  'activity_enabled' => true,
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
      'vname' => 'LBL_SUBJECT',
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '50',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.45,
      ),
      'importable' => 'required',
      'required' => true,
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
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.56,
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
      'relationship' => 'tasks_created_by',
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
      'relationship' => 'tasks_modified_user',
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
      'relationship' => 'task_activities',
      'vname' => 'LBL_ACTIVITY_STREAM',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'task_status_dom',
      'len' => 100,
      'required' => true,
      'default' => 'Not Started',
      'duplicate_on_record_copy' => 'no',
      'full_text_search' => 
      array (
      ),
      'audited' => false,
      'massupdate' => true,
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'merge_filter' => 'disabled',
      'unified_search' => false,
      'calculated' => false,
      'dependency' => false,
    ),
    'date_due_flag' => 
    array (
      'name' => 'date_due_flag',
      'vname' => 'LBL_DATE_DUE_FLAG',
      'type' => 'bool',
      'default' => 0,
      'group' => 'date_due',
      'studio' => false,
      'massupdate' => false,
    ),
    'date_due' => 
    array (
      'name' => 'date_due',
      'vname' => 'LBL_DUE_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'group' => 'date_due',
      'studio' => 
      array (
        'required' => true,
        'no_duplicate' => true,
      ),
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'full_text_search' => 
      array (
        'type' => 'datetime',
        'enabled' => true,
        'searchable' => false,
      ),
    ),
    'time_due' => 
    array (
      'name' => 'time_due',
      'vname' => 'LBL_DUE_TIME',
      'type' => 'datetime',
      'source' => 'non-db',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'date_start_flag' => 
    array (
      'name' => 'date_start_flag',
      'vname' => 'LBL_DATE_START_FLAG',
      'type' => 'bool',
      'group' => 'date_start',
      'default' => 0,
      'studio' => false,
      'massupdate' => false,
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_START_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'group' => 'date_start',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'date_due',
        'blank' => false,
      ),
      'studio' => 
      array (
        'required' => true,
        'no_duplicate' => true,
      ),
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_NAME',
      'type' => 'parent_type',
      'dbType' => 'varchar',
      'group' => 'parent_name',
      'options' => 'parent_type_display',
      'required' => false,
      'len' => '255',
      'comment' => 'The Sugar object to which the call is related',
      'studio' => 
      array (
        'wirelesslistview' => false,
      ),
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'parent_type' => 'record_type_display',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'vname' => 'LBL_LIST_RELATED_TO',
      'type' => 'parent',
      'group' => 'parent_name',
      'source' => 'non-db',
      'options' => 'parent_type_display',
      'studio' => true,
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'type' => 'id',
      'group' => 'parent_name',
      'reportable' => false,
      'vname' => 'LBL_PARENT_ID',
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'type' => 'id',
      'group' => 'contact_name',
      'reportable' => false,
      'vname' => 'LBL_CONTACT_ID',
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'source' => 'non-db',
      'len' => '510',
      'group' => 'contact_name',
      'vname' => 'LBL_CONTACT_NAME',
      'reportable' => false,
      'id_name' => 'contact_id',
      'join_name' => 'contacts',
      'type' => 'relate',
      'module' => 'Contacts',
      'link' => 'contacts',
      'table' => 'contacts',
    ),
    'contact_phone' => 
    array (
      'name' => 'contact_phone',
      'type' => 'relate',
      'source' => 'non-db',
      'link' => 'contacts',
      'module' => 'Contacts',
      'table' => 'contacts',
      'id_name' => 'contact_id',
      'rname' => 'phone_work',
      'vname' => 'LBL_CONTACT_PHONE',
      'studio' => 
      array (
        'listview' => true,
      ),
      'readonly' => true,
    ),
    'contact_email' => 
    array (
      'name' => 'contact_email',
      'type' => 'varchar',
      'vname' => 'LBL_EMAIL_ADDRESS',
      'source' => 'non-db',
      'studio' => false,
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'task_priority_dom',
      'len' => 100,
      'required' => true,
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'contact_tasks',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_CONTACT',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'opportunity_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITY',
    ),
    'revenuelineitems' => 
    array (
      'name' => 'revenuelineitems',
      'type' => 'link',
      'relationship' => 'revenuelineitem_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_REVENUELINEITEMS',
      'workflow' => false,
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'case_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_CASE',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'bug_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_tasks_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'lead_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'projects' => 
    array (
      'name' => 'projects',
      'type' => 'link',
      'relationship' => 'projects_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECTS',
    ),
    'project_tasks' => 
    array (
      'name' => 'project_tasks',
      'type' => 'link',
      'relationship' => 'project_tasks_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECT_TASKS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'tasks_notes',
      'module' => 'Notes',
      'bean_name' => 'Note',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'quote_tasks',
      'vname' => 'LBL_QUOTES',
      'source' => 'non-db',
    ),
    'contact_parent' => 
    array (
      'name' => 'contact_parent',
      'type' => 'link',
      'relationship' => 'contact_tasks_parent',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'meetings_parent' => 
    array (
      'name' => 'meetings_parent',
      'type' => 'link',
      'relationship' => 'task_meetings_parent',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
      'reportable' => false,
    ),
    'calls_parent' => 
    array (
      'name' => 'calls_parent',
      'type' => 'link',
      'relationship' => 'task_calls_parent',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
      'reportable' => false,
    ),
    'project' => 
    array (
      'name' => 'project',
      'type' => 'link',
      'relationship' => 'projects_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECTS',
      'side' => 'right',
    ),
    'kbcontents' => 
    array (
      'name' => 'kbcontents',
      'type' => 'link',
      'relationship' => 'kbcontent_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_KBDOCUMENTS',
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
      'relationship' => 'tasks_following',
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
      'relationship' => 'tasks_favorite',
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
      'relationship' => 'tasks_tags',
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
      'relationship' => 'tasks_locked_fields',
      'source' => 'non-db',
      'exportable' => false,
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'id',
      'reportable' => false,
      'isnull' => 'false',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
      'mandatory_fetch' => true,
      'massupdate' => false,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => false,
        'aggregations' => 
        array (
          'assigned_user_id' => 
          array (
            'type' => 'MyItems',
            'label' => 'LBL_AGG_ASSIGNED_TO_ME',
          ),
        ),
      ),
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO',
      'rname' => 'full_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'tasks_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
      'side' => 'right',
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
      'relationship' => 'tasks_team',
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
      'relationship' => 'tasks_team_count_relationship',
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
      'relationship' => 'tasks_teams',
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
    'tasks_mv_attachments' => 
    array (
      'name' => 'tasks_mv_attachments',
      'type' => 'link',
      'relationship' => 'tasks_mv_attachments',
      'module' => 'mv_Attachments',
      'bean_name' => 'mv_Attachments',
      'source' => 'non-db',
      'vname' => 'LBL_MV_ATTACHMENTS',
    ),
    'remind_me_c' => 
    array (
      'labelValue' => 'Remind Me',
      'enforced' => '',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'remind_me_c',
      'vname' => 'LBL_REMIND_ME',
      'type' => 'bool',
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
      'pii' => false,
      'default' => false,
      'calculated' => false,
      'len' => 255,
      'size' => '20',
      'id' => 'Tasksremind_me_c',
      'custom_module' => 'Tasks',
    ),
    'duration_till_remind_c' => 
    array (
      'labelValue' => 'Duration before Reminder',
      'dependency' => 'equal($remind_me_c,1)',
      'visibility_grid' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'duration_till_remind_c',
      'vname' => 'LBL_DURATION_TILL_REMIND',
      'type' => 'enum',
      'massupdate' => true,
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
      'pii' => false,
      'default' => '900',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'duration_dom',
      'id' => 'Tasksduration_till_remind_c',
      'custom_module' => 'Tasks',
    ),
    'reminder_time_c' => 
    array (
      'labelValue' => 'Reminder Time',
      'enforced' => '',
      'readonly' => true,
      'dependency' => 'equal($remind_me_c,1)',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'reminder_time_c',
      'vname' => 'LBL_REMINDER_TIME',
      'type' => 'datetimecombo',
      'massupdate' => true,
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
      'pii' => false,
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'Tasksreminder_time_c',
      'custom_module' => 'Tasks',
    ),
    'm_cams_activities_1_tasks' => 
    array (
      'name' => 'm_cams_activities_1_tasks',
      'type' => 'link',
      'relationship' => 'm_cams_activities_1_tasks',
      'source' => 'non-db',
      'module' => 'm_CAMS',
      'bean_name' => 'm_CAMS',
      'vname' => 'LBL_M_CAMS_ACTIVITIES_1_TASKS_FROM_M_CAMS_TITLE',
    ),
    'is_production_deficiency_c' => 
    array (
      'labelValue' => 'Is Production Deficiency',
      'enforced' => '',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'is_production_deficiency_c',
      'vname' => 'LBL_IS_PRODUCTION_DEFICIENCY',
      'type' => 'bool',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'default' => false,
      'calculated' => false,
      'len' => 255,
      'size' => '20',
      'id' => 'Tasksis_production_deficiency_c',
      'custom_module' => 'Tasks',
    ),
    'is_realtor_deficiency_c' => 
    array (
      'labelValue' => 'Is Sales Deficiency',
      'enforced' => '',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'is_realtor_deficiency_c',
      'vname' => 'LBL_IS_REALTOR_DEFICIENCY',
      'type' => 'bool',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'default' => false,
      'calculated' => false,
      'len' => 255,
      'size' => '20',
      'id' => 'Tasksis_realtor_deficiency_c',
      'custom_module' => 'Tasks',
    ),
    'allday' => 
    array (
      'name' => 'allday',
      'vname' => 'LBL_IS_ALLDAY',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
      'massupdate' => false,
      'importable' => 'false',
      'studio' => false,
    ),
    'gevent_id' => 
    array (
      'name' => 'gevent_id',
      'rname' => 'name',
      'vname' => 'LBL_GEVENT_ID',
      'type' => 'varchar',
      'reportable' => false,
      'massupdate' => false,
      'importable' => 'false',
      'studio' => false,
    ),
    'is_gevent' => 
    array (
      'name' => 'is_gevent',
      'vname' => 'LBL_IS_GEVENT',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'massupdate' => false,
      'importable' => 'false',
      'studio' => false,
    ),
    'calendar_type' => 
    array (
      'name' => 'calendar_type',
      'vname' => 'LBL_CALENDAR_TYPE',
      'function' => 'getCalendarTypes',
      'type' => 'enum',
      'default' => 'primary',
      'reportable' => false,
      'massupdate' => false,
      'importable' => 'false',
      'studio' => 
      array (
        'listview' => true,
        'detailview' => true,
        'editview' => true,
      ),
      'dependency' => 'not(isCurrentUser($assigned_user_id))',
    ),
    'calendar_id_c' => 
    array (
      'labelValue' => 'Calendar Id',
      'dependency' => '',
      'visibility_grid' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'calendar_id_c',
      'vname' => 'LBL_CALENDAR_ID_C',
      'type' => 'enum',
      'massupdate' => true,
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
      'pii' => false,
      'default' => 'primary',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'calendar_id_c_list',
      'id' => 'Taskscalendar_id_c',
      'custom_module' => 'Tasks',
    ),
    'dri_workflow_status' => 
    array (
      'name' => 'dri_workflow_status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'task_status_dom',
      'len' => 100,
      'required' => true,
      'default' => 'Not Started',
      'duplicate_on_record_copy' => 'no',
      'full_text_search' => 
      array (
      ),
      'audited' => false,
      'massupdate' => true,
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'merge_filter' => 'disabled',
      'unified_search' => false,
      'calculated' => false,
      'dependency' => false,
    ),
    'dri_workflow_sort_order' => 
    array (
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
    ),
    'customer_journey_score' => 
    array (
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
    ),
    'customer_journey_progress' => 
    array (
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
    ),
    'customer_journey_points' => 
    array (
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
    ),
    'customer_journey_parent_activity_type' => 
    array (
      'name' => 'customer_journey_parent_activity_type',
      'vname' => 'LBL_CUSTOMER_JOURNEY_PARENT_ACTIVITY_TYPE',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'dri_customer_journey_parent_activity_type_list',
      'type' => 'enum',
    ),
    'customer_journey_type' => 
    array (
      'name' => 'customer_journey_type',
      'vname' => 'LBL_CUSTOMER_JOURNEY_TYPE',
      'required' => true,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'options' => 'dri_workflow_task_templates_type_list',
      'type' => 'enum',
      'dependency' => 'not(equal($dri_subworkflow_id, ""))',
      'default' => 'customer_task',
    ),
    'customer_journey_blocked_by' => 
    array (
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
    ),
    'customer_journey_parent_activity_id' => 
    array (
      'name' => 'customer_journey_parent_activity_id',
      'vname' => 'LBL_CUSTOMER_JOURNEY_PARENT_ACTIVITY_ID',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'id',
    ),
    'is_customer_journey_parent_activity' => 
    array (
      'name' => 'is_customer_journey_parent_activity',
      'vname' => 'LBL_IS_CUSTOMER_JOURNEY_PARENT_ACTIVITY',
      'required' => false,
      'reportable' => true,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'bool',
      'default' => false,
    ),
    'is_customer_journey_activity' => 
    array (
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
    ),
    'dri_subworkflow_link' => 
    array (
      'name' => 'dri_subworkflow_link',
      'vname' => 'LBL_DRI_SUBWORKFLOW',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_SubWorkflow',
      'relationship' => 'task_dri_subworkflows',
      'module' => 'DRI_SubWorkflows',
    ),
    'current_customer_journey_activity_at' => 
    array (
      'name' => 'current_customer_journey_activity_at',
      'vname' => 'LBL_CURRENT_CUSTOMER_JOURNEY_ACTIVITY_AT',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'left',
      'bean_name' => 'DRI_Workflow',
      'relationship' => 'tasks_flex_relate_dri_workflows',
      'module' => 'DRI_Workflows',
    ),
    'dri_workflow_task_template_id' => 
    array (
      'name' => 'dri_workflow_task_template_id',
      'vname' => 'LBL_DRI_WORKFLOW_TASK_TEMPLATE',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'id',
    ),
    'dri_workflow_task_template_name' => 
    array (
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
    ),
    'dri_workflow_task_template_link' => 
    array (
      'name' => 'dri_workflow_task_template_link',
      'vname' => 'LBL_DRI_WORKFLOW_TASK_TEMPLATE',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_Workflow_Task_Template',
      'relationship' => 'task_dri_workflow_task_templates',
      'module' => 'DRI_Workflow_Task_Templates',
    ),
    'dri_subworkflow_id' => 
    array (
      'name' => 'dri_subworkflow_id',
      'vname' => 'LBL_DRI_SUBWORKFLOW',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => false,
      'type' => 'id',
    ),
    'dri_subworkflow_name' => 
    array (
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
    ),
    'dri_subworkflow_template_link' => 
    array (
      'name' => 'dri_subworkflow_template_link',
      'vname' => 'LBL_DRI_SUBWORKFLOW_TEMPLATE',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_SubWorkflow_Template',
      'relationship' => 'task_dri_subworkflow_templates',
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
    ),
    'dri_workflow_template_link' => 
    array (
      'name' => 'dri_workflow_template_link',
      'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_Workflow_Template',
      'relationship' => 'task_dri_workflow_templates',
      'module' => 'DRI_Workflow_Templates',
    ),
    'gcid_changed_c' => 
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'gcid_changed_c',
      'vname' => 'LBL_GCID_CHANGED_C',
      'type' => 'bool',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => '',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'default' => false,
      'calculated' => false,
      'size' => '20',
      'id' => 'Tasksgcid_changed_c',
      'custom_module' => 'Tasks',
    ),
  ),
  'relationships' => 
  array (
    'tasks_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'tasks_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'task_activities' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
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
      'relationship_role_column_value' => 'Tasks',
    ),
    'tasks_notes' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Tasks',
    ),
    'tasks_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'task_meetings_parent' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Tasks',
    ),
    'task_calls_parent' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Tasks',
    ),
    'tasks_following' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'subscriptions',
      'join_key_lhs' => 'created_by',
      'join_key_rhs' => 'parent_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Tasks',
      'user_field' => 'created_by',
    ),
    'tasks_favorite' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'sugarfavorites',
      'join_key_lhs' => 'modified_user_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Tasks',
      'user_field' => 'created_by',
    ),
    'tasks_tags' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'Tags',
      'rhs_table' => 'tags',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tag_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'tag_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Tasks',
      'dynamic_subpanel' => true,
    ),
    'tasks_locked_fields' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'pmse_BpmProcessDefinition',
      'rhs_table' => 'pmse_bpm_process_definition',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'locked_field_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'pd_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Tasks',
    ),
    'tasks_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'tasks_teams' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'tasks_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'tasks_mv_attachments' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'mv_Attachments',
      'rhs_table' => 'mv_attachments',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Tasks',
    ),
    'tasks_flex_relate_dri_workflows' => 
    array (
      'lhs_key' => 'id',
      'relationship_type' => 'one-to-many',
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'rhs_module' => 'DRI_Workflows',
      'rhs_table' => 'dri_workflows',
      'relationship_role_column_value' => 'Tasks',
      'relationship_role_column' => 'parent_type',
    ),
    'task_dri_workflow_task_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_Workflow_Task_Templates',
      'lhs_table' => 'dri_workflow_task_templates',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'dri_workflow_task_template_id',
    ),
    'task_dri_subworkflows' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_SubWorkflows',
      'lhs_table' => 'dri_subworkflows',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'dri_subworkflow_id',
    ),
    'task_dri_subworkflow_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_SubWorkflow_Templates',
      'lhs_table' => 'dri_subworkflow_templates',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'dri_subworkflow_template_id',
    ),
    'task_dri_workflow_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_Workflow_Templates',
      'lhs_table' => 'dri_workflow_templates',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'dri_workflow_template_id',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'idx_tasks_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'idx_tasks_date_modfied',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'deleted' => 
    array (
      'name' => 'idx_tasks_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'idx_tasks_date_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_entered',
      ),
    ),
    'name_del' => 
    array (
      'name' => 'idx_tasks_name_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
        1 => 'deleted',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_tsk_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_task_con_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contact_id',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_task_par_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_id',
        1 => 'parent_type',
        2 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_task_assigned',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
      ),
    ),
    4 => 
    array (
      'name' => 'idx_task_status',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
      ),
    ),
    5 => 
    array (
      'name' => 'idx_task_date_due',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_due',
      ),
    ),
    'assigned_user_id' => 
    array (
      'name' => 'idx_tasks_assigned_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
        1 => 'deleted',
      ),
    ),
    'team_set_tasks' => 
    array (
      'name' => 'idx_tasks_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
        1 => 'deleted',
      ),
    ),
    'acl_team_set_tasks' => 
    array (
      'name' => 'idx_tasks_acl_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acl_team_set_id',
        1 => 'deleted',
      ),
    ),
    'idx_dri_workflow_task_template_id' => 
    array (
      'name' => 'idx_dri_workflow_task_template_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dri_workflow_task_template_id',
      ),
    ),
    'idx_dri_subworkflow_id' => 
    array (
      'name' => 'idx_dri_subworkflow_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dri_subworkflow_id',
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
  ),
  'duplicate_check' => 
  array (
    'enabled' => false,
  ),
  'optimistic_locking' => true,
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'acls' => 
  array (
    'SugarACLLockedFields' => true,
    'SugarACLStatic' => true,
  ),
  'favorites' => true,
  'templates' => 
  array (
    'basic' => 'basic',
    'following' => 'following',
    'favorite' => 'favorite',
    'taggable' => 'taggable',
    'lockable_fields' => 'lockable_fields',
    'assignable' => 'assignable',
    'team_security' => 'team_security',
  ),
  'custom_fields' => true,
  'has_pii_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);