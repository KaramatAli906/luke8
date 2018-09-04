<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['email_template_for_meeting_invites_mangement'] = array(
    '',
    'LBL_EMAIL_TEMPLATE_FOR_MEETING_INVITES_MANGEMENT_ADMIN',
    'LBL_EMAIL_TEMPLATE_FOR_MEETING_INVITES_MANGEMENT_ADMIN_DESC',
    'javascript:parent.SUGAR.App.router.navigate("#Meetings/layout/email-template-for-invites", {trigger: true})',
);

$admin_group_header[] = array(
    'LBL_EMAIL_TEMPLATE_FOR_MEETING_INVITES_MANGEMENT',
    '',
    false,
    $admin_option_defs,
    ''
);
