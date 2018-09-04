<?php

global $current_user;

$admin_option_defs = array();
$admin_option_defs['RT_DocuSign']['config_docusign'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'RT_DocuSign',
    //Link name label 
    'LBL_LINK_NAME',
    //Link description label
    'LBL_LINK_DESCRIPTION',
    //Link URL
    'javascript:parent.SUGAR.App.router.navigate("RT_DocuSign/layout/dsconfig",{trigger: true});',
);
$admin_option_defs['RT_DocuSign']['field_mapping_docusign'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'RT_DocuSign',
    //Link name label 
    'LBL_MAPPING_LINK',
    //Link description label
    'LBL_MAPPING_DESCRIPTION',
    //Link URL
    './index.php?module=Administration&action=docuSignFieldsMapping',
);

$admin_group_header[] = array(
    //Section header label
    'LBL_SECTION_HEADER',
    //$other_text parameter for get_form_header()
    '',
    //$show_help parameter for get_form_header()
    false,
    //Section links
    $admin_option_defs,
    //Section description label
    'LBL_SECTION_DESCRIPTION'
);

if (!$current_user->isAdmin() == 1) {
    unset($admin_group_header[4]);
}
?>