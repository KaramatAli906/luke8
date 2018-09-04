<?php

/*
 * module name
 */
$moduleUsed = 'Opportunities';

/*
 * buttons to append
 */
$addButtons = array(
    array(
        'type' => 'opportunity_print_pdf',
        'name' => 'opportunity_print_pdf',
        'label' => 'LBL_PRINT_CUSTOM_OPPORTUNITY',
        'acl_action' => 'view',
//        'view' => 'edit',
        'event' => 'button:printOpportunityRecord:click'
    ),
);

/*
 * if the buttons are missing in our base modules metadata, include core buttons
 */
if (!isset($viewdefs[$moduleUsed]['base']['view']['record']['buttons'])) {
    require('clients/base/views/record/record.php');
    $viewdefs[$moduleUsed]['base']['view']['record']['buttons'] = $viewdefs['base']['view']['record']['buttons'];
    unset($viewdefs['base']);
}

foreach ($viewdefs[$moduleUsed]['base']['view']['record']['buttons'] as $outerKey => $outerButton) {
    if (isset($outerButton['type']) && $outerButton['type'] == 'actiondropdown' && isset($outerButton['name']) && $outerButton['name'] == 'main_dropdown' && isset($outerButton['buttons'])) {
        /*
         * appending buttons
         */
        foreach ($addButtons as $addButton) {
            $viewdefs[$moduleUsed]['base']['view']['record']['buttons'][$outerKey]['buttons'][] = $addButton;
        }
    }
}
?>