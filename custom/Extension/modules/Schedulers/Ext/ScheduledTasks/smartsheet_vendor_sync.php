<?php

$job_strings[] = 'smartsheet_vendor_sync';

function smartsheet_vendor_sync()
{
    $GLOBALS['log']->fatal("InScheduler");
    require_once 'custom/EntryPoints/smartsheet/smartsheet_vendor_syncing.php';
    return true;
}