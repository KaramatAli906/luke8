<?php

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
