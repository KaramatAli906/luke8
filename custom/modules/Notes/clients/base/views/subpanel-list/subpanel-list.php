<?php
// created: 2018-06-05 05:03:43
$viewdefs['Notes']['base']['view']['subpanel-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'filename',
          'type' => 'cstm-file',
          'label' => 'LBL_FILENAME',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_entered',
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);