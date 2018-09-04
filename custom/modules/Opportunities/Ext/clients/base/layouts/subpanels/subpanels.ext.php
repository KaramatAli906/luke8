<?php
// WARNING: The contents of this file are auto-generated.


$parentObject = "Opportunity";
$parentModule = "Opportunities";
$parentTable = "opportunities";

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
  'view' => 'subpanel-for-opportunities-opportunities_mv_attachments',
);

// created: 2015-10-01 14:45:37
$viewdefs['Opportunities']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_OPPORTUNITIES_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_opportunities_1',
  ),
);

// created: 2017-09-25 10:18:59
$viewdefs['Opportunities']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_OPPORTUNITIES_CASES_1_FROM_CASES_TITLE',
  'context' => 
  array (
    'link' => 'opportunities_cases_1',
  ),
);

    /*
     * We are hiding the Signed Copy subpanel. If in future it is required to show Signed copies in seperate subpanel
     * We just need to uncomment this code.
     *
    $viewdefs['Opportunities']['base']['layout']['subpanels']['components'][] = array(
        'layout' => 'subpanel',
        'label' => 'LBL_SIGNED_COPIES',
        'context' =>
        array(
            'link' => 'signed_copies',
        ),
    );

    $viewdefs['Opportunities']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array(
        'link' => 'signed_copies',
        'view' => 'signed_copies',
    );
    
     */
    
    

//auto-generated file DO NOT EDIT
$viewdefs['Opportunities']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'contacts',
  'view' => 'subpanel-for-opportunities-contacts',
);


//auto-generated file DO NOT EDIT
$viewdefs['Opportunities']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'documents',
  'view' => 'subpanel-for-opportunities-documents',
);


//auto-generated file DO NOT EDIT
$viewdefs['Opportunities']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'notes',
  'view' => 'subpanel-for-opportunities-notes',
);


//auto-generated file DO NOT EDIT
$viewdefs['Opportunities']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'opportunities_mv_attachments',
  'view' => 'subpanel-for-opportunities-opportunities_mv_attachments',
);
