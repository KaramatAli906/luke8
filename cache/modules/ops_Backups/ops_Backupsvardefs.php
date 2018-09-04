<?php 
 $GLOBALS["dictionary"]["ops_Backups"]=array (
  'table' => 'ops_backups',
  'audited' => false,
  'activity_enabled' => false,
  'duplicate_merge' => true,
  'acls' => 
  array (
    'SugarACLAdminOnly' => true,
  ),
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
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'duplicate_on_record_copy' => 'always',
      'readonly' => true,
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
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
      'duplicate_on_record_copy' => 'always',
      'readonly' => true,
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
      'readonly' => true,
    ),
    'download_url' => 
    array (
      'required' => false,
      'name' => 'download_url',
      'vname' => 'LBL_DOWNLOAD_URL',
      'type' => 'download-link',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
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
      'len' => '1024',
      'size' => '20',
      'dbType' => 'varchar',
      'gen' => '',
      'link_target' => '_self',
      'readonly' => true,
    ),
    'expires_at' => 
    array (
      'required' => false,
      'name' => 'expires_at',
      'vname' => 'LBL_EXPIRES_AT',
      'type' => 'datetimecombo',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'readonly' => true,
    ),
    'download_link' => 
    array (
      'name' => 'redirect_url',
      'vname' => 'LBL_DOWNLOAD_URL',
      'type' => 'download-link',
      'source' => 'non-db',
      'sortable' => false,
      'readonly' => true,
    ),
  ),
  'relationships' => 
  array (
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'idx_ops_backups_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'idx_ops_backups_date_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_entered',
      ),
    ),
    'deleted' => 
    array (
      'name' => 'idx_ops_backups_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    'expires_at' => 
    array (
      'name' => 'idx_expires_at',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'expires_at',
      ),
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'custom_fields' => false,
  'has_pii_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);