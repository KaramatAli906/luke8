<?php
// WARNING: The contents of this file are auto-generated.


$parentObject = "Case";
$parentModule = "Cases";
$parentTable = "Cases";

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
$viewdefs[$parentModule]['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'm_cams_mv_attachments',
  'view' => 'subpanel-for-cases-cases_mv_attachments',
);


// created: 2017-09-19 11:48:09
$viewdefs['Cases']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_CASES_MV_SRVREQ_1_FROM_MV_SRVREQ_TITLE',
  'context' => 
  array (
    'link' => 'cases_mv_srvreq_1',
  ),
);

    
$viewdefs['Cases']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_CASES_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_cases',
  ),
);

    /*
     * We are hiding the Signed Copy subpanel. If in future it is required to show Signed copies in seperate subpanel
     * We just need to uncomment this code.
     *
    $viewdefs['Cases']['base']['layout']['subpanels']['components'][] = array(
        'layout' => 'subpanel',
        'label' => 'LBL_SIGNED_COPIES',
        'context' =>
        array(
            'link' => 'signed_copies',
        ),
    );

    $viewdefs['Cases']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array(
        'link' => 'signed_copies',
        'view' => 'signed_copies',
    );
    */
    
    

//auto-generated file DO NOT EDIT
$viewdefs['Cases']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'cases_mv_attachments',
  'view' => 'subpanel-for-cases-cases_mv_attachments',
);


//auto-generated file DO NOT EDIT
$viewdefs['Cases']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'cases_mv_srvreq_1',
  'view' => 'subpanel-for-cases-cases_mv_srvreq_1',
);


//auto-generated file DO NOT EDIT
$viewdefs['Cases']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'notes',
  'view' => 'subpanel-for-cases-notes',
);
