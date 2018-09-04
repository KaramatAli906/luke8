<?php
 // created: 2018-06-11 08:59:55
$layout_defs["mvh_Colorselection"]["subpanel_setup"]['mvh_colorselection_m_cams'] = array (
  'order' => 100,
  'module' => 'm_CAMS',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MVH_COLORSELECTION_M_CAMS_FROM_M_CAMS_TITLE',
  'get_subpanel_data' => 'mvh_colorselection_m_cams',
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
