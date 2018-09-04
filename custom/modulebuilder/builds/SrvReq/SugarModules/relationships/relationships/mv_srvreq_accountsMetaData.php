<?php
// created: 2017-09-19 11:46:58
$dictionary["mv_srvreq_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mv_srvreq_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'mv_SrvReq',
      'rhs_table' => 'mv_srvreq',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mv_srvreq_accounts_c',
      'join_key_lhs' => 'mv_srvreq_accountsaccounts_ida',
      'join_key_rhs' => 'mv_srvreq_accountsmv_srvreq_idb',
    ),
  ),
  'table' => 'mv_srvreq_accounts_c',
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
    'mv_srvreq_accountsaccounts_ida' => 
    array (
      'name' => 'mv_srvreq_accountsaccounts_ida',
      'type' => 'id',
    ),
    'mv_srvreq_accountsmv_srvreq_idb' => 
    array (
      'name' => 'mv_srvreq_accountsmv_srvreq_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mv_srvreq_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mv_srvreq_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mv_srvreq_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mv_srvreq_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mv_srvreq_accountsmv_srvreq_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mv_srvreq_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mv_srvreq_accountsmv_srvreq_idb',
      ),
    ),
  ),
);