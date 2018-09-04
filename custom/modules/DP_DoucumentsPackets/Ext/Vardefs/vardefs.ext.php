<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_m_cams_DP_DoucumentsPackets.php

// created: 2015-09-18 04:41:52
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_m_cams"] = array (
  'name' => 'dp_doucumentspackets_m_cams',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_m_cams',
  'source' => 'non-db',
  'module' => 'm_CAMS',
  'bean_name' => 'm_CAMS',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_M_CAMS_FROM_M_CAMS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_cases_DP_DoucumentsPackets.php

// created: 2015-09-18 04:41:52
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_cases"] = array (
  'name' => 'dp_doucumentspackets_cases',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_CASES_FROM_CASES_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/signed_attachment_type.php


    $dictionary["DP_DoucumentsPackets"]["fields"]["signed_attachment_type"] = array(
        'name' => 'signed_attachment_type',
        'vname' => 'LBL_SIGNED_ATTACHMENT_TYPE',
        'type' => 'varchar',
        'default' => '',
        'reportable' => true,
        'len' => 256,
        'size' => 256,
    );
    
    $dictionary["DP_DoucumentsPackets"]["fields"]["signed_attachment_name"] = array(
        'name' => 'signed_attachment_name',
        'vname' => 'Signed Attachment Name',
        'type' => 'varchar',
        'default' => '',
        'reportable' => false,
        'len' => 256,
        'size' => 256,
    );
    
?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_mv_attachments_1_DP_DoucumentsPackets.php


// created: 2018-01-23 17:41:33
    $dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_mv_attachments_1"] = array(
        'name' => 'dp_doucumentspackets_mv_attachments_1',
        'type' => 'link',
        'relationship' => 'dp_doucumentspackets_mv_attachments_1',
        'source' => 'non-db',
        'module' => 'mv_Attachments',
        'bean_name' => 'mv_Attachments',
        'vname' => 'LBL_DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1_FROM_MV_ATTACHMENTS_TITLE',
        'id_name' => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
        'readonly' => true,
    );
    $dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_mv_attachments_1_name"] = array(
        'name' => 'dp_doucumentspackets_mv_attachments_1_name',
        'type' => 'relate',
        'source' => 'non-db',
        'vname' => 'LBL_DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1_FROM_MV_ATTACHMENTS_TITLE',
        'save' => true,
        'id_name' => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
        'link' => 'dp_doucumentspackets_mv_attachments_1',
        'table' => 'mv_attachments',
        'module' => 'mv_Attachments',
        'rname' => 'document_name',
        'readonly' => true,
    );
    $dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_mv_attachments_1mv_attachments_idb"] = array(
        'name' => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
        'type' => 'id',
        'source' => 'non-db',
        'vname' => 'LBL_DP_DOUCUMENTSPACKETS_MV_ATTACHMENTS_1_FROM_MV_ATTACHMENTS_TITLE',
        'id_name' => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
        'link' => 'dp_doucumentspackets_mv_attachments_1',
        'table' => 'mv_attachments',
        'module' => 'mv_Attachments',
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
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_attachments_DP_DoucumentsPackets.php

// created: 2015-09-18 04:41:52
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_attachments"] = array (
  'name' => 'dp_doucumentspackets_attachments',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_attachments',
  'source' => 'non-db',
  'module' => 'mv_Attachments',
  'bean_name' => 'mv_Attachments',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_ATTACHMENTS_FROM_ATTACHMENTS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/sugarfield_documentpacketpdf_c.php

 // created: 2015-10-05 16:47:09
$dictionary['DP_DoucumentsPackets']['fields']['documentpacketpdf_c']['labelValue']='Document Packet PDF';
$dictionary['DP_DoucumentsPackets']['fields']['documentpacketpdf_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_accounts_DP_DoucumentsPackets.php

// created: 2015-09-18 04:41:52
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_accounts"] = array (
  'name' => 'dp_doucumentspackets_accounts',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'dp_doucumentspackets_accountsaccounts_idb',
);

?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_opportunities_1_DP_DoucumentsPackets.php

// created: 2015-10-01 14:45:37
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_opportunities_1"] = array (
  'name' => 'dp_doucumentspackets_opportunities_1',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'dp_doucumentspackets_opportunities_1opportunities_idb',
);

?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_documents_DP_DoucumentsPackets.php

// created: 2015-09-18 04:41:52
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_documents"] = array (
  'name' => 'dp_doucumentspackets_documents',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_documents',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'id_name' => 'dp_doucumentspackets_documentsdocuments_idb',
);

?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_contacts_DP_DoucumentsPackets.php

// created: 2015-09-18 04:41:52
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_contacts"] = array (
  'name' => 'dp_doucumentspackets_contacts',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'dp_doucumentspackets_contactscontacts_idb',
);

?>
<?php
// Merged from custom/Extension/modules/DP_DoucumentsPackets/Ext/Vardefs/dp_doucumentspackets_leads_1_DP_DoucumentsPackets.php

// created: 2015-10-08 17:42:25
$dictionary["DP_DoucumentsPackets"]["fields"]["dp_doucumentspackets_leads_1"] = array (
  'name' => 'dp_doucumentspackets_leads_1',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_LEADS_1_FROM_LEADS_TITLE',
  'id_name' => 'dp_doucumentspackets_leads_1leads_idb',
);

?>
