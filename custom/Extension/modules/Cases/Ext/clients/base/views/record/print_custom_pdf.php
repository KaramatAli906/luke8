<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$viewdefs['Cases']['base']['view']['record']['buttons'][2]['buttons'][] = array(
   'type' => 'print_custom_pdf',
   'name' => 'print_custom_pdf',
   'label' => 'LBL_PRINT_CUSTOM_BTN',
   'acl_action' => 'edit',
   'view' => 'edit',
   'event' => 'button:print_custom_pdf:click'
);