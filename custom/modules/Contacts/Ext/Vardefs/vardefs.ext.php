<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_lead_source_description.php


$dictionary['Contact']['fields']['lead_source_description']['name'] = 'lead_source_description';
$dictionary['Contact']['fields']['lead_source_description']['vname'] = 'LBL_LEAD_SOURCE_DESCRIPTION';
$dictionary['Contact']['fields']['lead_source_description']['type'] = 'text';
$dictionary['Contact']['fields']['lead_source_description']['group'] = 'lead_source';
$dictionary['Contact']['fields']['lead_source_description']['comment'] = 'Message from Web Form';
$dictionary['Contact']['fields']['lead_source_description']['audited'] = false;
$dictionary['Contact']['fields']['lead_source_description']['massupdate'] = false;
$dictionary['Contact']['fields']['lead_source_description']['comments'] = 'Message from Web Form';
$dictionary['Contact']['fields']['lead_source_description']['duplicate_merge'] = 'enabled';
$dictionary['Contact']['fields']['lead_source_description']['duplicate_merge_dom_value'] = '1';
$dictionary['Contact']['fields']['lead_source_description']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['lead_source_description']['full_text_search'] = array ('enabled' => '0','boost' => '1','searchable' => false,);
$dictionary['Contact']['fields']['lead_source_description']['calculated'] = false;
$dictionary['Contact']['fields']['lead_source_description']['rows'] = '4';
$dictionary['Contact']['fields']['lead_source_description']['cols'] = '20';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/dri-customer-journey.php


VardefManager::addTemplate('Contacts', 'Contact', 'customer_journey_parent', 'Contact', true);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/attachments.php


$parentObject = "Contact";
$parentModule = "Contacts";
$parentTable = "contacts";

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
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_leads_1_Contacts.php

// created: 2017-10-02 11:16:42
$dictionary["Contact"]["fields"]["contacts_leads_1"] = array (
  'name' => 'contacts_leads_1',
  'type' => 'link',
  'relationship' => 'contacts_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_leads_1contacts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_subcontractor_email_group_c.php

 // created: 2017-10-02 11:44:35
$dictionary['Contact']['fields']['subcontractor_email_group_c']['labelValue']='Subcontractor Email Group';
$dictionary['Contact']['fields']['subcontractor_email_group_c']['dependency']='';
$dictionary['Contact']['fields']['subcontractor_email_group_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/attachedcontacts_c.php


$dictionary["Contact"]["fields"]["attachedcontacts_c"] =  array (
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
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/cam_name.php


    $dictionary['Contact']['fields']['m_cam_name'] = array(
        'required' => false,
        'source' => 'non-db',
        'name' => 'm_cam_name',
        'vname' => 'LBL_M_CAM_NAME',
        'type' => 'relate',
        'rname' => 'name',
        'id_name' => 'm_cam_id',
        'join_name' => 'm_cams',
        'link' => 'm_cams',
        'table' => 'm_cams',
        'isnull' => 'true',
        'module' => 'm_CAMS',
    );

    $dictionary['Contact']['fields']['m_cam_id'] = array(
        'name' => 'm_cam_id',
        'rname' => 'id',
        'vname' => 'LBL_M_CAM_ID',
        'type' => 'id',
        'table' => 'm_cams',
        'isnull' => 'true',
        'module' => 'm_CAMS',
        'dbType' => 'id',
        'reportable' => false,
        'massupdate' => false,
        'duplicate_merge' => 'disabled',
    );

    $dictionary['Contact']['fields']['m_cams'] = array(
        'name' => 'm_cams',
        'type' => 'link',
        'relationship' => 'contacts_m_cams',
        'module' => 'm_CAMS',
        'bean_name' => 'm_CAMS',
        'source' => 'non-db',
        'vname' => 'LBL_M_CAM',
    );



?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/dp_doucumentspackets_contacts_Contacts.php

// created: 2015-09-18 04:41:52
$dictionary["Contact"]["fields"]["dp_doucumentspackets_contacts"] = array (
  'name' => 'dp_doucumentspackets_contacts',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_contacts',
  'source' => 'non-db',
  'module' => 'DP_DoucumentsPackets',
  'bean_name' => 'DP_DoucumentsPackets',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_CONTACTS_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'id_name' => 'dp_doucumentspackets_contactsdp_doucumentspackets_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/attacheddocuments_c.php


$dictionary["Contact"]["fields"]["attacheddocuments_c"] =  array (
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
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/document_id_c.php

 
 $dictionary["Contact"]["fields"]["document_id_c"] =  array (
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
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contact_id_c.php

 
 $dictionary["Contact"]["fields"]["contact_id_c"] =  array (
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
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_primary_address_country.php


$dictionary['Contact']['fields']['primary_address_country']['type'] = 'enum';
$dictionary['Contact']['fields']['primary_address_country']['options'] = 'mailchimp_country_list';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_alt_address_country.php


$dictionary['Contact']['fields']['alt_address_country']['type'] = 'enum';
$dictionary['Contact']['fields']['alt_address_country']['options'] = 'mailchimp_country_list';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/mailchimp_cstm_fields.php


$dictionary['Contact']['fields']['subscriber_hash'] = array(
    'name' => 'subscriber_hash',
    'vname' => 'LBL_SUBSCRIBER_HASH',
    'type' => 'varchar',
    'len' => '200',
    'readonly' => true,
    'comment' => 'The MD5 hash of the lowercase version of the list member’s email address.',
);

$dictionary['Contact']['fields']['last_sync_date'] = array(
    'name' => 'last_sync_date',
    'vname' => 'LBL_LAST_SYNC_DATE',
    'type' => 'datetime',
    'readonly' => true,
    'comment' => 'last sync date',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_primary_address_postalcode.php


$dictionary['Contact']['fields']['primary_address_postalcode']['len'] = '10';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_alt_address_postalcode.php


$dictionary['Contact']['fields']['alt_address_postalcode']['len'] = '10';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/account_caontact_link.php


$dictionary["Contact"]["fields"]['cstm_accounts'] = 
    array (
      'name' => 'cstm_accounts',
      'type' => 'link',
      'relationship' => 'accounts_contacts',
      'link_type' => 'one',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
      'duplicate_merge' => 'disabled',
    );

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/smartsheet_contact_id.php


$dictionary["Contact"]["fields"]['smartsheet_contact_id'] = 
    array (
      'required' => false,
      'name' => 'smartsheet_contact_id',
      'vname' => 'LBL_SMART_SHEET_CONTACT_ID',
      'type' => 'id',
      'dbType' => 'varchar',
      'studio' => true,
    );


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_first_name.php

 // created: 2018-05-28 07:45:16
$dictionary['Contact']['fields']['first_name']['audited']=true;
$dictionary['Contact']['fields']['first_name']['massupdate']=false;
$dictionary['Contact']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Contact']['fields']['first_name']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['first_name']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['first_name']['merge_filter']='disabled';
$dictionary['Contact']['fields']['first_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.99',
  'searchable' => true,
);
$dictionary['Contact']['fields']['first_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_name.php

 // created: 2018-05-28 07:45:39
$dictionary['Contact']['fields']['last_name']['audited']=true;
$dictionary['Contact']['fields']['last_name']['massupdate']=false;
$dictionary['Contact']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Contact']['fields']['last_name']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['last_name']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['last_name']['merge_filter']='disabled';
$dictionary['Contact']['fields']['last_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.97',
  'searchable' => true,
);
$dictionary['Contact']['fields']['last_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_title.php

 // created: 2018-05-28 07:46:28
$dictionary['Contact']['fields']['title']['audited']=true;
$dictionary['Contact']['fields']['title']['massupdate']=false;
$dictionary['Contact']['fields']['title']['comments']='The title of the contact';
$dictionary['Contact']['fields']['title']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['title']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['title']['merge_filter']='disabled';
$dictionary['Contact']['fields']['title']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['title']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_phone_mobile.php

 // created: 2018-05-28 07:46:53
$dictionary['Contact']['fields']['phone_mobile']['len']='100';
$dictionary['Contact']['fields']['phone_mobile']['audited']=true;
$dictionary['Contact']['fields']['phone_mobile']['massupdate']=false;
$dictionary['Contact']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['Contact']['fields']['phone_mobile']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['phone_mobile']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['phone_mobile']['merge_filter']='disabled';
$dictionary['Contact']['fields']['phone_mobile']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.09',
  'searchable' => true,
);
$dictionary['Contact']['fields']['phone_mobile']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_email.php

 // created: 2018-05-28 07:47:40
$dictionary['Contact']['fields']['email']['len']='100';
$dictionary['Contact']['fields']['email']['audited']=true;
$dictionary['Contact']['fields']['email']['massupdate']=true;
$dictionary['Contact']['fields']['email']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['email']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['email']['merge_filter']='disabled';
$dictionary['Contact']['fields']['email']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.95',
  'searchable' => true,
);
$dictionary['Contact']['fields']['email']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_gcontact_id.php

$dictionary["Contact"]["fields"]['gcontact_id'] = array(
    'name' => 'gcontact_id',
    'rname' => 'name',
    'vname' => 'LBL_GCONTACT_ID',
    'type' => 'varchar',
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
	
?>
