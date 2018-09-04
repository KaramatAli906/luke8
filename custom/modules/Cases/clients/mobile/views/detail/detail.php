<?php
$viewdefs['Cases'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
      array (
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
              0 => 'status',
              1 => 
              array (
                'name' => 'case_number',
                'displayParams' => 
                array (
                  'required' => false,
                  'wireless_detail_only' => true,
                ),
              ),
              2 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
              3 => 
              array (
                'name' => 'warranty_exp_date_c',
                'label' => 'LBL_WARRANTY_EXP_DATE',
              ),
              4 => 
              array (
                'name' => 'customer_name_c',
                'label' => 'LBL_CUSTOMER_NAME',
              ),
              5 => 
              array (
                'name' => 'customer_phone_c',
                'label' => 'LBL_CUSTOMER_PHONE',
              ),
              6 => 
              array (
                'name' => 'customer_email_c',
                'label' => 'LBL_CUSTOMER_EMAIL',
              ),
              7 => 
              array (
                'name' => 'customer_address_street_c',
                'studio' => 'visible',
                'label' => 'LBL_CUSTOMER_ADDRESS_STREET',
              ),
              8 => 
              array (
                'name' => 'request_completed_date_c',
                'label' => 'LBL_REQUEST_COMPLETED_DATE',
              ),
              9 => 
              array (
                'name' => 'opportunities_cases_1_name',
                'label' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
              ),
              10 => 'account_name',
              11 => 
              array (
                'name' => 'consultation_date_c',
                'label' => 'LBL_CONSULTATION_DATE',
              ),
              12 => 
              array (
                'name' => 'service_call_duration_c',
                'label' => 'LBL_SERVICE_CALL_DURATION',
              ),
              13 => 
              array (
                'name' => 'service_date_c',
                'label' => 'LBL_SERVICE_DATE',
              ),
              14 => 
              array (
                'name' => 'community_c',
                'label' => 'LBL_COMMUNITY',
              ),
              15 => 
              array (
                'name' => 'job_code_c',
                'label' => 'LBL_JOB_CODE',
              ),
              16 => 
              array (
                'name' => 'date_modified',
                'comment' => 'Date record last modified',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              17 => 
              array (
                'name' => 'days_to_complete_c',
                'label' => 'LBL_DAYS_TO_COMPLETE',
              ),
              18 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'total_cost_c',
                'label' => 'LBL_TOTAL_COST',
              ),
              19 => 'assigned_user_name',
              20 => 'team_name',
              21 => 'description',
              22 => 
              array (
                'name' => 'tag',
                'studio' => 
                array (
                  'portal' => false,
                  'base' => 
                  array (
                    'popuplist' => false,
                  ),
                  'mobile' => 
                  array (
                    'wirelesseditview' => true,
                    'wirelessdetailview' => true,
                  ),
                ),
                'label' => 'LBL_TAGS',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
