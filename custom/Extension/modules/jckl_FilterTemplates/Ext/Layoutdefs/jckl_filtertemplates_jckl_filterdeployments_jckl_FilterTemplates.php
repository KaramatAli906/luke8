<?php
 // created: 2017-05-06 15:26:05
$layout_defs["jckl_FilterTemplates"]["subpanel_setup"]['jckl_filtertemplates_jckl_filterdeployments'] = array (
  'order' => 200,
  'module' => 'jckl_FilterDeployments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_JCKL_FILTERTEMPLATES_JCKL_FILTERDEPLOYMENTS_FROM_JCKL_FILTERDEPLOYMENTS_TITLE',
  'get_subpanel_data' => 'jckl_filtertemplates_jckl_filterdeployments',
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
