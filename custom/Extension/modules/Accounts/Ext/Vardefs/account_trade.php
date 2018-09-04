<?php

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

