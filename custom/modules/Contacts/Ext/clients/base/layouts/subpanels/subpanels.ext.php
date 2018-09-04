<?php
// WARNING: The contents of this file are auto-generated.



$viewdefs['Contacts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'override_paneltop_view' => 'readonly-panel-top',
  'label' => 'LBL_ACCOUNT_SUBPANEL',
  'context' =>
  array (
    'link' => 'cstm_accounts',
      ),
);


$parentObject = "Contact";
$parentModule = "Contacts";
$parentTable = "contacts";

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
  'view' => 'subpanel-for-contacts-contacts_mv_attachments',
);


// created: 2017-10-02 11:16:42
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE',
  'context' => 
  array (
    'link' => 'contacts_leads_1',
  ),
);

// created: 2015-09-17 06:49:12
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_CONTACTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_contacts',
  ),
);

$viewdefs['Contacts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_CONTACTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_contacts',
  ),
);

$viewdefs['Contacts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_CONTACTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_contacts',
  ),
);

$viewdefs['Contacts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_CONTACTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_contacts',
  ),
);

//auto-generated file DO NOT EDIT
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'cases',
  'view' => 'subpanel-for-contacts-cases',
);


//auto-generated file DO NOT EDIT
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'contacts_mv_attachments',
  'view' => 'subpanel-for-contacts-contacts_mv_attachments',
);


//auto-generated file DO NOT EDIT
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'documents',
  'view' => 'subpanel-for-contacts-documents',
);


//auto-generated file DO NOT EDIT
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'leads',
  'view' => 'subpanel-for-contacts-leads',
);


//auto-generated file DO NOT EDIT
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'notes',
  'view' => 'subpanel-for-contacts-notes',
);


//auto-generated file DO NOT EDIT
$viewdefs['Contacts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'opportunities',
  'view' => 'subpanel-for-contacts-opportunities',
);
