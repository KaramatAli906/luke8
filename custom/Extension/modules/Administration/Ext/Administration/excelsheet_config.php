<?php

$admin_option_defs = array();
$admin_option_defs['RT_DocuSign']['excel_field_mapping'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'RT_DocuSign',
    //Link name label 
    'LBL_LINK_NAME_EXCELSHEET',
    //Link description label
    'LBL_LINK_DESCRIPTION_EXCELSHEET',
    //Link URL
    './index.php?module=Administration&action=excelSheetFieldsMapping',
);


$admin_group_header[] = array(
    //Section header label
    'LBL_SECTION_HEADER_EXCELSHEET',
    //$other_text parameter for get_form_header()
    '',
    //$show_help parameter for get_form_header()
    false,
    //Section links
    $admin_option_defs,
    //Section description label
    'LBL_SECTION_DESCRIPTION_EXCELSHEET'
);

?>
