<?php

/*
 * module name
 */
$moduleUsed = 'Contacts';

/*
 * buttons to append
 */
$addButtons = array(
    array(
        'type' => 'email-bcc',
        'name' => 'email-bcc',
        'label' => 'LBL_EMAIL_BCC_CUSTOM_CONTACTS',
        'primary' => true,
        'acl_module' => 'Emails',
        'acl_action' => 'edit',
        'related_fields' => array('name', 'email'),
    )
);

/*
 * if the buttons are missing in our base modules metadata, include core buttons
 */
if (!isset($viewdefs[$moduleUsed]['base']['view']['recordlist']['selection'])) {
    require('clients/base/views/recordlist/recordlist.php');
    $viewdefs[$moduleUsed]['base']['view']['recordlist']['selection'] = $viewdefs['base']['view']['recordlist']['selection'];
    unset($viewdefs['base']);
}

$default_buttons = $viewdefs[$moduleUsed]['base']['view']['recordlist']['selection']['actions'];
//To add custom button at the Top 
$viewdefs[$moduleUsed]['base']['view']['recordlist']['selection']['actions'] = null;

//include custom buttons 
foreach ($addButtons as $addButton) {
    $custom_button[] = $addButton;
}
 $viewdefs[$moduleUsed]['base']['view']['recordlist']['selection']['actions'] = array_merge($custom_button,$default_buttons);
