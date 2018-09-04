<?php
// created: 2018-05-05 20:49:14
$subpanel_layout['list_fields'] = array (
  'document_name' => 
  array (
    'name' => 'document_name',
    'vname' => 'LBL_LIST_DOCUMENT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'uploadfile' => 
  array (
    'type' => 'file',
    'vname' => 'LBL_FILE_UPLOAD',
    'width' => 10,
    'default' => true,
  ),
  'category_id' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_SF_CATEGORY',
    'width' => 10,
    'default' => true,
  ),
  'signed_copy' => 
  array (
    'type' => 'bool',
    'default' => true,
    'readonly' => true,
    'vname' => 'LBL_SIGNED_COPY',
    'width' => 10,
  ),
  'dp_doucumentspackets_mv_attachments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'vname' => 'LBL_DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
    'id' => 'DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1DP_DOUCUMENTSPACKETS_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'DP_DoucumentsPackets',
    'target_record_key' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => 10,
    'default' => true,
  ),
);