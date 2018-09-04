<?php
$viewdefs['Accounts'] = 
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
              0 => array('name' => 'account_type'),
              1 => 
              array (
                'name' => 'sub_status_c',
              ),
              2 => 
              array (
                'name' => 'phone_office',
              ),
              3 => 
              array (
                'name' => 'email',
              ),
              /*3 => 
              array (
                'name' => 'phone_alternate',
                'label' => 'LBL_PHONE_ALT',
              ),
              4 => 
              array (
                'name' => 'website',
              ),
              5 => 
              array (
                'name' => 'phone_fax',
              ),
              6 => 
              array (
                'name' => 'parent_name',
              ),*/
              7 => 
              array (
                'name' => 'team_name',
              ),
              /*8 => 
              array (
                'name' => 'shipping_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_SHIPPING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'shipping_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'shipping_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'shipping_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'shipping_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'shipping_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                  ),
                  5 => 
                  array (
                    'name' => 'copy',
                    'label' => 'NTC_COPY_BILLING_ADDRESS',
                    'type' => 'copy',
                    'mapping' => 
                    array (
                      'billing_address_street' => 'shipping_address_street',
                      'billing_address_city' => 'shipping_address_city',
                      'billing_address_state' => 'shipping_address_state',
                      'billing_address_postalcode' => 'shipping_address_postalcode',
                      'billing_address_country' => 'shipping_address_country',
                    ),
                  ),
                ),
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),*/
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'market',
                'label' => 'LBL_MARKET',
              ),
              1 => 
              array (
                'name' => 'tin',
                'studio' => true,
                'label' => 'LBL_TIN',
              ),
              2 => 
              array (
                'name' => 'ccb_num',
                'studio' => true,
                'label' => 'LBL_CCB_NUM',
              ),
              3 => 
              array (
                'name' => 'ccb_expiration_date',
                'label' => 'LBL_CCB_EXPIRATION_DATE',
              ),
              4 => 
              array (
                'name' => 'insurance_exp',
                'label' => 'LBL_INSURANCE_EXP',
              ),
              5 => 
              array (
                'name' => 'workers_comp_exp_c',
                'label' => 'LBL_WORKERS_COMP_EXP',
              ),
            ),
          ),
          /*3 => 
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
              0 => 'assigned_user_name',
              1 => 
              array (
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
              4 => 
              array (
                'name' => 'tag',
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
