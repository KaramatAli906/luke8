<?php
$viewdefs['Tasks'] = 
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
                'readonly' => true,
              ),
              1 => 'name',
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
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'parent_name',
              ),
              /*1 => 
              array (
              ),
              2 => 'date_start',*/
              3 => array('name' => 'status'),
              //4 => 'date_due',
              5 => 'priority',
              6 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              7 => 
              array (
                'name' => 'contact_name',
                'span' => 6,
              ),
              /*8 => 
              array (
                'name' => 'is_realtor_deficiency_c',
                'label' => 'LBL_IS_REALTOR_DEFICIENCY',
                'span' => 6,
              ),
              9 => 
              array (
                'name' => 'dri_workflow_sort_order',
                'label' => 'LBL_DRI_WORKFLOW_SORT_ORDER',
              ),
              10 => 
              array (
                'name' => 'is_production_deficiency_c',
                'label' => 'LBL_IS_PRODUCTION_DEFICIENCY',
              ),*/
              11 => 
              array (
                'name' => 'team_name',
              ),
              //12 => 'assigned_user_name',
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'remind_me_c',
                'label' => 'LBL_REMIND_ME',
              ),
              /*1 => 
              array (
                'name' => 'duration_till_remind_c',
                'label' => 'LBL_DURATION_TILL_REMIND',
              ),*/
            ),
          ),
          /*3 => 
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
              1 => 
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
              2 => 
              array (
                'name' => 'customer_journey_type',
              ),
              3 => 
              array (
                'name' => 'customer_journey_points',
              ),
              4 => 
              array (
                'name' => 'is_customer_journey_activity',
                'label' => 'LBL_IS_CUSTOMER_JOURNEY_ACTIVITY',
              ),
              5 => 
              array (
                'name' => 'tag',
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
