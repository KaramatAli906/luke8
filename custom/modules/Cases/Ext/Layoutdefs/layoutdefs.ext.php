<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/cases_mv_srvreq_1_Cases.php

 // created: 2017-09-19 11:48:09
$layout_defs["Cases"]["subpanel_setup"]['cases_mv_srvreq_1'] = array (
  'order' => 100,
  'module' => 'mv_SrvReq',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_MV_SRVREQ_1_FROM_MV_SRVREQ_TITLE',
  'get_subpanel_data' => 'cases_mv_srvreq_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/_overrideCase_subpanel_cases_mv_srvreq_1.php

//auto-generated file DO NOT EDIT
$layout_defs['Cases']['subpanel_setup']['cases_mv_srvreq_1']['override_subpanel_name'] = 'Case_subpanel_cases_mv_srvreq_1';

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/_overrideCase_subpanel_notes.php

//auto-generated file DO NOT EDIT
$layout_defs['Cases']['subpanel_setup']['notes']['override_subpanel_name'] = 'Case_subpanel_notes';

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/_overrideCase_subpanel_cases_mv_attachments.php

//auto-generated file DO NOT EDIT
$layout_defs['Cases']['subpanel_setup']['cases_mv_attachments']['override_subpanel_name'] = 'Case_subpanel_cases_mv_attachments';

?>
