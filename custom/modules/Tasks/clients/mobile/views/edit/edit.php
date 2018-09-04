<?php
// created: 2018-06-05 05:03:43
$viewdefs['Tasks']['mobile']['view']['edit'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'useTabs' => false,
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'LBL_PANEL_DEFAULT',
      'columns' => '1',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
        1 => 'priority',
        2 => 'status',
        3 => 'date_start',
        4 => 'date_due',
        5 => 'description',
        6 => 'contact_name',
        7 => 'parent_name',
        8 => 'assigned_user_name',
        9 => 'team_name',
        10 => 
        array (
          'name' => 'remind_me_c',
          'label' => 'LBL_REMIND_ME',
        ),
        11 => 
        array (
          'name' => 'duration_till_remind_c',
          'label' => 'LBL_DURATION_TILL_REMIND',
        ),
      ),
    ),
  ),
);