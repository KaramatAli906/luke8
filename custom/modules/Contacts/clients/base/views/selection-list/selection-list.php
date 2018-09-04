<?php
// created: 2018-06-05 05:03:43
$viewdefs['Contacts']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'title',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'CREATED_BY',
          'link' => true,
          'default' => false,
        ),
        4 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
        5 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => false,
        ),
        6 => 
        array (
          'name' => 'my_favorite',
          'label' => 'LBL_FAVORITE',
          'enabled' => true,
          'default' => false,
        ),
        7 => 
        array (
          'name' => 'phone_fax',
          'label' => 'LBL_FAX_PHONE',
          'enabled' => true,
          'default' => false,
        ),
        8 => 
        array (
          'name' => 'first_name',
          'label' => 'LBL_FIRST_NAME',
          'enabled' => true,
          'default' => false,
        ),
        9 => 
        array (
          'name' => 'phone_home',
          'label' => 'LBL_HOME_PHONE',
          'enabled' => true,
          'default' => false,
        ),
        10 => 
        array (
          'name' => 'last_name',
          'label' => 'LBL_LAST_NAME',
          'enabled' => true,
          'default' => false,
        ),
        11 => 
        array (
          'name' => 'phone_mobile',
          'label' => 'LBL_MOBILE_PHONE',
          'enabled' => true,
          'default' => false,
        ),
        12 => 
        array (
          'name' => 'modified_by_name',
          'label' => 'LBL_MODIFIED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'MODIFIED_USER_ID',
          'link' => true,
          'default' => false,
        ),
        13 => 
        array (
          'name' => 'phone_work',
          'enabled' => true,
          'default' => false,
        ),
        14 => 
        array (
          'name' => 'phone_other',
          'label' => 'LBL_OTHER_PHONE',
          'enabled' => true,
          'default' => false,
        ),
        15 => 
        array (
          'name' => 'salutation',
          'label' => 'LBL_SALUTATION',
          'enabled' => true,
          'default' => false,
        ),
        16 => 
        array (
          'name' => 'subcontractor_email_group_c',
          'label' => 'LBL_SUBCONTRACTOR_EMAIL_GROUP_C',
          'enabled' => true,
          'default' => false,
        ),
        17 => 
        array (
          'name' => 'tag',
          'label' => 'LBL_TAGS',
          'enabled' => true,
          'default' => false,
        ),
        18 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAMS',
          'enabled' => true,
          'id' => 'TEAM_ID',
          'link' => true,
          'sortable' => false,
          'default' => false,
        ),
        19 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => false,
        ),
        20 => 
        array (
          'name' => 'name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);