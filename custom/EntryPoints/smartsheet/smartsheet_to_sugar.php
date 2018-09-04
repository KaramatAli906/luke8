<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'custom/include/Helpers/SmartSheets/smartSheetSynchronizer.php';
require_once 'custom/include/Helpers/SmartSheets/SmartSheetApiHelper.php';

$admin = new Administration();
$admin->retrieveSettings();
//$sheet_id=$admin->settings['smartsheet_id'];
$sheet_id=SmartSheetApiHelper::retrieveSettings($admin->settings['smartsheet_id']);
        
$smart_sheet_synchronizer = new smartSheetSynchronizer($sheet_id);
$smart_sheet_synchronizer->syncSmartSheetToSugar();

echo "<br> Smartsheet to sugar sync completed <br>";
