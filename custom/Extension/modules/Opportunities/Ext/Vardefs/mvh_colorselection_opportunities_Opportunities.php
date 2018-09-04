<?php
// created: 2018-06-11 08:59:55
$dictionary["Opportunity"]["fields"]["mvh_colorselection_opportunities"] = array (
  'name' => 'mvh_colorselection_opportunities',
  'type' => 'link',
  'relationship' => 'mvh_colorselection_opportunities',
  'source' => 'non-db',
  'module' => 'mvh_Colorselection',
  'bean_name' => 'mvh_Colorselection',
  'side' => 'right',
  'vname' => 'LBL_MVH_COLORSELECTION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["mvh_colorselection_opportunities_name"] = array (
  'name' => 'mvh_colorselection_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_OPPORTUNITIES_FROM_MVH_COLORSELECTION_TITLE',
  'save' => true,
  'id_name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'link' => 'mvh_colorselection_opportunities',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["mvh_colorselection_opportunitiesmvh_colorselection_ida"] = array (
  'name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'link' => 'mvh_colorselection_opportunities',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
