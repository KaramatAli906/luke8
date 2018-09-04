<?php
// created: 2018-07-08 20:15:23
$viewdefs['mv_Attachments']['base']['view']['subpanel-for-contacts-contacts_mv_attachments'] = array (
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
          'name' => 'document_name',
          'label' => 'LBL_LIST_DOCUMENT_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'uploadfile',
          'type' => 'cstm-file',
          'label' => 'LBL_FILE_UPLOAD',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'category_id',
          'label' => 'LBL_SF_CATEGORY',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'signed_copy',
          'label' => 'LBL_SIGNED_COPY',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
          'width' => 'xxsmall',
        ),
        4 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
          'width' => 'xsmall',
        ),
        5 => 
        array (
          'name' => 'active_date',
          'label' => 'LBL_DOC_ACTIVE_DATE',
          'enabled' => true,
          'default' => true,
          'width' => 'xsmall',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);