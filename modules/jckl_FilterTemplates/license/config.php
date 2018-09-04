<?php
    global $sugar_version, $sugar_config;
    if(preg_match( "/^6.*/", $sugar_version) ) {
        $url = 'index.php?module=jckl_FilterTemplates&action=index';
    } else {
        $url = 'jckl_FilterTemplates';
    }
    $outfitters_config = array(
        'name' => 'jckl_filters00101', //The matches the id value in your manifest file. This allow the library to lookup addon version from upgrade_history, so you can see what version of addon your customers are using
        'shortname' => 'filter-deployer',
        'public_key' => 'e4d0e77d19fbe7fe46539088317ca525,adaf91e5921f66aed13abc16c47a8d52',
        'api_url' => 'https://www.sugaroutfitters.com/api/v1',
        'validate_users' => false,
        'manage_licensed_users' => false,
        'validation_frequency' => 'weekly',
        'continue_url' => $url,
    );

