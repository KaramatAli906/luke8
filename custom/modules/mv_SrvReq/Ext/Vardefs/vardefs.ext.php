<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/mv_SrvReq/Ext/Vardefs/attachments.php


$parentObject = "mv_SrvReq";
$parentModule = "mv_SrvReq";
$parentTable = "mv_srvreq";

$childObject = "mv_Attachments";
$childModule = "mv_Attachments";
$childTable = "mv_attachments";

$relationship = strtolower($parentModule . "_" . $childModule);
$label = strtoupper("LBL_$childModule");
$label2 = strtoupper("LBL_$parentModule");


$GLOBALS["dictionary"][$parentObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'module' => $childModule,
  'bean_name' => $childObject,
  'source' => 'non-db',
  'vname' => $label,
];

$GLOBALS["dictionary"][$parentObject]['relationships'][$relationship] = [
  'lhs_module' => $parentModule,
  'lhs_table' => $parentTable,
  'lhs_key' => 'id',
  'rhs_module' => $childModule,
  'rhs_table' => $childTable,
  'rhs_key' => 'parent_id',
  'relationship_type' => 'one-to-many',
  'relationship_role_column' => 'parent_type',
  'relationship_role_column_value' => $parentModule,
];

// Note, you'll also need a relationship file on the Child Module.
// Name this file - "{child}.php" and save it on the parent

// You'll also need a subpanel
// It'll be at /Parent/Ext/c/b/l/subpanels/file.php






?>
<?php
// Merged from custom/Extension/modules/mv_SrvReq/Ext/Vardefs/cases_mv_srvreq_1_mv_SrvReq.php

// created: 2017-09-19 11:48:09
$dictionary["mv_SrvReq"]["fields"]["cases_mv_srvreq_1"] = array (
  'name' => 'cases_mv_srvreq_1',
  'type' => 'link',
  'relationship' => 'cases_mv_srvreq_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_CASES_MV_SRVREQ_1_FROM_MV_SRVREQ_TITLE',
  'id_name' => 'cases_mv_srvreq_1cases_ida',
  'link-type' => 'one',
);
$dictionary["mv_SrvReq"]["fields"]["cases_mv_srvreq_1_name"] = array (
  'name' => 'cases_mv_srvreq_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_MV_SRVREQ_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_mv_srvreq_1cases_ida',
  'link' => 'cases_mv_srvreq_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
  'importable' => 'true',
);
$dictionary["mv_SrvReq"]["fields"]["cases_mv_srvreq_1cases_ida"] = array (
  'name' => 'cases_mv_srvreq_1cases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_MV_SRVREQ_1_FROM_MV_SRVREQ_TITLE_ID',
  'id_name' => 'cases_mv_srvreq_1cases_ida',
  'link' => 'cases_mv_srvreq_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
  'importable' => 'true',
);

?>
<?php
// Merged from custom/Extension/modules/mv_SrvReq/Ext/Vardefs/sugarfield_name.php

 // created: 2017-09-19 12:16:00
$dictionary['mv_SrvReq']['fields']['name']['len']='255';
$dictionary['mv_SrvReq']['fields']['name']['audited']=false;
$dictionary['mv_SrvReq']['fields']['name']['massupdate']=false;
$dictionary['mv_SrvReq']['fields']['name']['importable']='false';
$dictionary['mv_SrvReq']['fields']['name']['duplicate_merge']='disabled';
$dictionary['mv_SrvReq']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['mv_SrvReq']['fields']['name']['merge_filter']='disabled';
$dictionary['mv_SrvReq']['fields']['name']['unified_search']=false;
$dictionary['mv_SrvReq']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['mv_SrvReq']['fields']['name']['calculated']='true';
$dictionary['mv_SrvReq']['fields']['name']['formula']='concat(related($cases_mv_srvreq_1,"name")," - ",$category)';
$dictionary['mv_SrvReq']['fields']['name']['enforced']=true;

 
?>
<?php
// Merged from custom/Extension/modules/mv_SrvReq/Ext/Vardefs/sugarfield_description.php

 // created: 2017-12-09 05:16:28
$dictionary['mv_SrvReq']['fields']['description']['unified_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/mv_SrvReq/Ext/Vardefs/sugarfield_category.php

 // created: 2017-12-09 06:02:41
$dictionary['mv_SrvReq']['fields']['category']['default']='';
$dictionary['mv_SrvReq']['fields']['category']['len']=NULL;
$dictionary['mv_SrvReq']['fields']['category']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/mv_SrvReq/Ext/Vardefs/sugarfield_root_cause.php

 // created: 2017-12-14 23:00:36
$dictionary['mv_SrvReq']['fields']['root_cause']['default']='To Be Determined';

 
?>
