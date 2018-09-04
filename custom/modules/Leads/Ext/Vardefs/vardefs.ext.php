<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_account_name.php

 // created: 2017-08-22 22:31:25
$dictionary['Lead']['fields']['account_name']['audited']=false;
$dictionary['Lead']['fields']['account_name']['massupdate']=false;
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['account_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['account_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_coopbroker.php

## Relate Field:
## Configurable Field Settings
$dictionary['Lead']['fields']['coop_broker']['name']  = 'coop_broker';
$dictionary['Lead']['fields']['coop_broker']['vname'] = 'LBL_COOP_BROKER';

$dictionary['Lead']['fields']['coop_broker']['ext2'] = 'Contacts';
$dictionary['Lead']['fields']['coop_broker']['module'] = 'Contacts';
$dictionary['Lead']['fields']['coop_broker']['id_name'] = 'related_contact_id';


## Defines the Field
$dictionary['Lead']['fields']['coop_broker']['type'] = 'relate';
$dictionary['Lead']['fields']['coop_broker']['len'] = 255;
$dictionary['Lead']['fields']['coop_broker']['size'] = '20';
$dictionary['Lead']['fields']['coop_broker']['rname'] = 'name';
$dictionary['Lead']['fields']['coop_broker']['source'] = 'non-db';



## Global Settings
$dictionary['Lead']['fields']['coop_broker']['unified_search'] = false;
$dictionary['Lead']['fields']['coop_broker']['duplicate_merge'] = 'enabled';
$dictionary['Lead']['fields']['coop_broker']['duplicate_merge_dom_value'] = 1;
$dictionary['Lead']['fields']['coop_broker']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['coop_broker']['quicksearch'] = 'enabled';
$dictionary['Lead']['fields']['coop_broker']['studio'] = 'visible';
$dictionary['Lead']['fields']['coop_broker']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['coop_broker']['no_default'] = false;
$dictionary['Lead']['fields']['coop_broker']['massupdate'] = false;
$dictionary['Lead']['fields']['coop_broker']['calculated'] = false;

## Configurable General Settings

$dictionary['Lead']['fields']['coop_broker']['reportable'] = true;
$dictionary['Lead']['fields']['coop_broker']['required'] = false;
$dictionary['Lead']['fields']['coop_broker']['dependency'] = '';
$dictionary['Lead']['fields']['coop_broker']['importable'] = 'true';
$dictionary['Lead']['fields']['coop_broker']['comments'] = '';
$dictionary['Lead']['fields']['coop_broker']['help'] = '';
$dictionary['Lead']['fields']['coop_broker']['audited'] = false;



## Related ID Field:
## Configurable Field Settings
$dictionary['Lead']['fields']['related_contact_id']['name'] = 'related_contact_id';
$dictionary['Lead']['fields']['related_contact_id']['vname'] = 'LBL_COOP_BROKER_CONTACT_ID';

## Defines the Field
$dictionary['Lead']['fields']['related_contact_id']['type'] = 'id';
$dictionary['Lead']['fields']['related_contact_id']['len'] = 36;
$dictionary['Lead']['fields']['related_contact_id']['size'] = '20';

## Global Settings
$dictionary['Lead']['fields']['related_contact_id']['massupdate'] = false;
$dictionary['Lead']['fields']['related_contact_id']['no_default'] = false;
$dictionary['Lead']['fields']['related_contact_id']['duplicate_merge'] = 'enabled';
$dictionary['Lead']['fields']['related_contact_id']['duplicate_merge_dom_value'] = 1;
$dictionary['Lead']['fields']['related_contact_id']['unified_search'] = false;
$dictionary['Lead']['fields']['related_contact_id']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['related_contact_id']['calculated'] = false;


## Configurable General Settings
$dictionary['Lead']['fields']['related_contact_id']['comments'] = '';
$dictionary['Lead']['fields']['related_contact_id']['help'] = '';
$dictionary['Lead']['fields']['related_contact_id']['importable'] = 'true';
$dictionary['Lead']['fields']['related_contact_id']['audited'] = false;
$dictionary['Lead']['fields']['related_contact_id']['reportable'] = false;
$dictionary['Lead']['fields']['related_contact_id']['required'] = false;


?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_source_description.php

 // created: 2017-08-11 16:37:31
$dictionary['Lead']['fields']['lead_source_description']['audited']=false;
$dictionary['Lead']['fields']['lead_source_description']['massupdate']=false;
$dictionary['Lead']['fields']['lead_source_description']['comments']='Message from Web Form';
$dictionary['Lead']['fields']['lead_source_description']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['lead_source_description']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['lead_source_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source_description']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['lead_source_description']['calculated']=false;
$dictionary['Lead']['fields']['lead_source_description']['rows']='4';
$dictionary['Lead']['fields']['lead_source_description']['cols']='20';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_buy_sell_home.php


$dictionary['Lead']['fields']['buy_sell_home']['name'] = 'buy_sell_home';
$dictionary['Lead']['fields']['buy_sell_home']['vname'] = 'LBL_BUY_SELL_HOME';
$dictionary['Lead']['fields']['buy_sell_home']['type'] = 'enum';
$dictionary['Lead']['fields']['buy_sell_home']['options'] = 'yes_no_list';
$dictionary['Lead']['fields']['buy_sell_home']['len'] = 100;
$dictionary['Lead']['fields']['buy_sell_home']['audited'] = true;
$dictionary['Lead']['fields']['buy_sell_home']['comment'] = '';
$dictionary['Lead']['fields']['buy_sell_home']['merge_filter'] = 'enabled';
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/dri-customer-journey.php


VardefManager::addTemplate('Leads', 'Lead', 'customer_journey_parent', 'Lead', true);

# This flag disables population of the template id when converting the lead.
# This logic should be managed by \Leads_LogicHook_DRICustomerJourney::convertLead
$dictionary['Lead']['fields']['dri_workflow_template_id']['duplicate_on_record_copy'] = 'no';

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_community.php


$dictionary['Lead']['fields']['community']['name'] = 'community';
$dictionary['Lead']['fields']['community']['vname'] = 'LBL_COMMUNITY';
$dictionary['Lead']['fields']['community']['type'] = 'multienum';
$dictionary['Lead']['fields']['community']['isMultiSelect'] = true;
$dictionary['Lead']['fields']['community']['dependency'] = '';
$dictionary['Lead']['fields']['community']['visibility_grid'] = '';
$dictionary['Lead']['fields']['community']['options'] = 'community_list';
$dictionary['Lead']['fields']['community']['len'] = 100;
$dictionary['Lead']['fields']['community']['audited'] = true;
$dictionary['Lead']['fields']['community']['comment'] = '';
$dictionary['Lead']['fields']['community']['merge_filter'] = 'enabled';
$dictionary['Lead']['fields']['community']['audited'] = false;
$dictionary['Lead']['fields']['community']['reportable'] = true;
$dictionary['Lead']['fields']['community']['unified_search'] = false;
$dictionary['Lead']['fields']['community']['importable'] = true;

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/attachments.php


$parentObject = "Lead";
$parentModule = "Leads";
$parentTable = "leads";

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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/contacts_leads_1_Leads.php

// created: 2017-10-02 11:16:42
$dictionary["Lead"]["fields"]["contacts_leads_1"] = array (
  'name' => 'contacts_leads_1',
  'type' => 'link',
  'relationship' => 'contacts_leads_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE',
  'id_name' => 'contacts_leads_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["Lead"]["fields"]["contacts_leads_1_name"] = array (
  'name' => 'contacts_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_leads_1contacts_ida',
  'link' => 'contacts_leads_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Lead"]["fields"]["contacts_leads_1contacts_ida"] = array (
  'name' => 'contacts_leads_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE_ID',
  'id_name' => 'contacts_leads_1contacts_ida',
  'link' => 'contacts_leads_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_refered_by.php

 // created: 2017-10-02 11:20:24
$dictionary['Lead']['fields']['refered_by']['audited']=false;
$dictionary['Lead']['fields']['refered_by']['massupdate']=false;
$dictionary['Lead']['fields']['refered_by']['comments']='Identifies who refered the lead';
$dictionary['Lead']['fields']['refered_by']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['refered_by']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['refered_by']['merge_filter']='disabled';
$dictionary['Lead']['fields']['refered_by']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['refered_by']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/attachedcontacts_c.php


$dictionary["Lead"]["fields"]["attachedcontacts_c"] =  array (
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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/dp_doucumentspackets_leads_1_Leads.php

// created: 2015-10-08 17:42:25
$dictionary["Lead"]["fields"]["dp_doucumentspackets_leads_1"] = array (
  'name' => 'dp_doucumentspackets_leads_1',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_leads_1',
  'source' => 'non-db',
  'module' => 'DP_DoucumentsPackets',
  'bean_name' => 'DP_DoucumentsPackets',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_LEADS_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'id_name' => 'dp_doucumentspackets_leads_1dp_doucumentspackets_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/attacheddocuments_c.php


$dictionary["Lead"]["fields"]["attacheddocuments_c"] =  array (
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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_rating.php

 // created: 2018-03-04 21:54:55
$dictionary['Lead']['fields']['lead_rating']['name']='lead_rating';
$dictionary['Lead']['fields']['lead_rating']['vname']='LBL_LEAD_RATING';
$dictionary['Lead']['fields']['lead_rating']['type']='enum';
$dictionary['Lead']['fields']['lead_rating']['options']='lead_rating_list';
$dictionary['Lead']['fields']['lead_rating']['len']=100;
$dictionary['Lead']['fields']['lead_rating']['audited']=true;
$dictionary['Lead']['fields']['lead_rating']['comment']='';
$dictionary['Lead']['fields']['lead_rating']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_rating']['default']='Be Back';
$dictionary['Lead']['fields']['lead_rating']['massupdate']=true;
$dictionary['Lead']['fields']['lead_rating']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['lead_rating']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['lead_rating']['calculated']=false;
$dictionary['Lead']['fields']['lead_rating']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/document_id_c.php

 
 $dictionary["Lead"]["fields"]["document_id_c"] =  array (
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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/contact_id_c.php

 
 $dictionary["Lead"]["fields"]["contact_id_c"] =  array (
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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/signed_copies.php

 // created: 2018-03-10 05:08:51

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_address_country.php


$dictionary['Lead']['fields']['primary_address_country']['type'] = 'enum';
$dictionary['Lead']['fields']['primary_address_country']['options'] = 'mailchimp_country_list';

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alt_address_country.php


$dictionary['Lead']['fields']['alt_address_country']['type'] = 'enum';
$dictionary['Lead']['fields']['alt_address_country']['options'] = 'mailchimp_country_list';

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/mailchimp_cstm_fields.php


$dictionary['Lead']['fields']['subscriber_hash'] = array(
    'name' => 'subscriber_hash',
    'vname' => 'LBL_SUBSCRIBER_HASH',
    'type' => 'varchar',
    'len' => '200',
    'readonly' => true,
    'comment' => 'The MD5 hash of the lowercase version of the list member’s email address.',
);

$dictionary['Lead']['fields']['last_sync_date'] = array(
    'name' => 'last_sync_date',
    'vname' => 'LBL_LAST_SYNC_DATE',
    'type' => 'datetime',
    'readonly' => true,
    'comment' => 'last sync date',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_primary_address_postalcode.php


$dictionary['Lead']['fields']['primary_address_postalcode']['len'] = '10';

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_alt_address_postalcode.php


$dictionary['Lead']['fields']['alt_address_postalcode']['len'] = '10';

?>
