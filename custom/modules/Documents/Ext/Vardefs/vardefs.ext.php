<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Documents/Ext/Vardefs/cam_name.php


    $dictionary['Document']['fields']['m_cam_name'] = array(
        'required' => false,
        'source' => 'non-db',
        'name' => 'm_cam_name',
        'vname' => 'LBL_M_CAM_NAME',
        'type' => 'relate',
        'rname' => 'name',
        'id_name' => 'm_cam_id',
        'join_name' => 'm_cams',
        'link' => 'm_cams',
        'table' => 'm_cams',
        'isnull' => 'true',
        'module' => 'm_CAMS',
    );

    $dictionary['Document']['fields']['m_cam_id'] = array(
        'name' => 'm_cam_id',
        'rname' => 'id',
        'vname' => 'LBL_M_CAM_ID',
        'type' => 'id',
        'table' => 'm_cams',
        'isnull' => 'true',
        'module' => 'm_CAMS',
        'dbType' => 'id',
        'reportable' => false,
        'massupdate' => false,
        'duplicate_merge' => 'disabled',
    );

    $dictionary['Document']['fields']['m_cams'] = array(
        'name' => 'm_cams',
        'type' => 'link',
        'relationship' => 'documents_m_cams',
        'module' => 'm_CAMS',
        'bean_name' => 'm_CAMS',
        'source' => 'non-db',
        'vname' => 'LBL_M_CAM',
    );


?>
<?php
// Merged from custom/Extension/modules/Documents/Ext/Vardefs/dp_doucumentspackets_documents_Documents.php

// created: 2015-09-18 04:41:52
$dictionary["Document"]["fields"]["dp_doucumentspackets_documents"] = array (
  'name' => 'dp_doucumentspackets_documents',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_documents',
  'source' => 'non-db',
  'module' => 'DP_DoucumentsPackets',
  'bean_name' => 'DP_DoucumentsPackets',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_DOCUMENTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'id_name' => 'dp_doucumentspackets_documentsdp_doucumentspackets_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Documents/Ext/Vardefs/sugarfield_gdrive_id.php

$dictionary["Document"]["fields"]["gdrive_id"] = array(
    'name' => 'gdrive_id',
    'vname' => 'LBL_GDRIVE_ID',
    'type' => 'varchar',
    'len' => 300,
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
?>
