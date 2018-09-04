<?php

$viewdefs['Meetings']['base']['view']['email-template-for-invites'] = array(
    'template' => 'record',
    'buttons' => array(
        array(
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'events' => array(
                'click' => 'button:cancel_button:click',
            ),
        ),
        array(
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'events' => array(
                'click' => 'button:save_button:click',
            ),
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
    'panels' =>
        array(
            0 => array(
                'name' => 'panel_header',
                'label' => 'LBL_PANEL_HEADER',
                'header' => true,
                'fields' => array(
                    0 => array(
                        'name' => 'title',
                        'type' => 'label',
                        'default_value' => 'LBL_EMAIL_TEMPLATE_FOR_MEETING_INVITES_TITLE'
                    ),
                ),
            ),
            1 => array(
                'name' => 'panel_body',
                'label' => 'LBL_RECORD_BODY',
                'columns' => 2,
                'labelsOnTop' => true,
                'placeholders' => true,
                'newTab' => false,
                'panelDefault' => 'expanded',
                'fields' =>
                    array(
                        'email_template_id_for_invites' => array(
                            'name' => 'email_template_id_for_invites',
                            'label' => 'LBL_EMAIL_TEMPLATE_ID_FOR_INVITES',
                            'type' => 'email-template-for-invites-enum',
                            'cell_css_class' => 'record-cell edit',
                            'span' => '6',
                            'limit'=> '6',
                        ),
                    ),
            ),
        ),
);
