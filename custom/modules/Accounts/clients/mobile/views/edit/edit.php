<?php
$viewdefs['Accounts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
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
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 
              array (
                'name' => 'account_type',
                'comment' => 'The Company is of this type',
                'label' => 'LBL_TYPE',
              ),
              2 => 
              array (
                'name' => 'sub_status_c',
                'label' => 'LBL_SUB_STATUS',
              ),
              3 => 
              array (
                'name' => 'account_trade',
                'label' => 'LBL_ACCOUNT_TRADE',
              ),
              4 => 
              array (
                'name' => 'phone_alternate',
                'comment' => 'An alternate phone number',
                'label' => 'LBL_PHONE_ALT',
              ),
              5 => 'phone_office',
              6 => 
              array (
                'name' => 'website',
                'displayParams' => 
                array (
                  'type' => 'link',
                ),
              ),
              7 => 
              array (
                'name' => 'phone_fax',
                'comment' => 'The fax phone number of this company',
                'label' => 'LBL_FAX',
              ),
              8 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_MEMBER_OF',
              ),
              9 => 'team_name',
              10 => 
              array (
                'name' => 'shipping_address_street',
                'comment' => 'The street address used for for shipping purposes',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
              ),
              11 => 
              array (
                'name' => 'shipping_address_city',
                'comment' => 'The city used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
              ),
              12 => 
              array (
                'name' => 'shipping_address_state',
                'comment' => 'The state used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
              ),
              13 => 
              array (
                'name' => 'shipping_address_postalcode',
                'comment' => 'The zip code used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
              ),
              14 => 
              array (
                'name' => 'shipping_address_country',
                'comment' => 'The country used for the shipping address',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
              ),
              15 => 'assigned_user_name',
              16 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              17 => 
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
              18 => 
              array (
                'name' => 'market',
                'label' => 'LBL_MARKET',
              ),
              19 => 
              array (
                'name' => 'ccb_num',
                'studio' => true,
                'label' => 'LBL_CCB_NUM',
              ),
              20 => 
              array (
                'name' => 'ccb_expiration_date',
                'label' => 'LBL_CCB_EXPIRATION_DATE',
              ),
              21 => 
              array (
                'name' => 'tin',
                'studio' => true,
                'label' => 'LBL_TIN',
              ),
              22 => 
              array (
                'name' => 'insurance_exp',
                'label' => 'LBL_INSURANCE_EXP',
              ),
              23 => 
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
              24 => 
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
            ),
          ),
        ),
      ),
    ),
  ),
);
