<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Notes/Ext/Vardefs/attachments.php



$parentObject = "Note";
$parentModule = "Notes";
$parentTable = "notes";

$childObject = "mv_Attachments";
$childModule = "mv_Attachments";
$childTable = "mv_attachments";

$relationship = strtolower($parentModule . "_" . $childModule);
$label = strtoupper("LBL_$childModule");
$label2 = strtoupper("LBL_$parentModule");


$GLOBALS["dictionary"][$parentObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'module' => $childModule,
  'bean_name' => $childObject,
  'source' => 'non-db',
  'vname' => $label,
];

$GLOBALS["dictionary"][$parentObject]['relationships'][$relationship] = [
  'lhs_module' => $parentModule,
  'lhs_table' => $parentTable,
  'lhs_key' => 'id',
  'rhs_module' => $childModule,
  'rhs_table' => $childTable,
  'rhs_key' => 'parent_id',
  'relationship_type' => 'one-to-many',
  'relationship_role_column' => 'parent_type',
  'relationship_role_column_value' => $parentModule,
];

// Note, you'll also need a relationship file on the Child Module.
// Name this file - "{child}.php" and save it on the parent

// You'll also need a subpanel
// It'll be at /Parent/Ext/c/b/l/subpanels/file.php






?>
<?php
// Merged from custom/Extension/modules/Notes/Ext/Vardefs/m_cams_activities_1_notes_Notes.php

// created: 2018-02-06 21:27:15
$dictionary["Note"]["fields"]["m_cams_activities_1_notes"] = array (
  'name' => 'm_cams_activities_1_notes',
  'type' => 'link',
  'relationship' => 'm_cams_activities_1_notes',
  'source' => 'non-db',
  'module' => 'm_CAMS',
  'bean_name' => 'm_CAMS',
  'vname' => 'LBL_M_CAMS_ACTIVITIES_1_NOTES_FROM_M_CAMS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Notes/Ext/Vardefs/smartsheet_note_id.php


$dictionary["Note"]["fields"]['smartshseet_note_id'] = 
    array (
      'required' => false,
      'name' => 'smartshseet_note_id',
      'vname' => 'LBL_SMART_SHEET_NOTES_ID',
      'type' => 'id',
      'dbType' => 'varchar',
      'studio' => true,
    );

?>
