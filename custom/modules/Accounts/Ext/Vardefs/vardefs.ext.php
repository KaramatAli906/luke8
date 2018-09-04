<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_vip.php


$dictionary['Account']['fields']['vip']['name'] = 'vip';
$dictionary['Account']['fields']['vip']['vname'] = 'LBL_VIP';
$dictionary['Account']['fields']['vip']['type'] = 'bool';
$dictionary['Account']['fields']['vip']['default'] = '0';
$dictionary['Account']['fields']['vip']['comments'] = '';
$dictionary['Account']['fields']['vip']['audited'] = false;
$dictionary['Account']['fields']['vip']['reportable'] = true;
$dictionary['Account']['fields']['vip']['unified_search'] = false;
$dictionary['Account']['fields']['vip']['importable'] = true;

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_ccb_expiration_date.php


$dictionary['Account']['fields']['ccb_expiration_date']['name'] = 'ccb_expiration_date';
$dictionary['Account']['fields']['ccb_expiration_date']['vname'] = 'LBL_CCB_EXPIRATION_DATE';

$dictionary['Account']['fields']['ccb_expiration_date']['type'] = 'date';
$dictionary['Account']['fields']['ccb_expiration_date']['options'] = 'date_range_search_dom';


$dictionary['Account']['fields']['ccb_expiration_date']['full_text_search'] = ['enabled' => true,'searchable' => false];
$dictionary['Account']['fields']['ccb_expiration_date']['enable_range_search'] = true;
$dictionary['Account']['fields']['ccb_expiration_date']['duplicate_merge'] = 'enabled';
$dictionary['Account']['fields']['ccb_expiration_date']['duplicate_merge_dom_value'] = 1;
$dictionary['Account']['fields']['ccb_expiration_date']['merge_filter'] = 'disabled';

$dictionary['Account']['fields']['ccb_expiration_date']['importable'] = true;
$dictionary['Account']['fields']['ccb_expiration_date']['required'] = false;
$dictionary['Account']['fields']['ccb_expiration_date']['comments'] = '';
$dictionary['Account']['fields']['ccb_expiration_date']['massupdate'] = true;
$dictionary['Account']['fields']['ccb_expiration_date']['audited'] = true;
$dictionary['Account']['fields']['ccb_expiration_date']['reportable'] = true;
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/dri-customer-journey.php


VardefManager::addTemplate('Accounts', 'Account', 'customer_journey_parent', 'Account', true);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_market.php


$dictionary['Account']['fields']['market']['name'] = 'market';
$dictionary['Account']['fields']['market']['vname'] = 'LBL_MARKET';
$dictionary['Account']['fields']['market']['type'] = 'multienum';
$dictionary['Account']['fields']['market']['isMultiSelect'] = true;
$dictionary['Account']['fields']['market']['options'] = 'market_list';
$dictionary['Account']['fields']['market']['dependency'] = '';
$dictionary['Account']['fields']['market']['visibility_grid'] = '';
$dictionary['Account']['fields']['market']['len'] = 100;
$dictionary['Account']['fields']['market']['comments'] = '';
$dictionary['Account']['fields']['market']['merge_filter'] = 'enabled';
$dictionary['Account']['fields']['market']['audited'] = true;
$dictionary['Account']['fields']['market']['reportable'] = true;
$dictionary['Account']['fields']['market']['unified_search'] = false;
$dictionary['Account']['fields']['market']['importable'] = true;

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/attachments.php


$parentObject = "Account";
$parentModule = "Accounts";
$parentTable = "accounts";

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
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/attachedcontacts_c.php


$dictionary["Account"]["fields"]["attachedcontacts_c"] =  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'attachedcontacts_c',
    'vname' => 'LBL_ATTACHED_CONTACTS',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'contact_id_c',
    'ext2' => 'Contacts',
    'module' => 'Contacts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  );
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/dp_doucumentspackets_accounts_Accounts.php

// created: 2015-09-18 04:41:52
$dictionary["Account"]["fields"]["dp_doucumentspackets_accounts"] = array (
  'name' => 'dp_doucumentspackets_accounts',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_accounts',
  'source' => 'non-db',
  'module' => 'DP_DoucumentsPackets',
  'bean_name' => 'DP_DoucumentsPackets',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'id_name' => 'dp_doucumentspackets_accountsdp_doucumentspackets_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/attacheddocuments_c.php


$dictionary["Account"]["fields"]["attacheddocuments_c"] =  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'attacheddocuments_c',
    'vname' => 'LBL_ATTACHED_DOCUMENT',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'document_id_c',
    'ext2' => 'Documents',
    'module' => 'Documents',
    'rname' => 'document_name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  );
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/account_cam_link.php


$dictionary["Account"]["fields"]["m_cams"] =  array(
  'name' => 'm_cams',
  'type' => 'link',
  'relationship' => 'account_cams_relation',
  'source' => 'non-db',
  'module' => 'm_CAMS',
  'bean_name' => 'm_CAMS',
  'vname' => 'LBL_CAM_LINK',
);


?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/document_id_c.php

 
 $dictionary["Account"]["fields"]["document_id_c"] =  array (
    'required' => false,
    'name' => 'document_id_c',
    'vname' => 'LBL_ATTACHED_CONTACTS_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  );
 
 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/contact_id_c.php

 
 $dictionary["Account"]["fields"]["contact_id_c"] =  array (
    'required' => false,
    'name' => 'contact_id_c',
    'vname' => 'LBL_ATTACHED_CONTACTS_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  );
 
 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/signed_copies.php

 // created: 2018-03-10 05:09:15

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_insurance_exp.php

 // created: 2018-05-05 19:51:22
$dictionary['Account']['fields']['insurance_exp']['name']='insurance_exp';
$dictionary['Account']['fields']['insurance_exp']['vname']='LBL_INSURANCE_EXP';
$dictionary['Account']['fields']['insurance_exp']['type']='date';
$dictionary['Account']['fields']['insurance_exp']['options']='date_range_search_dom';
$dictionary['Account']['fields']['insurance_exp']['enable_range_search']='1';
$dictionary['Account']['fields']['insurance_exp']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['insurance_exp']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['insurance_exp']['merge_filter']='disabled';
$dictionary['Account']['fields']['insurance_exp']['importable']='true';
$dictionary['Account']['fields']['insurance_exp']['required']=false;
$dictionary['Account']['fields']['insurance_exp']['comments']='';
$dictionary['Account']['fields']['insurance_exp']['massupdate']=true;
$dictionary['Account']['fields']['insurance_exp']['audited']=true;
$dictionary['Account']['fields']['insurance_exp']['reportable']=true;
$dictionary['Account']['fields']['insurance_exp']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_workers_comp_exp_c.php

 // created: 2018-05-05 19:53:15
$dictionary['Account']['fields']['workers_comp_exp_c']['options']='date_range_search_dom';
$dictionary['Account']['fields']['workers_comp_exp_c']['labelValue']='Workers Comp Exp Date';
$dictionary['Account']['fields']['workers_comp_exp_c']['enforced']='';
$dictionary['Account']['fields']['workers_comp_exp_c']['dependency']='';
$dictionary['Account']['fields']['workers_comp_exp_c']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/account_sub_status_type.php


$dictionary["Account"]["fields"]['sub_status_c']['type'] = "enum";
$dictionary["Account"]["fields"]['sub_status_c']['isMultiSelect'] = false;

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/account_trade.php


$dictionary["Account"]["fields"]['account_trade'] = 
    array (
      'required' => false,
      'name' => 'account_trade',
      'vname' => 'LBL_ACCOUNT_TRADE',
      'type' => 'multienum',
      'isMultiSelect' => true,
      'massupdate' => true,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => NULL,
      'size' => '20',
      'options' => 'account_trade_list',
      'default' => '',
      'dependency' => '',
    );


?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/smartsheet_account_id.php


$dictionary["Account"]["fields"]['smartsheet_account_id'] = 
    array (
      'required' => false,
      'name' => 'smartsheet_account_id',
      'vname' => 'LBL_SMART_SHEET_ACCOUNT_ID',
      'type' => 'id',
      'dbType' => 'varchar',
      'studio' => true,
    );

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_account_type.php

 // created: 2018-05-28 07:43:29
$dictionary['Account']['fields']['account_type']['len']=100;
$dictionary['Account']['fields']['account_type']['required']=true;
$dictionary['Account']['fields']['account_type']['audited']=true;
$dictionary['Account']['fields']['account_type']['massupdate']=true;
$dictionary['Account']['fields']['account_type']['comments']='The Company is of this type';
$dictionary['Account']['fields']['account_type']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['account_type']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['account_type']['merge_filter']='disabled';
$dictionary['Account']['fields']['account_type']['calculated']=false;
$dictionary['Account']['fields']['account_type']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_ccb_num.php

 // created: 2018-05-28 07:44:09
$dictionary['Account']['fields']['ccb_num']['name']='ccb_num';
$dictionary['Account']['fields']['ccb_num']['vname']='LBL_CCB_NUM';
$dictionary['Account']['fields']['ccb_num']['type']='int';
$dictionary['Account']['fields']['ccb_num']['dbType']='double';
$dictionary['Account']['fields']['ccb_num']['len']='100';
$dictionary['Account']['fields']['ccb_num']['enable_range_search']=false;
$dictionary['Account']['fields']['ccb_num']['min']=false;
$dictionary['Account']['fields']['ccb_num']['max']=false;
$dictionary['Account']['fields']['ccb_num']['disable_num_format']='1';
$dictionary['Account']['fields']['ccb_num']['merge_filter']='disabled';
$dictionary['Account']['fields']['ccb_num']['importable']='true';
$dictionary['Account']['fields']['ccb_num']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['ccb_num']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['ccb_num']['comments']='';
$dictionary['Account']['fields']['ccb_num']['massupdate']=false;
$dictionary['Account']['fields']['ccb_num']['audited']=true;
$dictionary['Account']['fields']['ccb_num']['reportable']=true;
$dictionary['Account']['fields']['ccb_num']['studio']=true;
$dictionary['Account']['fields']['ccb_num']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['ccb_num']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_tin.php

 // created: 2018-05-28 07:44:27
$dictionary['Account']['fields']['tin']['name']='tin';
$dictionary['Account']['fields']['tin']['vname']='LBL_TIN';
$dictionary['Account']['fields']['tin']['type']='int';
$dictionary['Account']['fields']['tin']['dbType']='double';
$dictionary['Account']['fields']['tin']['len']='100';
$dictionary['Account']['fields']['tin']['enable_range_search']=false;
$dictionary['Account']['fields']['tin']['min']=false;
$dictionary['Account']['fields']['tin']['max']=false;
$dictionary['Account']['fields']['tin']['disable_num_format']='';
$dictionary['Account']['fields']['tin']['merge_filter']='disabled';
$dictionary['Account']['fields']['tin']['importable']='true';
$dictionary['Account']['fields']['tin']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['tin']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['tin']['comments']='';
$dictionary['Account']['fields']['tin']['massupdate']=false;
$dictionary['Account']['fields']['tin']['audited']=true;
$dictionary['Account']['fields']['tin']['reportable']=true;
$dictionary['Account']['fields']['tin']['studio']=true;
$dictionary['Account']['fields']['tin']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['tin']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_email.php

 // created: 2018-05-28 07:48:49
$dictionary['Account']['fields']['email']['len']='100';
$dictionary['Account']['fields']['email']['audited']=true;
$dictionary['Account']['fields']['email']['massupdate']=true;
$dictionary['Account']['fields']['email']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['email']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['email']['merge_filter']='disabled';
$dictionary['Account']['fields']['email']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.89',
  'searchable' => true,
);
$dictionary['Account']['fields']['email']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sub_status_c.php

 // created: 2018-05-29 03:06:55
$dictionary['Account']['fields']['sub_status_c']['labelValue']='Sub Status';
$dictionary['Account']['fields']['sub_status_c']['dependency']='';
$dictionary['Account']['fields']['sub_status_c']['visibility_grid']=array (
  'trigger' => 'account_type',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Association' => 
    array (
    ),
    'Attorney_Legal_CPA_Related' => 
    array (
    ),
    'Builder' => 
    array (
    ),
    'Buyer' => 
    array (
    ),
    'City_County_State Organization' => 
    array (
    ),
    'Competitor' => 
    array (
    ),
    'Developer' => 
    array (
    ),
    'Do Not Contact' => 
    array (
    ),
    'Insurance' => 
    array (
    ),
    'Investor' => 
    array (
    ),
    'Lender' => 
    array (
    ),
    'Nonprofit' => 
    array (
    ),
    'Other' => 
    array (
    ),
    'Partner' => 
    array (
    ),
    'Press' => 
    array (
    ),
    'Real Estate Brokerage' => 
    array (
    ),
    'Seller' => 
    array (
    ),
    'Subcontractor' => 
    array (
      0 => 'Pending',
      1 => 'Active',
      2 => 'Rehire',
      3 => 'No_Rehire',
    ),
    'Title_Escrow' => 
    array (
    ),
    'Utility Company' => 
    array (
    ),
    'Vendor' => 
    array (
      0 => 'Pending',
      1 => 'Active',
      2 => 'Rehire',
      3 => 'No_Rehire',
    ),
    'Supplier' => 
    array (
    ),
    'Consultant' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_account_trade.php

 // created: 2018-05-29 19:36:26

 
?>
