<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_parent_name.php

 // created: 2017-09-29 13:02:17

$dictionary['mv_Attachments']['fields']['parent_name']['labelValue'] = 'Related To';
$dictionary['mv_Attachments']['fields']['parent_name']['dependency'] = '';
$dictionary['mv_Attachments']['fields']['parent_name']['required'] = false;
$dictionary['mv_Attachments']['fields']['parent_name']['source'] = 'non-db';
$dictionary['mv_Attachments']['fields']['parent_name']['name'] = 'parent_name';
$dictionary['mv_Attachments']['fields']['parent_name']['vname'] = 'LBL_FLEX_RELATE';
$dictionary['mv_Attachments']['fields']['parent_name']['type'] = 'parent';
$dictionary['mv_Attachments']['fields']['parent_name']['massupdate'] = false;
$dictionary['mv_Attachments']['fields']['parent_name']['no_default'] = false;
$dictionary['mv_Attachments']['fields']['parent_name']['comments'] = '';
$dictionary['mv_Attachments']['fields']['parent_name']['help'] = '';
$dictionary['mv_Attachments']['fields']['parent_name']['importable'] = 'true';
$dictionary['mv_Attachments']['fields']['parent_name']['duplicate_merge'] = 'enabled';
$dictionary['mv_Attachments']['fields']['parent_name']['duplicate_merge_dom_value'] = 1;
$dictionary['mv_Attachments']['fields']['parent_name']['audited'] = false;
$dictionary['mv_Attachments']['fields']['parent_name']['reportable'] = true;
$dictionary['mv_Attachments']['fields']['parent_name']['unified_search'] = false;
$dictionary['mv_Attachments']['fields']['parent_name']['merge_filter'] = 'disabled';
$dictionary['mv_Attachments']['fields']['parent_name']['calculated'] = false;
$dictionary['mv_Attachments']['fields']['parent_name']['len'] = 36;
$dictionary['mv_Attachments']['fields']['parent_name']['size'] = '20';
$dictionary['mv_Attachments']['fields']['parent_name']['options'] = 'parent_type_display';
$dictionary['mv_Attachments']['fields']['parent_name']['default'] = NULL;
$dictionary['mv_Attachments']['fields']['parent_name']['type_name'] = 'parent_type';
$dictionary['mv_Attachments']['fields']['parent_name']['id_name'] = 'parent_id';
$dictionary['mv_Attachments']['fields']['parent_name']['parent_type'] = 'record_type_display';
$dictionary['mv_Attachments']['fields']['parent_name']['studio'] = 'visible';

?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_parent_type.php

 // created: 2017-09-29 13:02:17
$dictionary['mv_Attachments']['fields']['parent_type']['required'] = false;
$dictionary['mv_Attachments']['fields']['parent_type']['name'] = 'parent_type';
$dictionary['mv_Attachments']['fields']['parent_type']['vname'] = 'LBL_PARENT_TYPE';
$dictionary['mv_Attachments']['fields']['parent_type']['type'] = 'parent_type';
$dictionary['mv_Attachments']['fields']['parent_type']['massupdate'] = false;
$dictionary['mv_Attachments']['fields']['parent_type']['no_default'] = false;
$dictionary['mv_Attachments']['fields']['parent_type']['comments'] = '';
$dictionary['mv_Attachments']['fields']['parent_type']['help'] = '';
$dictionary['mv_Attachments']['fields']['parent_type']['importable'] = 'true';
$dictionary['mv_Attachments']['fields']['parent_type']['duplicate_merge'] = 'enabled';
$dictionary['mv_Attachments']['fields']['parent_type']['duplicate_merge_dom_value'] = 1;
$dictionary['mv_Attachments']['fields']['parent_type']['audited'] = false;
$dictionary['mv_Attachments']['fields']['parent_type']['reportable'] = true;
$dictionary['mv_Attachments']['fields']['parent_type']['unified_search'] = false;
$dictionary['mv_Attachments']['fields']['parent_type']['merge_filter'] = 'disabled';
$dictionary['mv_Attachments']['fields']['parent_type']['calculated'] = false;
$dictionary['mv_Attachments']['fields']['parent_type']['len'] = 255;
$dictionary['mv_Attachments']['fields']['parent_type']['size'] = '20';
$dictionary['mv_Attachments']['fields']['parent_type']['dbType'] = 'varchar';
$dictionary['mv_Attachments']['fields']['parent_type']['studio'] = 'hidden';
$dictionary['mv_Attachments']['fields']['parent_type']['group'] = 'parent_name';

?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_parent_id.php

 // created: 2017-09-29 13:02:17
$dictionary['mv_Attachments']['fields']['parent_id']['required'] = false;
$dictionary['mv_Attachments']['fields']['parent_id']['name'] = 'parent_id';
$dictionary['mv_Attachments']['fields']['parent_id']['vname'] = 'LBL_PARENT_ID';
$dictionary['mv_Attachments']['fields']['parent_id']['type'] = 'id';
$dictionary['mv_Attachments']['fields']['parent_id']['massupdate'] = false;
$dictionary['mv_Attachments']['fields']['parent_id']['no_default'] = false;
$dictionary['mv_Attachments']['fields']['parent_id']['comments'] = '';
$dictionary['mv_Attachments']['fields']['parent_id']['help'] = '';
$dictionary['mv_Attachments']['fields']['parent_id']['importable'] = 'true';
$dictionary['mv_Attachments']['fields']['parent_id']['duplicate_merge'] = 'enabled';
$dictionary['mv_Attachments']['fields']['parent_id']['duplicate_merge_dom_value'] = 1;
$dictionary['mv_Attachments']['fields']['parent_id']['audited'] = false;
$dictionary['mv_Attachments']['fields']['parent_id']['reportable'] = true;
$dictionary['mv_Attachments']['fields']['parent_id']['unified_search'] = false;
$dictionary['mv_Attachments']['fields']['parent_id']['merge_filter'] = 'disabled';
$dictionary['mv_Attachments']['fields']['parent_id']['calculated'] = false;
$dictionary['mv_Attachments']['fields']['parent_id']['len'] = 36;
$dictionary['mv_Attachments']['fields']['parent_id']['size'] = '20';

?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/parents.php

$childObject = "mv_Attachments";
$childModule = "mv_Attachments";
$childTable = "mv_attachments";




$parentObject = "Account";
$parentModule = "Accounts";
$parentTable = "accounts";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "Case";
$parentModule = "Cases";
$parentTable = "Cases";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "Contact";
$parentModule = "Contacts";
$parentTable = "contacts";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "Lead";
$parentModule = "Leads";
$parentTable = "leads";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "m_CAMS";
$parentModule = "m_CAMS";
$parentTable = "m_cams";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "Meeting";
$parentModule = "Meetings";
$parentTable = "meetings";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "mv_SrvReq";
$parentModule = "mv_SrvReq";
$parentTable = "mv_srvreq";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "Note";
$parentModule = "Notes";
$parentTable = "notes";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "Opportunity";
$parentModule = "Opportunities";
$parentTable = "opportunities";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

$parentObject = "Task";
$parentModule = "Tasks";
$parentTable = "tasks";
$relationship = strtolower($parentModule . "_" . $childModule);
$label2 = strtoupper("LBL_$parentModule");

$GLOBALS["dictionary"][$childObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'source' => 'non-db',
  'vname' => $label2,
];

?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_file_ext.php

 // created: 2017-10-25 15:56:37
$dictionary['mv_Attachments']['fields']['file_ext']['len']='100';
$dictionary['mv_Attachments']['fields']['file_ext']['audited']=false;
$dictionary['mv_Attachments']['fields']['file_ext']['massupdate']=false;
$dictionary['mv_Attachments']['fields']['file_ext']['importable']='false';
$dictionary['mv_Attachments']['fields']['file_ext']['duplicate_merge']='disabled';
$dictionary['mv_Attachments']['fields']['file_ext']['duplicate_merge_dom_value']='0';
$dictionary['mv_Attachments']['fields']['file_ext']['merge_filter']='disabled';
$dictionary['mv_Attachments']['fields']['file_ext']['unified_search']=false;
$dictionary['mv_Attachments']['fields']['file_ext']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['mv_Attachments']['fields']['file_ext']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_file_name_c.php

 // created: 2017-10-25 15:57:30
$dictionary['mv_Attachments']['fields']['file_name_c']['duplicate_merge_dom_value']=0;
$dictionary['mv_Attachments']['fields']['file_name_c']['labelValue']='File Name';
$dictionary['mv_Attachments']['fields']['file_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['mv_Attachments']['fields']['file_name_c']['calculated']='true';
$dictionary['mv_Attachments']['fields']['file_name_c']['formula']='$filename';
$dictionary['mv_Attachments']['fields']['file_name_c']['enforced']='true';
$dictionary['mv_Attachments']['fields']['file_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_image.php

 // created: 2017-12-12 21:08:10
$dictionary['mv_Attachments']['fields']['image']['dependency']='contains($file_mime_type,"image")';
$dictionary['mv_Attachments']['fields']['image']['required']=false;
$dictionary['mv_Attachments']['fields']['image']['name']='image';
$dictionary['mv_Attachments']['fields']['image']['vname']='LBL_IMAGE';
$dictionary['mv_Attachments']['fields']['image']['type']='image';
$dictionary['mv_Attachments']['fields']['image']['massupdate']=false;
$dictionary['mv_Attachments']['fields']['image']['no_default']=false;
$dictionary['mv_Attachments']['fields']['image']['comments']='';
$dictionary['mv_Attachments']['fields']['image']['help']='';
$dictionary['mv_Attachments']['fields']['image']['importable']='true';
$dictionary['mv_Attachments']['fields']['image']['duplicate_merge']='enabled';
$dictionary['mv_Attachments']['fields']['image']['duplicate_merge_dom_value']=1;
$dictionary['mv_Attachments']['fields']['image']['audited']=false;
$dictionary['mv_Attachments']['fields']['image']['reportable']=true;
$dictionary['mv_Attachments']['fields']['image']['unified_search']=false;
$dictionary['mv_Attachments']['fields']['image']['merge_filter']='disabled';
$dictionary['mv_Attachments']['fields']['image']['calculated']=false;
$dictionary['mv_Attachments']['fields']['image']['len']=255;
$dictionary['mv_Attachments']['fields']['image']['size']='20';
$dictionary['mv_Attachments']['fields']['image']['studio']='visible';
$dictionary['mv_Attachments']['fields']['image']['dbType']='varchar';
$dictionary['mv_Attachments']['fields']['image']['width']='425';
$dictionary['mv_Attachments']['fields']['image']['readonly']=true;
$dictionary['mv_Attachments']['fields']['image']['border']='';
$dictionary['mv_Attachments']['fields']['image']['height']='';

 
?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_change_order_email_sent_c.php

 // created: 2018-01-16 11:03:16
$dictionary['mv_Attachments']['fields']['change_order_email_sent_c']['labelValue']='Change Order Email Sent';
$dictionary['mv_Attachments']['fields']['change_order_email_sent_c']['enforced']='';
$dictionary['mv_Attachments']['fields']['change_order_email_sent_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/signed_copy.php

$dictionary["mv_Attachments"]["fields"]["signed_copy"] = array (
      'name' => 'signed_copy',
      'vname' => 'LBL_SIGNED_COPY',
      'type' => 'bool',
      'default' => '0',
      'reportable' => true,
      'readonly' => true,   
    );


?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/dp_doucumentspackets_mv_attachments_1_mv_Attachments.php


// created: 2018-01-23 17:41:33
    $dictionary["mv_Attachments"]["fields"]["dp_doucumentspackets_mv_attachments_1"] = array(
        'name' => 'dp_doucumentspackets_mv_attachments_1',
        'type' => 'link',
        'relationship' => 'dp_doucumentspackets_mv_attachments_1',
        'source' => 'non-db',
        'module' => 'DP_DoucumentsPackets',
        'bean_name' => 'DP_DoucumentsPackets',
        'vname' => 'LBL_DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
        'id_name' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
        'readonly' => true,
    );
    $dictionary["mv_Attachments"]["fields"]["dp_doucumentspackets_mv_attachments_1_name"] = array(
        'name' => 'dp_doucumentspackets_mv_attachments_1_name',
        'type' => 'relate',
        'source' => 'non-db',
        'vname' => 'LBL_DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
        'save' => true,
        'id_name' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
        'link' => 'dp_doucumentspackets_mv_attachments_1',
        'table' => 'dp_doucumentspackets',
        'module' => 'DP_DoucumentsPackets',
        'rname' => 'name',
        'readonly' => true,
    );
    $dictionary["mv_Attachments"]["fields"]["dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida"] = array(
        'name' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
        'type' => 'id',
        'source' => 'non-db',
        'vname' => 'LBL_DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
        'id_name' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
        'link' => 'dp_doucumentspackets_mv_attachments_1',
        'table' => 'dp_doucumentspackets',
        'module' => 'DP_DoucumentsPackets',
        'rname' => 'id',
        'reportable' => false,
        'side' => 'left',
        'massupdate' => false,
        'duplicate_merge' => 'disabled',
        'hideacl' => true,
        'readonly' => true,
    );
    
?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/smartsheet_attachment_id.php


$dictionary["mv_Attachments"]["fields"]['smartsheet_attachment_id'] = 
    array (
      'required' => false,
      'name' => 'smartsheet_attachment_id',
      'vname' => 'LBL_SMART_SHEET_ATTACHMENT_ID',
      'type' => 'id',
      'dbType' => 'varchar',
      'studio' => true,
    );

?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/attachment_acl.php


$dictionary["mv_Attachments"]['acls']['SugarACLAttachment'] = true;
$dictionary['mv_Attachments']['visibility']['FilterAttachment'] = true;

?>
<?php
// Merged from custom/Extension/modules/mv_Attachments/Ext/Vardefs/sugarfield_category_id.php

 // created: 2018-07-26 16:53:34
$dictionary['mv_Attachments']['fields']['category_id']['audited']=false;
$dictionary['mv_Attachments']['fields']['category_id']['massupdate']=true;
$dictionary['mv_Attachments']['fields']['category_id']['options']='document_template_type_dom';
$dictionary['mv_Attachments']['fields']['category_id']['duplicate_merge']='enabled';
$dictionary['mv_Attachments']['fields']['category_id']['duplicate_merge_dom_value']='1';
$dictionary['mv_Attachments']['fields']['category_id']['merge_filter']='disabled';
$dictionary['mv_Attachments']['fields']['category_id']['reportable']=true;
$dictionary['mv_Attachments']['fields']['category_id']['unified_search']=false;
$dictionary['mv_Attachments']['fields']['category_id']['calculated']=false;
$dictionary['mv_Attachments']['fields']['category_id']['dependency']=false;
$dictionary['mv_Attachments']['fields']['category_id']['required']=true;

 
?>
