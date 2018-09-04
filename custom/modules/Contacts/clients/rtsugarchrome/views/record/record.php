<?php
$viewdefs['Contacts'] = 
array (
  'rtsugarchrome' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
           0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
              ),
              1 => 
              array (
                'name' => 'full_name',
                'label' => 'LBL_NAME',
                'dismiss_label' => true,
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
            
          1 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => array('name' => 'account_name'),
              1 => array('name' => 'title'),
              2 => array ('name' => 'phone_mobile',),
              /*3 => 
              array (
                'name' => 'phone_home',
                'comment' => 'Home phone number of the contact',
                'label' => 'LBL_HOME_PHONE',
              ),*/
              4 => array('name' => 'email'),
              5 => 
              array (
                'name' => 'phone_work',
              ),
              8 => 
              array (
                'name' => 'description',
                'span' => 12,
              )
              /*6 => 
              array (
                'name' => 'phone_other',
                'comment' => 'Other phone number for the contact',
                'label' => 'LBL_OTHER_PHONE',
              ),
              7 => array('name' => 'phone_fax'),
              8 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
              10 => 
              array (
                'name' => 'subcontractor_email_group_c',
                'label' => 'LBL_SUBCONTRACTOR_EMAIL_GROUP_C',
              ),
              11 => 
              array (
              ),
              12 => 
              array (
                'name' => 'report_to_name',
              ),
              13 => 
              array (
                'name' => 'team_name',
              ),
              14 => 
              array (
                'name' => 'campaign_name',
                'span' => 6,
              ),
              15 => 
              array (
                'name' => 'do_not_call',
                'span' => 6,
              ),*/
            ),
          ),
          /*2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
                'span' => 12,
              ),
            ),
          ),*/
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
