<?php
// WARNING: The contents of this file are auto-generated.


$parentObject = "Account";
$parentModule = "Accounts";
$parentTable = "accounts";

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
  'view' => 'subpanel-for-accounts-accounts_mv_attachments',
);



$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array(
    'layout' => 'subpanel',
    'override_paneltop_view' => 'readonly-panel-top',
    'label' => 'LBL_CAM_SUBAPNEL',
    'context' =>
    array(
        'link' => 'm_cams',
    ),
);
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array(
    'link' => 'm_cams',
    'view' => 'subpanel-for-accounts-cam',
);


// created: 2015-09-17 04:57:13
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_accounts',
  ),
);

$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_accounts',
  ),
);

$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_accounts',
  ),
);

$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_accounts',
  ),
);

$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_accounts',
  ),
);

$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_accounts',
  ),
);

$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_accounts',
  ),
);


    /*
     * We are hiding the Signed Copy subpanel. If in future it is required to show Signed copies in seperate subpanel
     * We just need to uncomment this code.
     *
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_SIGNED_COPIES',
  'context' =>
  array (
    'link' => 'signed_copies',
  ),
);

$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'signed_copies',
  'view' => 'signed_copies',
);*/
    
    


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'accounts_mv_attachments',
  'view' => 'subpanel-for-accounts-accounts_mv_attachments',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'calls',
  'view' => 'subpanel-for-accounts-calls',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'cases',
  'view' => 'subpanel-for-accounts-cases',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'contacts',
  'view' => 'subpanel-for-accounts-contacts',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'documents',
  'view' => 'subpanel-for-accounts-documents',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'leads',
  'view' => 'subpanel-for-accounts-leads',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'notes',
  'view' => 'subpanel-for-accounts-notes',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'opportunities',
  'view' => 'subpanel-for-accounts-opportunities',
);
