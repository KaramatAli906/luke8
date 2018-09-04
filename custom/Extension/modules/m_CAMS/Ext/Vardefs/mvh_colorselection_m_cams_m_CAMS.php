<?php
// created: 2018-06-11 08:59:55
$dictionary["m_CAMS"]["fields"]["mvh_colorselection_m_cams"] = array (
  'name' => 'mvh_colorselection_m_cams',
  'type' => 'link',
  'relationship' => 'mvh_colorselection_m_cams',
  'source' => 'non-db',
  'module' => 'mvh_Colorselection',
  'bean_name' => 'mvh_Colorselection',
  'side' => 'right',
  'vname' => 'LBL_MVH_COLORSELECTION_M_CAMS_FROM_M_CAMS_TITLE',
  'id_name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'link-type' => 'one',
);
$dictionary["m_CAMS"]["fields"]["mvh_colorselection_m_cams_name"] = array (
  'name' => 'mvh_colorselection_m_cams_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_M_CAMS_FROM_MVH_COLORSELECTION_TITLE',
  'save' => true,
  'id_name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'link' => 'mvh_colorselection_m_cams',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'name',
);
$dictionary["m_CAMS"]["fields"]["mvh_colorselection_m_camsmvh_colorselection_ida"] = array (
  'name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_M_CAMS_FROM_M_CAMS_TITLE_ID',
  'id_name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
  'link' => 'mvh_colorselection_m_cams',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
