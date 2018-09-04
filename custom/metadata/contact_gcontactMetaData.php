<?php

$dictionary["contact_gcontact"] = array(
    'table' => 'contact_gcontact',
    'fields' =>
    array(
        'id' =>
        array(
            'name' => 'id',
            'type' => 'id',
        ),
        'date_modified' =>
        array(
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        'deleted' =>
        array(
            'name' => 'deleted',
            'type' => 'bool',
            'default' => 0,
        ),
        'contact_id' =>
        array(
            'name' => 'contact_id',
            'type' => 'id',
        ),
        'gcontact_id' =>
        array(
            'name' => 'gcontact_id',
            'type' => 'varchar',
            'len' => 255,
        ),
        'user_id' =>
        array(
            'name' => 'user_id',
            'type' => 'id',
        ),
    ),
    'indices' =>
    array(
        0 =>
        array(
            'name' => 'idx_cases_mv_srvreq_1_pk',
            'type' => 'primary',
            'fields' =>
            array(
                0 => 'id',
            ),
        ),
        1 =>
        array(
            'name' => 'idx_cases_mv_srvreq_1_ida1_deleted',
            'type' => 'index',
            'fields' =>
            array(
                0 => 'contact_id',
                1 => 'deleted',
            ),
        ),
        2 =>
        array(
            'name' => 'idx_cases_mv_srvreq_1_idb2_deleted',
            'type' => 'index',
            'fields' =>
            array(
                0 => 'gcontact_id',
                1 => 'deleted',
            ),
        ),
        3 =>
        array(
            'name' => 'user_id_idb2_deleted',
            'type' => 'index',
            'fields' =>
            array(
                0 => 'user_id',
                1 => 'deleted',
            ),
        ),
        4 =>
        array(
            'name' => 'cases_mv_srvreq_1_alt',
            'type' => 'alternate_key',
            'fields' =>
            array(
                0 => 'contact_id',
            ),
        ),
    ),
);
