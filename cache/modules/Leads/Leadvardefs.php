<?php 
 $GLOBALS["dictionary"]["Lead"]=array (
  'table' => 'leads',
  'audited' => true,
  'activity_enabled' => true,
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'duplicate_merge' => true,
  'comment' => 'Leads are persons of interest early in a sales cycle',
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
      'type' => 'fullname',
      'fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
        2 => 'salutation',
        3 => 'title',
      ),
      'sort_on' => 'last_name',
      'source' => 'non-db',
      'group' => 'last_name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'importable' => 'false',
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
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.7,
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
      'relationship' => 'leads_created_by',
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
      'relationship' => 'leads_modified_user',
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
      'relationship' => 'lead_activities',
      'vname' => 'LBL_ACTIVITY_STREAM',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'salutation' => 
    array (
      'name' => 'salutation',
      'vname' => 'LBL_SALUTATION',
      'type' => 'enum',
      'options' => 'salutation_dom',
      'massupdate' => false,
      'len' => '255',
      'duplicate_on_record_copy' => 'always',
      'comment' => 'Contact salutation (e.g., Mr, Ms)',
      'audited' => true,
      'pii' => true,
    ),
    'first_name' => 
    array (
      'name' => 'first_name',
      'vname' => 'LBL_FIRST_NAME',
      'type' => 'varchar',
      'len' => '100',
      'unified_search' => true,
      'duplicate_on_record_copy' => 'always',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.87,
      ),
      'comment' => 'First name of the contact',
      'merge_filter' => 'selected',
      'audited' => true,
      'pii' => true,
    ),
    'last_name' => 
    array (
      'name' => 'last_name',
      'vname' => 'LBL_LAST_NAME',
      'type' => 'varchar',
      'len' => '100',
      'unified_search' => true,
      'duplicate_on_record_copy' => 'always',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.85,
      ),
      'comment' => 'Last name of the contact',
      'merge_filter' => 'selected',
      'required' => true,
      'importable' => 'required',
      'audited' => true,
      'pii' => true,
    ),
    'full_name' => 
    array (
      'name' => 'full_name',
      'vname' => 'LBL_NAME',
      'type' => 'fullname',
      'fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
        2 => 'salutation',
        3 => 'title',
      ),
      'sort_on' => 'last_name',
      'source' => 'non-db',
      'group' => 'last_name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'studio' => 
      array (
        'listview' => false,
      ),
      'duplicate_on_record_copy' => 'always',
    ),
    'title' => 
    array (
      'name' => 'title',
      'vname' => 'LBL_TITLE',
      'type' => 'varchar',
      'len' => '100',
      'duplicate_on_record_copy' => 'always',
      'comment' => 'The title of the contact',
      'audited' => true,
      'pii' => true,
    ),
    'facebook' => 
    array (
      'name' => 'facebook',
      'vname' => 'LBL_FACEBOOK',
      'type' => 'varchar',
      'len' => '100',
      'duplicate_on_record_copy' => 'always',
      'comment' => 'The facebook name of the user',
      'audited' => true,
      'pii' => true,
    ),
    'twitter' => 
    array (
      'name' => 'twitter',
      'vname' => 'LBL_TWITTER',
      'type' => 'varchar',
      'len' => '100',
      'duplicate_on_record_copy' => 'always',
      'comment' => 'The twitter name of the user',
      'audited' => true,
      'pii' => true,
    ),
    'googleplus' => 
    array (
      'name' => 'googleplus',
      'vname' => 'LBL_GOOGLEPLUS',
      'type' => 'varchar',
      'len' => '100',
      'duplicate_on_record_copy' => 'always',
      'comment' => 'The google plus id of the user',
      'audited' => true,
      'pii' => true,
    ),
    'department' => 
    array (
      'name' => 'department',
      'vname' => 'LBL_DEPARTMENT',
      'type' => 'varchar',
      'len' => '100',
      'comment' => 'Department the lead belongs to',
      'merge_filter' => 'enabled',
    ),
    'do_not_call' => 
    array (
      'name' => 'do_not_call',
      'vname' => 'LBL_DO_NOT_CALL',
      'type' => 'bool',
      'default' => '0',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'An indicator of whether contact can be called',
    ),
    'phone_home' => 
    array (
      'name' => 'phone_home',
      'vname' => 'LBL_HOME_PHONE',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'duplicate_on_record_copy' => 'always',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.02,
      ),
      'comment' => 'Home phone number of the contact',
      'merge_filter' => 'enabled',
      'audited' => true,
      'pii' => true,
    ),
    'phone_mobile' => 
    array (
      'name' => 'phone_mobile',
      'vname' => 'LBL_MOBILE_PHONE',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.01,
      ),
      'comment' => 'Mobile phone number of the contact',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'phone_work' => 
    array (
      'name' => 'phone_work',
      'vname' => 'LBL_OFFICE_PHONE',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'audited' => true,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.0,
      ),
      'comment' => 'Work phone number of the contact',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'pii' => true,
    ),
    'phone_other' => 
    array (
      'name' => 'phone_other',
      'vname' => 'LBL_OTHER_PHONE',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.99,
      ),
      'comment' => 'Other phone number for the contact',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'phone_fax' => 
    array (
      'name' => 'phone_fax',
      'vname' => 'LBL_FAX_PHONE',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.98,
      ),
      'comment' => 'Contact fax number',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'primary_address_street' => 
    array (
      'name' => 'primary_address_street',
      'vname' => 'LBL_PRIMARY_ADDRESS_STREET',
      'type' => 'text',
      'dbType' => 'varchar',
      'len' => '150',
      'comment' => 'The street address used for primary address',
      'group' => 'primary_address',
      'group_label' => 'LBL_PRIMARY_ADDRESS',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.31,
      ),
      'audited' => true,
      'pii' => true,
    ),
    'primary_address_street_2' => 
    array (
      'name' => 'primary_address_street_2',
      'vname' => 'LBL_PRIMARY_ADDRESS_STREET_2',
      'type' => 'varchar',
      'len' => '150',
      'source' => 'non-db',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'primary_address_street_3' => 
    array (
      'name' => 'primary_address_street_3',
      'vname' => 'LBL_PRIMARY_ADDRESS_STREET_3',
      'type' => 'varchar',
      'len' => '150',
      'source' => 'non-db',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'primary_address_city' => 
    array (
      'name' => 'primary_address_city',
      'vname' => 'LBL_PRIMARY_ADDRESS_CITY',
      'type' => 'varchar',
      'len' => '100',
      'group' => 'primary_address',
      'comment' => 'City for primary address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'primary_address_state' => 
    array (
      'name' => 'primary_address_state',
      'vname' => 'LBL_PRIMARY_ADDRESS_STATE',
      'type' => 'varchar',
      'len' => '100',
      'group' => 'primary_address',
      'comment' => 'State for primary address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'primary_address_postalcode' => 
    array (
      'name' => 'primary_address_postalcode',
      'vname' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
      'type' => 'varchar',
      'len' => '10',
      'group' => 'primary_address',
      'comment' => 'Postal code for primary address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'primary_address_country' => 
    array (
      'name' => 'primary_address_country',
      'vname' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
      'type' => 'enum',
      'group' => 'primary_address',
      'comment' => 'Country for primary address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
      'options' => 'mailchimp_country_list',
    ),
    'alt_address_street' => 
    array (
      'name' => 'alt_address_street',
      'vname' => 'LBL_ALT_ADDRESS_STREET',
      'type' => 'text',
      'dbType' => 'varchar',
      'len' => '150',
      'group' => 'alt_address',
      'group_label' => 'LBL_ALT_ADDRESS',
      'comment' => 'Street address for alternate address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 0.3,
      ),
      'audited' => true,
      'pii' => true,
    ),
    'alt_address_street_2' => 
    array (
      'name' => 'alt_address_street_2',
      'vname' => 'LBL_ALT_ADDRESS_STREET_2',
      'type' => 'varchar',
      'len' => '150',
      'source' => 'non-db',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'alt_address_street_3' => 
    array (
      'name' => 'alt_address_street_3',
      'vname' => 'LBL_ALT_ADDRESS_STREET_3',
      'type' => 'varchar',
      'len' => '150',
      'source' => 'non-db',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'alt_address_city' => 
    array (
      'name' => 'alt_address_city',
      'vname' => 'LBL_ALT_ADDRESS_CITY',
      'type' => 'varchar',
      'len' => '100',
      'group' => 'alt_address',
      'comment' => 'City for alternate address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'alt_address_state' => 
    array (
      'name' => 'alt_address_state',
      'vname' => 'LBL_ALT_ADDRESS_STATE',
      'type' => 'varchar',
      'len' => '100',
      'group' => 'alt_address',
      'comment' => 'State for alternate address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'alt_address_postalcode' => 
    array (
      'name' => 'alt_address_postalcode',
      'vname' => 'LBL_ALT_ADDRESS_POSTALCODE',
      'type' => 'varchar',
      'len' => '10',
      'group' => 'alt_address',
      'comment' => 'Postal code for alternate address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'alt_address_country' => 
    array (
      'name' => 'alt_address_country',
      'vname' => 'LBL_ALT_ADDRESS_COUNTRY',
      'type' => 'enum',
      'group' => 'alt_address',
      'comment' => 'Country for alternate address',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
      'options' => 'mailchimp_country_list',
    ),
    'assistant' => 
    array (
      'name' => 'assistant',
      'vname' => 'LBL_ASSISTANT',
      'type' => 'varchar',
      'len' => '75',
      'unified_search' => true,
      'comment' => 'Name of the assistant of the contact',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'assistant_phone' => 
    array (
      'name' => 'assistant_phone',
      'vname' => 'LBL_ASSISTANT_PHONE',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'group' => 'assistant',
      'unified_search' => true,
      'comment' => 'Phone number of the assistant of the contact',
      'merge_filter' => 'enabled',
      'duplicate_on_record_copy' => 'always',
      'audited' => true,
      'pii' => true,
    ),
    'picture' => 
    array (
      'name' => 'picture',
      'vname' => 'LBL_PICTURE_FILE',
      'type' => 'image',
      'dbtype' => 'varchar',
      'massupdate' => false,
      'reportable' => false,
      'comment' => 'Avatar',
      'len' => '255',
      'width' => '42',
      'height' => '42',
      'border' => '',
      'duplicate_on_record_copy' => 'always',
    ),
    'converted' => 
    array (
      'name' => 'converted',
      'vname' => 'LBL_CONVERTED',
      'type' => 'bool',
      'default' => '0',
      'comment' => 'Has Lead been converted to a Contact (and other Sugar objects)',
      'massupdate' => false,
      'studio' => false,
    ),
    'refered_by' => 
    array (
      'name' => 'refered_by',
      'vname' => 'LBL_REFERED_BY',
      'type' => 'varchar',
      'len' => '100',
      'comment' => 'Identifies who refered the lead',
      'merge_filter' => 'disabled',
      'audited' => false,
      'massupdate' => false,
      'comments' => 'Identifies who refered the lead',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
    ),
    'lead_source' => 
    array (
      'name' => 'lead_source',
      'vname' => 'LBL_LEAD_SOURCE',
      'type' => 'enum',
      'options' => 'lead_source_dom',
      'len' => '100',
      'audited' => true,
      'comment' => 'Lead source (ex: Web, print)',
      'merge_filter' => 'enabled',
    ),
    'lead_source_description' => 
    array (
      'name' => 'lead_source_description',
      'vname' => 'LBL_LEAD_SOURCE_DESCRIPTION',
      'type' => 'text',
      'group' => 'lead_source',
      'comment' => 'Description of the lead source',
      'audited' => false,
      'massupdate' => false,
      'comments' => 'Message from Web Form',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'rows' => '4',
      'cols' => '20',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'len' => '100',
      'options' => 'lead_status_dom',
      'default' => 'New',
      'audited' => true,
      'comment' => 'Status of the lead',
      'merge_filter' => 'enabled',
      'previewEdit' => false,
    ),
    'status_description' => 
    array (
      'name' => 'status_description',
      'vname' => 'LBL_STATUS_DESCRIPTION',
      'type' => 'text',
      'group' => 'status',
      'comment' => 'Description of the status of the lead',
    ),
    'reports_to_id' => 
    array (
      'name' => 'reports_to_id',
      'vname' => 'LBL_REPORTS_TO_ID',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'ID of Contact the Lead reports to',
    ),
    'report_to_name' => 
    array (
      'name' => 'report_to_name',
      'rname' => 'name',
      'id_name' => 'reports_to_id',
      'vname' => 'LBL_REPORTS_TO',
      'type' => 'relate',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'dbType' => 'varchar',
      'len' => 'id',
      'source' => 'non-db',
      'reportable' => false,
      'massupdate' => false,
    ),
    'reports_to_link' => 
    array (
      'name' => 'reports_to_link',
      'type' => 'link',
      'relationship' => 'lead_direct_reports',
      'link_type' => 'one',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_REPORTS_TO',
      'reportable' => false,
    ),
    'reportees' => 
    array (
      'name' => 'reportees',
      'type' => 'link',
      'relationship' => 'lead_direct_reports',
      'link_type' => 'many',
      'side' => 'left',
      'source' => 'non-db',
      'vname' => 'LBL_REPORTS_TO',
      'reportable' => false,
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'contact_leads',
      'module' => 'Contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
      'reportable' => false,
    ),
    'dataprivacy' => 
    array (
      'name' => 'dataprivacy',
      'type' => 'link',
      'relationship' => 'leads_dataprivacy',
      'source' => 'non-db',
      'vname' => 'LBL_DATAPRIVACY',
    ),
    'dp_business_purpose' => 
    array (
      'name' => 'dp_business_purpose',
      'vname' => 'LBL_DATAPRIVACY_BUSINESS_PURPOSE',
      'type' => 'multienum',
      'isMultiSelect' => true,
      'audited' => true,
      'options' => 'dataprivacy_business_purpose_dom',
      'default' => '',
      'len' => 255,
      'comment' => 'Business purposes consented for',
    ),
    'dp_consent_last_updated' => 
    array (
      'name' => 'dp_consent_last_updated',
      'vname' => 'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED',
      'type' => 'date',
      'display_default' => 'now',
      'audited' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'comment' => 'Date consent last updated',
    ),
    'dnb_principal_id' => 
    array (
      'name' => 'dnb_principal_id',
      'vname' => 'LBL_DNB_PRINCIPAL_ID',
      'type' => 'varchar',
      'len' => 30,
      'comment' => 'Unique Id For D&B Contact',
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'varchar',
      'len' => '255',
      'unified_search' => true,
      'comment' => 'Account name for lead',
      'audited' => false,
      'massupdate' => false,
      'comments' => 'Account name for lead',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
    ),
    'account_to_lead' => 
    array (
      'name' => 'account_to_lead',
      'rname' => 'name',
      'id_name' => 'account_id',
      'type' => 'relate',
      'link' => 'accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'source' => 'non-db',
      'unified_search' => false,
      'studio' => false,
      'massupdate' => false,
      'populate_list' => 
      array (
        'billing_address_street' => 'primary_address_street',
        'billing_address_city' => 'primary_address_city',
        'billing_address_state' => 'primary_address_state',
        'billing_address_postalcode' => 'primary_address_postalcode',
        'billing_address_country' => 'primary_address_country',
        'phone_office' => 'phone_work',
      ),
      'importable' => 'false',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_leads',
      'link_type' => 'one',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
      'duplicate_merge' => 'disabled',
    ),
    'account_description' => 
    array (
      'name' => 'account_description',
      'vname' => 'LBL_ACCOUNT_DESCRIPTION',
      'type' => 'text',
      'group' => 'account_name',
      'unified_search' => true,
      'comment' => 'Description of lead account',
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'type' => 'id',
      'reportable' => false,
      'vname' => 'LBL_CONTACT_ID',
      'comment' => 'If converted, Contact ID resulting from the conversion',
    ),
    'contact' => 
    array (
      'name' => 'contact',
      'type' => 'link',
      'link_type' => 'one',
      'relationship' => 'contact_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
      'reportable' => false,
      'side' => 'right',
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'rname' => 'name',
      'id_name' => 'contact_id',
      'vname' => 'LBL_CONTACT_NAME',
      'join_name' => 'contacts',
      'type' => 'relate',
      'link' => 'contacts',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'dbType' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
      'unified_search' => false,
      'massupdate' => false,
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'type' => 'id',
      'reportable' => false,
      'vname' => 'LBL_ACCOUNT_ID',
      'comment' => 'If converted, Account ID resulting from the conversion',
    ),
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'type' => 'id',
      'reportable' => false,
      'vname' => 'LBL_OPPORTUNITY_ID',
      'comment' => 'If converted, Opportunity ID resulting from the conversion',
    ),
    'opportunity' => 
    array (
      'name' => 'opportunity',
      'type' => 'link',
      'link_type' => 'one',
      'relationship' => 'opportunity_leads',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITIES',
    ),
    'opportunity_name' => 
    array (
      'name' => 'opportunity_name',
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'Opportunity name associated with lead',
    ),
    'opportunity_amount' => 
    array (
      'name' => 'opportunity_amount',
      'vname' => 'LBL_OPPORTUNITY_AMOUNT',
      'type' => 'varchar',
      'group' => 'opportunity_name',
      'len' => '50',
      'comment' => 'Amount of the opportunity',
    ),
    'campaign_id' => 
    array (
      'name' => 'campaign_id',
      'type' => 'id',
      'reportable' => false,
      'vname' => 'LBL_CAMPAIGN_ID',
      'comment' => 'Campaign that generated lead',
    ),
    'campaign_name' => 
    array (
      'name' => 'campaign_name',
      'rname' => 'name',
      'id_name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN',
      'type' => 'relate',
      'link' => 'campaign_leads',
      'table' => 'campaigns',
      'isnull' => 'true',
      'module' => 'Campaigns',
      'source' => 'non-db',
      'additionalFields' => 
      array (
        'id' => 'campaign_id',
      ),
      'massupdate' => false,
    ),
    'campaign_leads' => 
    array (
      'name' => 'campaign_leads',
      'type' => 'link',
      'vname' => 'LBL_CAMPAIGN_LEAD',
      'relationship' => 'campaign_leads',
      'source' => 'non-db',
    ),
    'c_accept_status_fields' => 
    array (
      'name' => 'c_accept_status_fields',
      'rname' => 'id',
      'relationship_fields' => 
      array (
        'id' => 'accept_status_id',
        'accept_status' => 'accept_status_name',
      ),
      'vname' => 'LBL_LIST_ACCEPT_STATUS',
      'type' => 'relate',
      'link' => 'calls',
      'link_type' => 'relationship_info',
      'source' => 'non-db',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'studio' => false,
    ),
    'm_accept_status_fields' => 
    array (
      'name' => 'm_accept_status_fields',
      'rname' => 'id',
      'relationship_fields' => 
      array (
        'id' => 'accept_status_id',
        'accept_status' => 'accept_status_name',
      ),
      'vname' => 'LBL_LIST_ACCEPT_STATUS',
      'type' => 'relate',
      'link' => 'meetings',
      'link_type' => 'relationship_info',
      'source' => 'non-db',
      'importable' => 'false',
      'hideacl' => true,
      'duplicate_merge' => 'disabled',
      'studio' => false,
    ),
    'accept_status_id' => 
    array (
      'name' => 'accept_status_id',
      'type' => 'varchar',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_ACCEPT_STATUS',
      'studio' => 
      array (
        'listview' => false,
      ),
    ),
    'accept_status_name' => 
    array (
      'massupdate' => false,
      'name' => 'accept_status_name',
      'type' => 'enum',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_ACCEPT_STATUS',
      'options' => 'dom_meeting_accept_status',
      'importable' => 'false',
    ),
    'accept_status_calls' => 
    array (
      'massupdate' => false,
      'name' => 'accept_status_calls',
      'type' => 'enum',
      'studio' => 'false',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_ACCEPT_STATUS',
      'options' => 'dom_meeting_accept_status',
      'importable' => 'false',
      'link' => 'calls',
      'rname_link' => 'accept_status',
    ),
    'accept_status_meetings' => 
    array (
      'massupdate' => false,
      'name' => 'accept_status_meetings',
      'type' => 'enum',
      'studio' => 'false',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_ACCEPT_STATUS',
      'options' => 'dom_meeting_accept_status',
      'importable' => 'false',
      'link' => 'meetings',
      'rname_link' => 'accept_status',
    ),
    'webtolead_email1' => 
    array (
      'name' => 'webtolead_email1',
      'vname' => 'LBL_EMAIL_ADDRESS',
      'type' => 'email',
      'len' => '100',
      'source' => 'non-db',
      'comment' => 'Main email address of lead',
      'importable' => 'false',
      'studio' => 'false',
    ),
    'webtolead_email2' => 
    array (
      'name' => 'webtolead_email2',
      'vname' => 'LBL_OTHER_EMAIL_ADDRESS',
      'type' => 'email',
      'len' => '100',
      'source' => 'non-db',
      'comment' => 'Secondary email address of lead',
      'importable' => 'false',
      'studio' => 'false',
    ),
    'webtolead_email_opt_out' => 
    array (
      'name' => 'webtolead_email_opt_out',
      'vname' => 'LBL_EMAIL_OPT_OUT',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Indicator signaling if lead elects to opt out of email campaigns',
      'importable' => 'false',
      'massupdate' => false,
      'studio' => 'false',
    ),
    'webtolead_invalid_email' => 
    array (
      'name' => 'webtolead_invalid_email',
      'vname' => 'LBL_INVALID_EMAIL',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Indicator that email address for lead is invalid',
      'importable' => 'false',
      'massupdate' => false,
      'studio' => 'false',
    ),
    'birthdate' => 
    array (
      'name' => 'birthdate',
      'vname' => 'LBL_BIRTHDATE',
      'massupdate' => false,
      'type' => 'date',
      'comment' => 'The birthdate of the contact',
      'audited' => true,
      'pii' => true,
    ),
    'portal_name' => 
    array (
      'name' => 'portal_name',
      'vname' => 'LBL_PORTAL_NAME',
      'type' => 'varchar',
      'len' => '255',
      'group' => 'portal',
      'group_label' => 'LBL_PORTAL',
      'comment' => 'Portal user name when lead created via lead portal',
      'studio' => true,
    ),
    'portal_app' => 
    array (
      'name' => 'portal_app',
      'vname' => 'LBL_PORTAL_APP',
      'type' => 'varchar',
      'group' => 'portal',
      'len' => '255',
      'comment' => 'Portal application that resulted in created of lead',
      'studio' => true,
    ),
    'website' => 
    array (
      'name' => 'website',
      'vname' => 'LBL_WEBSITE',
      'type' => 'url',
      'dbType' => 'varchar',
      'len' => 255,
      'link_target' => '_blank',
      'comment' => 'URL of website for the company',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'lead_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'lead_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'meetings_leads',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'meetings_parent' => 
    array (
      'name' => 'meetings_parent',
      'type' => 'link',
      'relationship' => 'lead_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
      'reportable' => false,
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'calls_leads',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'calls_parent' => 
    array (
      'name' => 'calls_parent',
      'type' => 'link',
      'relationship' => 'lead_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
      'reportable' => false,
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_leads_rel',
      'source' => 'non-db',
      'unified_search' => true,
      'vname' => 'LBL_EMAILS',
    ),
    'archived_emails' => 
    array (
      'name' => 'archived_emails',
      'type' => 'link',
      'link_file' => 'modules/Emails/ArchivedEmailsLink.php',
      'link_class' => 'ArchivedEmailsLink',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
      'module' => 'Emails',
      'link_type' => 'many',
      'relationship' => '',
      'hideacl' => true,
      'readonly' => true,
    ),
    'campaigns' => 
    array (
      'name' => 'campaigns',
      'type' => 'link',
      'relationship' => 'lead_campaign_log',
      'module' => 'CampaignLog',
      'bean_name' => 'CampaignLog',
      'source' => 'non-db',
      'vname' => 'LBL_CAMPAIGNLOG',
    ),
    'prospect_lists' => 
    array (
      'name' => 'prospect_lists',
      'type' => 'link',
      'relationship' => 'prospect_list_leads',
      'module' => 'ProspectLists',
      'source' => 'non-db',
      'vname' => 'LBL_PROSPECT_LIST',
    ),
    'prospect' => 
    array (
      'name' => 'prospect',
      'type' => 'link',
      'relationship' => 'lead_prospect',
      'module' => 'Prospects',
      'source' => 'non-db',
      'vname' => 'LBL_PROSPECT',
    ),
    'preferred_language' => 
    array (
      'name' => 'preferred_language',
      'type' => 'enum',
      'vname' => 'LBL_PREFERRED_LANGUAGE',
      'options' => 'available_language_dom',
    ),
    'mkto_sync' => 
    array (
      'name' => 'mkto_sync',
      'vname' => 'LBL_MKTO_SYNC',
      'type' => 'bool',
      'default' => '0',
      'comment' => 'Should the Lead be synced to Marketo',
      'massupdate' => true,
      'audited' => true,
      'duplicate_merge' => true,
      'reportable' => true,
      'importable' => 'true',
    ),
    'mkto_id' => 
    array (
      'name' => 'mkto_id',
      'vname' => 'LBL_MKTO_ID',
      'comment' => 'Associated Marketo Lead ID',
      'type' => 'int',
      'default' => NULL,
      'audited' => true,
      'mass_update' => false,
      'duplicate_merge' => true,
      'reportable' => true,
      'importable' => 'false',
    ),
    'mkto_lead_score' => 
    array (
      'name' => 'mkto_lead_score',
      'vname' => 'LBL_MKTO_LEAD_SCORE',
      'comment' => NULL,
      'type' => 'int',
      'default_value' => NULL,
      'audited' => true,
      'mass_update' => false,
      'duplicate_merge' => true,
      'reportable' => true,
      'importable' => 'true',
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
      'relationship' => 'leads_following',
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
      'relationship' => 'leads_favorite',
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
      'relationship' => 'leads_tags',
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
      'relationship' => 'leads_locked_fields',
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
      'relationship' => 'leads_assigned_user',
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
      'relationship' => 'leads_team',
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
      'relationship' => 'leads_team_count_relationship',
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
      'relationship' => 'leads_teams',
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
    'email' => 
    array (
      'name' => 'email',
      'type' => 'email',
      'query_type' => 'default',
      'source' => 'non-db',
      'operator' => 'subquery',
      'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
      'db_field' => 
      array (
        0 => 'id',
      ),
      'vname' => 'LBL_EMAIL_ADDRESS',
      'studio' => 
      array (
        'visible' => true,
        'searchview' => true,
        'editview' => true,
        'editField' => true,
      ),
      'duplicate_on_record_copy' => 'always',
      'len' => 100,
      'link' => 'email_addresses_primary',
      'rname' => 'email_address',
      'module' => 'EmailAddresses',
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.83,
      ),
      'audited' => true,
      'pii' => true,
    ),
    'email1' => 
    array (
      'name' => 'email1',
      'vname' => 'LBL_EMAIL_ADDRESS',
      'type' => 'varchar',
      'function' => 
      array (
        'name' => 'getEmailAddressWidget',
        'returns' => 'html',
      ),
      'source' => 'non-db',
      'link' => 'email_addresses_primary',
      'rname' => 'email_address',
      'group' => 'email1',
      'merge_filter' => 'enabled',
      'module' => 'EmailAddresses',
      'studio' => false,
      'duplicate_on_record_copy' => 'always',
      'importable' => false,
    ),
    'email2' => 
    array (
      'name' => 'email2',
      'vname' => 'LBL_OTHER_EMAIL_ADDRESS',
      'type' => 'varchar',
      'function' => 
      array (
        'name' => 'getEmailAddressWidget',
        'returns' => 'html',
      ),
      'source' => 'non-db',
      'group' => 'email2',
      'merge_filter' => 'enabled',
      'studio' => 'false',
      'duplicate_on_record_copy' => 'always',
      'importable' => false,
      'workflow' => false,
    ),
    'invalid_email' => 
    array (
      'name' => 'invalid_email',
      'vname' => 'LBL_INVALID_EMAIL',
      'source' => 'non-db',
      'type' => 'bool',
      'link' => 'email_addresses_primary',
      'rname' => 'invalid_email',
      'massupdate' => false,
      'studio' => 'false',
      'duplicate_on_record_copy' => 'always',
    ),
    'email_opt_out' => 
    array (
      'name' => 'email_opt_out',
      'vname' => 'LBL_EMAIL_OPT_OUT',
      'source' => 'non-db',
      'type' => 'bool',
      'link' => 'email_addresses_primary',
      'rname' => 'opt_out',
      'massupdate' => false,
      'studio' => 'false',
      'duplicate_on_record_copy' => 'always',
    ),
    'email_addresses_primary' => 
    array (
      'name' => 'email_addresses_primary',
      'type' => 'link',
      'relationship' => 'leads_email_addresses_primary',
      'source' => 'non-db',
      'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
      'duplicate_merge' => 'disabled',
      'primary_only' => true,
    ),
    'email_addresses' => 
    array (
      'name' => 'email_addresses',
      'type' => 'link',
      'relationship' => 'leads_email_addresses',
      'source' => 'non-db',
      'vname' => 'LBL_EMAIL_ADDRESSES',
      'reportable' => false,
      'unified_search' => true,
      'rel_fields' => 
      array (
        'primary_address' => 
        array (
          'type' => 'bool',
        ),
      ),
    ),
    'email_addresses_non_primary' => 
    array (
      'name' => 'email_addresses_non_primary',
      'type' => 'varchar',
      'source' => 'non-db',
      'vname' => 'LBL_EMAIL_NON_PRIMARY',
      'studio' => false,
      'reportable' => false,
      'massupdate' => false,
    ),
    'coop_broker' => 
    array (
      'name' => 'coop_broker',
      'vname' => 'LBL_COOP_BROKER',
      'ext2' => 'Contacts',
      'module' => 'Contacts',
      'id_name' => 'related_contact_id',
      'type' => 'relate',
      'len' => 255,
      'size' => '20',
      'rname' => 'name',
      'source' => 'non-db',
      'unified_search' => false,
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => 1,
      'merge_filter' => 'disabled',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'no_default' => false,
      'massupdate' => false,
      'calculated' => false,
      'reportable' => true,
      'required' => false,
      'dependency' => '',
      'importable' => 'true',
      'comments' => '',
      'help' => '',
      'audited' => false,
    ),
    'related_contact_id' => 
    array (
      'name' => 'related_contact_id',
      'vname' => 'LBL_COOP_BROKER_CONTACT_ID',
      'type' => 'id',
      'len' => 36,
      'size' => '20',
      'massupdate' => false,
      'no_default' => false,
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => 1,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'audited' => false,
      'reportable' => false,
      'required' => false,
    ),
    'buy_sell_home' => 
    array (
      'name' => 'buy_sell_home',
      'vname' => 'LBL_BUY_SELL_HOME',
      'type' => 'enum',
      'options' => 'yes_no_list',
      'len' => 100,
      'audited' => true,
      'comment' => '',
      'merge_filter' => 'enabled',
    ),
    'dri_workflows' => 
    array (
      'name' => 'dri_workflows',
      'vname' => 'LBL_DRI_WORKFLOWS',
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'left',
      'bean_name' => 'DRI_Workflow',
      'relationship' => 'dri_workflow_leads',
      'module' => 'DRI_Workflows',
    ),
    'dri_workflow_template_id' => 
    array (
      'name' => 'dri_workflow_template_id',
      'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
      'required' => false,
      'reportable' => false,
      'audited' => true,
      'importable' => 'true',
      'massupdate' => true,
      'type' => 'enum',
      'dbType' => 'id',
      'processes' => true,
      'function' => 
      array (
        'include' => 'custom/modules/Leads/CustomerJourney/EnumManager.php',
        'name' => 
        array (
          0 => '\\Leads\\CustomerJourney\\EnumManager',
          1 => 'listEnumValues',
        ),
      ),
      'duplicate_on_record_copy' => 'no',
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
      'reportable' => false,
      'source' => 'non-db',
      'type' => 'link',
      'side' => 'right',
      'bean_name' => 'DRI_Workflow_Template',
      'relationship' => 'lead_dri_workflow_templates',
      'module' => 'DRI_Workflow_Templates',
    ),
    'community' => 
    array (
      'name' => 'community',
      'vname' => 'LBL_COMMUNITY',
      'type' => 'multienum',
      'isMultiSelect' => true,
      'dependency' => '',
      'visibility_grid' => '',
      'options' => 'community_list',
      'len' => 100,
      'audited' => false,
      'comment' => '',
      'merge_filter' => 'enabled',
      'reportable' => true,
      'unified_search' => false,
      'importable' => true,
    ),
    'leads_mv_attachments' => 
    array (
      'name' => 'leads_mv_attachments',
      'type' => 'link',
      'relationship' => 'leads_mv_attachments',
      'module' => 'mv_Attachments',
      'bean_name' => 'mv_Attachments',
      'source' => 'non-db',
      'vname' => 'LBL_MV_ATTACHMENTS',
    ),
    'contacts_leads_1' => 
    array (
      'name' => 'contacts_leads_1',
      'type' => 'link',
      'relationship' => 'contacts_leads_1',
      'source' => 'non-db',
      'module' => 'Contacts',
      'bean_name' => 'Contact',
      'side' => 'right',
      'vname' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE',
      'id_name' => 'contacts_leads_1contacts_ida',
      'link-type' => 'one',
    ),
    'contacts_leads_1_name' => 
    array (
      'name' => 'contacts_leads_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
      'save' => true,
      'id_name' => 'contacts_leads_1contacts_ida',
      'link' => 'contacts_leads_1',
      'table' => 'contacts',
      'module' => 'Contacts',
      'rname' => 'full_name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'contacts_leads_1contacts_ida' => 
    array (
      'name' => 'contacts_leads_1contacts_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE_ID',
      'id_name' => 'contacts_leads_1contacts_ida',
      'link' => 'contacts_leads_1',
      'table' => 'contacts',
      'module' => 'Contacts',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'attachedcontacts_c' => 
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
    ),
    'dp_doucumentspackets_leads_1' => 
    array (
      'name' => 'dp_doucumentspackets_leads_1',
      'type' => 'link',
      'relationship' => 'dp_doucumentspackets_leads_1',
      'source' => 'non-db',
      'module' => 'DP_DoucumentsPackets',
      'bean_name' => 'DP_DoucumentsPackets',
      'vname' => 'LBL_DP_DOUCUMENTSPACKETS_LEADS_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
      'id_name' => 'dp_doucumentspackets_leads_1dp_doucumentspackets_ida',
    ),
    'attacheddocuments_c' => 
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
    ),
    'lead_rating' => 
    array (
      'name' => 'lead_rating',
      'vname' => 'LBL_LEAD_RATING',
      'type' => 'enum',
      'options' => 'lead_rating_list',
      'len' => 100,
      'audited' => true,
      'comment' => '',
      'merge_filter' => 'disabled',
      'default' => 'Be Back',
      'massupdate' => true,
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'calculated' => false,
      'dependency' => false,
    ),
    'document_id_c' => 
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
    ),
    'contact_id_c' => 
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
    ),
    'subscriber_hash' => 
    array (
      'name' => 'subscriber_hash',
      'vname' => 'LBL_SUBSCRIBER_HASH',
      'type' => 'varchar',
      'len' => '200',
      'readonly' => true,
      'comment' => 'The MD5 hash of the lowercase version of the list member’s email address.',
    ),
    'last_sync_date' => 
    array (
      'name' => 'last_sync_date',
      'vname' => 'LBL_LAST_SYNC_DATE',
      'type' => 'datetime',
      'readonly' => true,
      'comment' => 'last sync date',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'idx_leads_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'idx_leads_date_modfied',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'deleted' => 
    array (
      'name' => 'idx_leads_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'idx_leads_date_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_entered',
      ),
    ),
    'name_del' => 
    array (
      'name' => 'idx_leads_name_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
        1 => 'deleted',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_leads_last_first',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'last_name',
        1 => 'first_name',
        2 => 'deleted',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_leads_first_last',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
        2 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_lead_acct_name_first',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'account_name',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_lead_del_stat',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'last_name',
        1 => 'status',
        2 => 'deleted',
        3 => 'first_name',
      ),
    ),
    4 => 
    array (
      'name' => 'idx_lead_opp_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunity_id',
        1 => 'deleted',
      ),
    ),
    5 => 
    array (
      'name' => 'idx_leads_acct_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'account_id',
        1 => 'deleted',
      ),
    ),
    6 => 
    array (
      'name' => 'idx_lead_assigned',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
      ),
    ),
    7 => 
    array (
      'name' => 'idx_lead_contact',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contact_id',
      ),
    ),
    8 => 
    array (
      'name' => 'idx_reports_to',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'reports_to_id',
      ),
    ),
    9 => 
    array (
      'name' => 'idx_lead_phone_work',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'phone_work',
      ),
    ),
    10 => 
    array (
      'name' => 'idx_lead_mkto_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkto_id',
      ),
    ),
    'assigned_user_id' => 
    array (
      'name' => 'idx_leads_assigned_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
        1 => 'deleted',
      ),
    ),
    'team_set_leads' => 
    array (
      'name' => 'idx_leads_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
        1 => 'deleted',
      ),
    ),
    'acl_team_set_leads' => 
    array (
      'name' => 'idx_leads_acl_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acl_team_set_id',
        1 => 'deleted',
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
  'relationships' => 
  array (
    'leads_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'leads_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'lead_activities' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
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
      'relationship_role_column_value' => 'Leads',
    ),
    'lead_prospect' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'lead_id',
      'relationship_type' => 'one-to-one',
    ),
    'lead_direct_reports' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'reports_to_id',
      'relationship_type' => 'one-to-many',
    ),
    'lead_tasks' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Leads',
    ),
    'lead_notes' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Leads',
    ),
    'lead_meetings' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Leads',
    ),
    'lead_calls' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Leads',
    ),
    'lead_emails' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Leads',
    ),
    'lead_campaign_log' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'CampaignLog',
      'rhs_table' => 'campaign_log',
      'rhs_key' => 'target_id',
      'relationship_type' => 'one-to-many',
    ),
    'leads_following' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'subscriptions',
      'join_key_lhs' => 'created_by',
      'join_key_rhs' => 'parent_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Leads',
      'user_field' => 'created_by',
    ),
    'leads_favorite' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'sugarfavorites',
      'join_key_lhs' => 'modified_user_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Leads',
      'user_field' => 'created_by',
    ),
    'leads_tags' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Tags',
      'rhs_table' => 'tags',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tag_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'tag_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Leads',
      'dynamic_subpanel' => true,
    ),
    'leads_locked_fields' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'pmse_BpmProcessDefinition',
      'rhs_table' => 'pmse_bpm_process_definition',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'locked_field_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'pd_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Leads',
    ),
    'leads_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'leads_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'leads_teams' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'leads_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'leads_email_addresses' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailAddresses',
      'rhs_table' => 'email_addresses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'email_addr_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'email_address_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Leads',
    ),
    'leads_email_addresses_primary' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailAddresses',
      'rhs_table' => 'email_addresses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'email_addr_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'email_address_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'Leads',
      'primary_flag_column' => 'primary_address',
    ),
    'lead_dri_workflow_templates' => 
    array (
      'relationship_type' => 'one-to-many',
      'lhs_key' => 'id',
      'lhs_module' => 'DRI_Workflow_Templates',
      'lhs_table' => 'dri_workflow_templates',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'dri_workflow_template_id',
    ),
    'leads_mv_attachments' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'mv_Attachments',
      'rhs_table' => 'mv_attachments',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Leads',
    ),
  ),
  'duplicate_check' => 
  array (
    'enabled' => true,
    'FilterDuplicateCheck' => 
    array (
      'filter_template' => 
      array (
        0 => 
        array (
          '$and' => 
          array (
            0 => 
            array (
              '$or' => 
              array (
                0 => 
                array (
                  'status' => 
                  array (
                    '$not_equals' => 'Converted',
                  ),
                ),
                1 => 
                array (
                  'status' => 
                  array (
                    '$is_null' => '',
                  ),
                ),
              ),
            ),
            1 => 
            array (
              '$or' => 
              array (
                0 => 
                array (
                  '$and' => 
                  array (
                    0 => 
                    array (
                      'account_name' => 
                      array (
                        '$starts' => '$account_name',
                      ),
                    ),
                    1 => 
                    array (
                      'first_name' => 
                      array (
                        '$starts' => '$first_name',
                      ),
                    ),
                    2 => 
                    array (
                      'last_name' => 
                      array (
                        '$starts' => '$last_name',
                      ),
                    ),
                    3 => 
                    array (
                      'dnb_principal_id' => 
                      array (
                        '$equals' => '$dnb_principal_id',
                      ),
                    ),
                  ),
                ),
                1 => 
                array (
                  'phone_work' => 
                  array (
                    '$equals' => '$phone_work',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'ranking_fields' => 
      array (
        0 => 
        array (
          'in_field_name' => 'phone_work',
          'dupe_field_name' => 'phone_work',
        ),
        1 => 
        array (
          'in_field_name' => 'account_name',
          'dupe_field_name' => 'account_name',
        ),
        2 => 
        array (
          'in_field_name' => 'last_name',
          'dupe_field_name' => 'last_name',
        ),
        3 => 
        array (
          'in_field_name' => 'first_name',
          'dupe_field_name' => 'first_name',
        ),
      ),
    ),
  ),
  'optimistic_locking' => true,
  'name_format_map' => 
  array (
    'f' => 'first_name',
    'l' => 'last_name',
    's' => 'salutation',
    't' => 'title',
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'acls' => 
  array (
    'SugarACLLockedFields' => true,
    'SugarACLEmailAddress' => true,
    'SugarACLStatic' => true,
  ),
  'templates' => 
  array (
    'person' => 'person',
    'basic' => 'basic',
    'following' => 'following',
    'favorite' => 'favorite',
    'taggable' => 'taggable',
    'lockable_fields' => 'lockable_fields',
    'assignable' => 'assignable',
    'team_security' => 'team_security',
    'email_address' => 'email_address',
    'customer_journey_parent' => 'customer_journey_parent',
  ),
  'favorites' => true,
  'custom_fields' => false,
  'has_pii_fields' => true,
  'related_calc_fields' => 
  array (
  ),
);