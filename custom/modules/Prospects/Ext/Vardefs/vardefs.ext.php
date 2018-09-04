<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_primary_address_country.php


$dictionary['Prospect']['fields']['primary_address_country']['type'] = 'enum';
$dictionary['Prospect']['fields']['primary_address_country']['options'] = 'mailchimp_country_list';

?>
<?php
// Merged from custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_alt_address_country.php


$dictionary['Prospect']['fields']['alt_address_country']['type'] = 'enum';
$dictionary['Prospect']['fields']['alt_address_country']['options'] = 'mailchimp_country_list';

?>
<?php
// Merged from custom/Extension/modules/Prospects/Ext/Vardefs/mailchimp_cstm_fields.php


$dictionary['Prospect']['fields']['subscriber_hash'] = array(
    'name' => 'subscriber_hash',
    'vname' => 'LBL_SUBSCRIBER_HASH',
    'type' => 'varchar',
    'len' => '200',
    'readonly' => true,
    'comment' => 'The MD5 hash of the lowercase version of the list member’s email address.',
);

$dictionary['Prospect']['fields']['last_sync_date'] = array(
    'name' => 'last_sync_date',
    'vname' => 'LBL_LAST_SYNC_DATE',
    'type' => 'datetime',
    'readonly' => true,
    'comment' => 'last sync date',
);

?>
<?php
// Merged from custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_primary_address_postalcode.php


$dictionary['Prospect']['fields']['primary_address_postalcode']['len'] = '10';

?>
<?php
// Merged from custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_alt_address_postalcode.php


$dictionary['Prospect']['fields']['alt_address_postalcode']['len'] = '10';

?>
