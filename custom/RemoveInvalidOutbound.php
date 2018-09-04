<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$delete_query = "DELETE FROM outbound_email WHERE type IS NULL OR mail_smtpuser IS NULL OR mail_smtppass IS NULL OR deleted=1";
$GLOBALS['db']->query($delete_query);
$queryParams = array(
    'module' => 'Administration',
    'action' => 'index',
);

SugarApplication::redirect('index.php?' . http_build_query($queryParams));
