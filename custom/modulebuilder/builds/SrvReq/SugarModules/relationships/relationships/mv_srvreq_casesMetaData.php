<?php
// created: 2017-09-19 11:33:08
$dictionary["mv_srvreq_cases"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mv_srvreq_cases' => 
    array (
      'lhs_module' => 'mv_SrvReq',
      'lhs_table' => 'mv_srvreq',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mv_srvreq_cases_c',
      'join_key_lhs' => 'mv_srvreq_casesmv_srvreq_ida',
      'join_key_rhs' => 'mv_srvreq_casescases_idb',
    ),
  ),
  'table' => 'mv_srvreq_cases_c',
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
    'mv_srvreq_casesmv_srvreq_ida' => 
    array (
      'name' => 'mv_srvreq_casesmv_srvreq_ida',
      'type' => 'id',
    ),
    'mv_srvreq_casescases_idb' => 
    array (
      'name' => 'mv_srvreq_casescases_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mv_srvreq_cases_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mv_srvreq_cases_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mv_srvreq_casesmv_srvreq_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mv_srvreq_cases_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mv_srvreq_casescases_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mv_srvreq_cases_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mv_srvreq_casescases_idb',
      ),
    ),
  ),
);