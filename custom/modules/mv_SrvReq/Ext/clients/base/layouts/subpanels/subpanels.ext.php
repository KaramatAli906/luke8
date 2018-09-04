<?php
// WARNING: The contents of this file are auto-generated.


$parentObject = "mv_SrvReq";
$parentModule = "mv_SrvReq";
$parentTable = "mv_srvreq";

$childObject = "mv_Attachments";
$childModule = "mv_Attachments";
$childTable = "mv_attachments";

$relationship = strtolower($parentModule . "_" . $childModule);


$viewdefs[$parentModule]['base']['layout']['subpanels']['components'][] = array(
  'layout' => 'subpanel',
  'label' => 'LBL_SUBPANEL_FROM_ATTACHMENTS',
  'context' => array(
    'link' => $relationship,
  ),
);


//auto-generated file DO NOT EDIT
$viewdefs['mv_SrvReq']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'mv_srvreq_mv_attachments',
  'view' => 'subpanel-for-mv_srvreq-mv_srvreq_mv_attachments',
);
