<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/dri-customer-journey.php


/**
 * Please note that this file has been generated based a file located on this path:
 * custom/modules/Users/vardefs/addoptify-customer-journey.yml
 * and may be overwritten at a later point..
 */

$dictionary['User']['fields']['customer_journey_access'] = array (
  'name' => 'customer_journey_access',
  'vname' => 'LBL_CUSTOMER_JOURNEY_ACCESS',
  'required' => false,
  'reportable' => true,
  'audited' => true,
  'importable' => 'true',
  'massupdate' => false,
  'type' => 'bool',
  'studio' => false,
  'readonly' => true,
  'default' => false,
);

?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_personalized_message_c.php

 // created: 2018-02-12 10:13:36
$dictionary['User']['fields']['personalized_message_c']['labelValue']='Personalized Message';
$dictionary['User']['fields']['personalized_message_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['User']['fields']['personalized_message_c']['enforced']='';
$dictionary['User']['fields']['personalized_message_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_lastsync_drive.php

$dictionary["User"]["fields"]['lastsync_drive'] = array(
    'name' => 'lastsync_drive',
    'vname' => 'LBL_LASTSYNC_DRIVE',
    'type' => 'datetime',
    'reportable' => false,
    // 'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
    'default' => '2013-01-01 01:01:01',
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gdrive_auth_expires_in.php

$dictionary["User"]["fields"]["gdrive_auth_expires_in"] = array(
    'name' => 'gdrive_auth_expires_in',
    'vname' => 'LBL_GDRIVE_AUTH_EXPIRES_IN',
    'type' => 'int',
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gdrive_refresh_code.php

$dictionary["User"]["fields"]["gdrive_refresh_code"] = array(
    'name' => 'gdrive_refresh_code',
    'vname' => 'LBL_GDRIVE_REFRESH_CODE',
    'type' => 'varchar',
    'len' => 300,
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gdrive_access_code.php

$dictionary["User"]["fields"]["gdrive_access_code"] = array(
    'name' => 'gdrive_access_code',
    'vname' => 'LBL_GDRIVE_ACCESS_CODE',
    'type' => 'varchar',
    'len' => 300,
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_enable_gsync.php

//added for cleanup process
$dictionary["User"]["fields"]['enable_gsync'] = array(
    'name' => 'enable_gsync',
    'vname' => 'LBL_ENABLE_GSYNC',
    'type' => 'bool',
    'default' => '0',//by all users are disabled
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gdrive_auth_created.php

$dictionary["User"]["fields"]["gdrive_auth_created"] = array(
    'name' => 'gdrive_auth_created',
    'vname' => 'LBL_GDRIVE_AUTH_CREATED',
    'type' => 'int',
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_lastsync_calendar.php

$dictionary["User"]["fields"]['lastsync_calendar'] = array(
    'name' => 'lastsync_calendar',
    'vname' => 'LBL_LASTSYNC_CALENDAR',
    'type' => 'datetime',
    'reportable' => false,
    // 'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
    'default' => '2013-01-01 01:01:01',
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_lastsync_contacts.php

$dictionary["User"]["fields"]['lastsync_contacts'] = array(
    'name' => 'lastsync_contacts',
    'vname' => 'LBL_LASTSYNC_CONTACTS',
    'type' => 'datetime',
    'reportable' => false,
    // 'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
    'default' => '2013-01-01 01:01:01',
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gmail_id.php

$dictionary["User"]["fields"]["gmail_id"] = array(
    'name' => 'gmail_id',
    'vname' => 'LBL_GMAIL_ID',
    'type' => 'varchar',
    'len' => 200,
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gdrive_auth_code.php

$dictionary["User"]["fields"]["gdrive_auth_code"] = array(
    'name' => 'gdrive_auth_code',
    'vname' => 'LBL_GDRIVE_AUTH_CODE',
    'type' => 'varchar',
    'len' => 300,
    'reportable' => false,
    'massupdate' => false,
    'importable' => 'false',
    'studio' => false,
);
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gcontacts_date_modified_c.php

 // created: 2018-07-02 07:04:41

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_gcontacts_offset_c.php

 // created: 2018-07-02 07:04:42

 
?>
