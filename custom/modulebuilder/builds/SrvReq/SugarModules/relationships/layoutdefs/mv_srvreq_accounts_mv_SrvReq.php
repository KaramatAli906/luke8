<?php
 // created: 2017-09-19 11:33:08
$layout_defs["mv_SrvReq"]["subpanel_setup"]['mv_srvreq_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MV_SRVREQ_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'mv_srvreq_accounts',
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
