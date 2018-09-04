<?php
$module_name = 'mv_SrvReq';
$viewdefs[$module_name] = 
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
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
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
              /*0 => 
              array (
                'name' => 'cases_mv_srvreq_1_name',
              ),*/
              1 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
              ),
              2 => 
              array (
                'name' => 'category',
                'label' => 'LBL_CATEGORY',
              ),
              3 => 
              array (
                'name' => 'root_cause',
                'label' => 'LBL_ROOT_CAUSE',
              ),
              4 => 
              array (
                'name' => 'responsible_party',
                'studio' => 'visible',
                'label' => 'LBL_RESPONSIBLE_PARTY',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
            ),
          ),
          /*2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'collapsed',
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
                'name' => 'tag',
              ),
              3 => 'assigned_user_name',
              4 => 
              array (
                'name' => 'team_name',
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
