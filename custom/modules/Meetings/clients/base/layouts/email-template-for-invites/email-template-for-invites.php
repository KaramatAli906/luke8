<?php

$viewdefs['Meetings']['base']['layout']['email-template-for-invites'] = array(
    'components' => array(
        array(
            'layout' => array(
                'type' => 'default',
                'name' => 'sidebar',
                'components' => array(
                    array(
                        'layout' => array(
                            'type' => 'base',
                            'name' => 'main-pane',
                            'css_class' => 'main-pane span8',
                            'components' => array(
                                array(
                                    'view' => 'email-template-for-invites',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
