<?php
// WARNING: The contents of this file are auto-generated.


$parentObject = "Task";
$parentModule = "Tasks";
$parentTable = "tasks";

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
$viewdefs['Tasks']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'notes',
  'view' => 'subpanel-for-tasks-notes',
);


//auto-generated file DO NOT EDIT
$viewdefs['Tasks']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'opportunities',
  'view' => 'subpanel-for-tasks-opportunities',
);
