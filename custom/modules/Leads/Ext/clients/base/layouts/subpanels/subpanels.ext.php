<?php
// WARNING: The contents of this file are auto-generated.


$parentObject = "Lead";
$parentModule = "Leads";
$parentTable = "leads";

$childObject = "mv_Attachments";
$childModule = "mv_Attachments";
$childTable = "mv_attachments";

$relationship = strtolower($parentModule . "_" . $childModule);


$viewdefs[$parentModule]['base']['layout']['subpanels']['components'][] = array(
  'layout' => 'subpanel',
  'label' => 'LBL_SUBPANEL_FROM_LEADS',
  'context' => array(
    'link' => $relationship,
  ),
);
$viewdefs[$parentModule]['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'm_cams_mv_attachments',
  'view' => 'subpanel-for-leads-leads_mv_attachments',
);

// created: 2015-10-08 17:42:25
$viewdefs['Leads']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_LEADS_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_leads_1',
  ),
);

    /*
     * We are hiding the Signed Copy subpanel. If in future it is required to show Signed copies in seperate subpanel
     * We just need to uncomment this code.
     *
    $viewdefs['Leads']['base']['layout']['subpanels']['components'][] = array(
        'layout' => 'subpanel',
        'label' => 'LBL_SIGNED_COPIES',
        'context' =>
        array(
            'link' => 'signed_copies',
        ),
    );

    $viewdefs['Leads']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array(
        'link' => 'signed_copies',
        'view' => 'signed_copies',
    );
    */
    
    

//auto-generated file DO NOT EDIT
$viewdefs['Leads']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'leads_mv_attachments',
  'view' => 'subpanel-for-leads-leads_mv_attachments',
);


//auto-generated file DO NOT EDIT
$viewdefs['Leads']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'notes',
  'view' => 'subpanel-for-leads-notes',
);


//auto-generated file DO NOT EDIT
$viewdefs['Leads']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'opportunity',
  'view' => 'subpanel-for-leads-opportunity',
);
