<?php
// created: 2018-02-06 21:26:20
$dictionary["m_cams_activities_1_meetings"] = array (
  'relationships' => 
  array (
    'm_cams_activities_1_meetings' => 
    array (
      'lhs_module' => 'm_CAMS',
      'lhs_table' => 'm_cams',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'relationship_role_column_value' => 'm_CAMS',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);