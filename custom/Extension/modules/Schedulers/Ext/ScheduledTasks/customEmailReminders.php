<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$job_strings[] = 'custom_email_reminders';

function custom_email_reminders()
{
    require_once 'custom/modules/Activities/customEmailReminders.php';
    $reminder = new customEmailReminders();
    return $reminder->process();
}