<?php
// created: 2017-09-19 11:33:08
$dictionary["Case"]["fields"]["mv_srvreq_cases"] = array (
  'name' => 'mv_srvreq_cases',
  'type' => 'link',
  'relationship' => 'mv_srvreq_cases',
  'source' => 'non-db',
  'module' => 'mv_SrvReq',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_MV_SRVREQ_CASES_FROM_CASES_TITLE',
  'id_name' => 'mv_srvreq_casesmv_srvreq_ida',
  'link-type' => 'one',
);
$dictionary["Case"]["fields"]["mv_srvreq_cases_name"] = array (
  'name' => 'mv_srvreq_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MV_SRVREQ_CASES_FROM_MV_SRVREQ_TITLE',
  'save' => true,
  'id_name' => 'mv_srvreq_casesmv_srvreq_ida',
  'link' => 'mv_srvreq_cases',
  'table' => 'mv_srvreq',
  'module' => 'mv_SrvReq',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["mv_srvreq_casesmv_srvreq_ida"] = array (
  'name' => 'mv_srvreq_casesmv_srvreq_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MV_SRVREQ_CASES_FROM_CASES_TITLE_ID',
  'id_name' => 'mv_srvreq_casesmv_srvreq_ida',
  'link' => 'mv_srvreq_cases',
  'table' => 'mv_srvreq',
  'module' => 'mv_SrvReq',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
