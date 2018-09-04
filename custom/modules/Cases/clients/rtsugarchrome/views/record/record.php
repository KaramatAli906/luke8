<?php
$viewdefs['Cases'] = 
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
            'label' => 'LBL_PANEL_HEADER',
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
              1 => 
              array (
                'name' => 'name',
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
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => array('name' => 'status'),
              /*1 => 
              array (
                'name' => 'case_number',
                'readonly' => true,
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
              ),*/
              3 => 
              array (
                'name' => 'request_completed_date_c',
                'label' => 'LBL_REQUEST_COMPLETED_DATE',
              ),
              /*4 => 
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
                ),
              ),
              5 => 
              array (
                'name' => 'warranty_exp_date_c',
                'label' => 'LBL_WARRANTY_EXP_DATE',
              ),
              6 => 
              array (
                'name' => 'assign_warranty_c',
                'label' => 'LBL_ASSIGN_WARRANTY',
              ),
              7 => 
              array (
                'name' => 'days_to_complete_c',
                'label' => 'LBL_DAYS_TO_COMPLETE',
              ),*/
            ),
          ),
          /*2 => 
          array (
            'newTab' => false,
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
                'name' => 'opportunities_cases_1_name',
              ),
              1 => 'account_name',
              2 => 
              array (
                'name' => 'customer_name_c',
                'label' => 'LBL_CUSTOMER_NAME',
              ),
              3 => 
              array (
                'name' => 'customer_phone_c',
                'label' => 'LBL_CUSTOMER_PHONE',
              ),
              4 => 
              array (
                'name' => 'customer_email_c',
                'label' => 'LBL_CUSTOMER_EMAIL',
              ),
              5 => 
              array (
                'name' => 'customer_address_c',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_CUSTOMER_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'customer_address_street_c',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_CUSTOMER_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'customer_address_city_c',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_CUSTOMER_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'customer_address_state_c',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_CUSTOMER_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'customer_address_postalcode_c',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_CUSTOMER_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'customer_address_country_c',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_CUSTOMER_ADDRESS_COUNTRY',
                  ),
                ),
              ),
            ),
          ),*/
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'consultation_date_c',
                'label' => 'LBL_CONSULTATION_DATE',
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'service_call_duration_c',
                'label' => 'LBL_SERVICE_CALL_DURATION',
              ),
              3 => 
              array (
              ),
              4 => 
              array (
                'name' => 'service_date_c',
                'label' => 'LBL_SERVICE_DATE',
              ),
              5 => 
              array (
              ),
            ),
          ),
          /*4 => 
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
              0 => 
              array (
                'name' => 'community_c',
                'label' => 'LBL_COMMUNITY',
              ),
              1 => 
              array (
                'name' => 'job_code_c',
                'label' => 'LBL_JOB_CODE',
              ),
              2 => 
              array (
                'name' => 'elevation_c',
                'label' => 'LBL_ELEVATION',
              ),
              3 => 
              array (
                'name' => 'floor_plan_c',
                'label' => 'LBL_FLOOR_PLAN',
              ),
              4 => 
              array (
                'name' => 'garage_type_c',
                'label' => 'LBL_GARAGE_TYPE',
              ),
              5 => 
              array (
                'name' => 'square_feet_c',
                'label' => 'LBL_SQUARE_FEET',
              ),
            ),
          ),
          5 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'type',
              1 => 
              array (
                'name' => 'tag',
              ),
              2 => 
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
              3 => 
              array (
                'name' => 'team_name',
              ),
              4 => 
              array (
                'name' => 'description',
                'nl2br' => true,
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'service_cons_reminder_c',
                'label' => 'LBL_SERVICE_CONS_REMINDER',
              ),
              6 => 
              array (
                'name' => 'service_call_reminder_c',
                'label' => 'LBL_SERVICE_CALL_REMINDER',
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
