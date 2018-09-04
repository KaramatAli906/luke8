<?php
// created: 2018-06-11 08:59:55
$dictionary["mvh_colorselection_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mvh_colorselection_opportunities' => 
    array (
      'lhs_module' => 'mvh_Colorselection',
      'lhs_table' => 'mvh_colorselection',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mvh_colorselection_opportunities_c',
      'join_key_lhs' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
      'join_key_rhs' => 'mvh_colorselection_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'mvh_colorselection_opportunities_c',
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
    'mvh_colorselection_opportunitiesmvh_colorselection_ida' => 
    array (
      'name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
      'type' => 'id',
    ),
    'mvh_colorselection_opportunitiesopportunities_idb' => 
    array (
      'name' => 'mvh_colorselection_opportunitiesopportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mvh_colorselection_opportunities_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mvh_colorselection_opportunities_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mvh_colorselection_opportunities_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mvh_colorselection_opportunitiesopportunities_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mvh_colorselection_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mvh_colorselection_opportunitiesopportunities_idb',
      ),
    ),
  ),
);