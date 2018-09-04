<?php
// WARNING: The contents of this file are auto-generated.


$parentObject = "m_CAMS";
$parentModule = "m_CAMS";
$parentTable = "m_cams";

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
  'view' => 'subpanel-for-m_cams-m_cams_mv_attachments',
);



$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_CONTACTS',
  'context' => 
  array (
    'link' => 'contacts',
  ),
);




    /*
     * We are hiding the Documents subpanel. If in future it is required this subpanel
     * We just need to uncomment this code.
     *
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DOCUMENTS',
  'context' => 
  array (
    'link' => 'documents',
  ),
);
*/



    
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_DP_DOUCUMENTSPACKETS_M_CAMS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'context' => 
  array (
    'link' => 'dp_doucumentspackets_m_cams',
  ),
);

// created: 2017-09-27 14:55:02
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_CALLS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_calls',
  ),
);

$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_CALLS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_calls',
  ),
);

// created: 2017-09-27 14:55:03
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_EMAILS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_emails',
  ),
);

$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_EMAILS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_emails',
  ),
);

// created: 2017-09-27 14:55:02
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_MEETINGS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_meetings',
  ),
);

$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_MEETINGS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_meetings',
  ),
);

// created: 2017-09-27 14:55:02
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_NOTES_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_notes',
  ),
);

$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_NOTES_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_notes',
  ),
);

// created: 2017-09-27 14:55:03
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_TASKS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_tasks',
  ),
);

$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_TASKS_SUBPANEL_TITLE',
  'context' => 
  array (
    'link' => 'm_cams_activities_1_tasks',
  ),
);

    /*
     * We are hiding the Signed Copy subpanel. If in future it is required to show Signed copies in seperate subpanel
     * We just need to uncomment this code.
     *
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_SIGNED_COPIES',
  'context' =>
  array (
    'link' => 'signed_copies',
  ),
);

$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'signed_copies',
  'view' => 'signed_copies',
);

*/


//auto-generated file DO NOT EDIT
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'm_cams_activities_1_notes',
  'view' => 'subpanel-for-m_cams-m_cams_activities_1_notes',
);


//auto-generated file DO NOT EDIT
$viewdefs['m_CAMS']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'm_cams_mv_attachments',
  'view' => 'subpanel-for-m_cams-m_cams_mv_attachments',
);
