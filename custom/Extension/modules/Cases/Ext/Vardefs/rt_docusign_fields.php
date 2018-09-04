<?php

$dictionary['Case']['fields']['contact_id_c'] =
    array (
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

    $dictionary['Case']['fields']['attachedcontacts_c'] = 
    array (
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


$dictionary['Case']['fields']['attacheddocuments_c'] = 
    array (
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

     $dictionary['Case']['fields']['document_id_c'] = 
    array (
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
