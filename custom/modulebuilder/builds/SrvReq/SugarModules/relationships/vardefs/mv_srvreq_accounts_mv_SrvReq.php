<?php
// created: 2017-09-19 11:46:58
$dictionary["mv_SrvReq"]["fields"]["mv_srvreq_accounts"] = array (
  'name' => 'mv_srvreq_accounts',
  'type' => 'link',
  'relationship' => 'mv_srvreq_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_MV_SRVREQ_ACCOUNTS_FROM_MV_SRVREQ_TITLE',
  'id_name' => 'mv_srvreq_accountsaccounts_ida',
  'link-type' => 'one',
);
$dictionary["mv_SrvReq"]["fields"]["mv_srvreq_accounts_name"] = array (
  'name' => 'mv_srvreq_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MV_SRVREQ_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'mv_srvreq_accountsaccounts_ida',
  'link' => 'mv_srvreq_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mv_SrvReq"]["fields"]["mv_srvreq_accountsaccounts_ida"] = array (
  'name' => 'mv_srvreq_accountsaccounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MV_SRVREQ_ACCOUNTS_FROM_MV_SRVREQ_TITLE_ID',
  'id_name' => 'mv_srvreq_accountsaccounts_ida',
  'link' => 'mv_srvreq_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
