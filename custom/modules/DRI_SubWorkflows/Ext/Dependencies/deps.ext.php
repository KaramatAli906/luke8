<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/DRI_SubWorkflows/Ext/Dependencies/name_dep.php


$dependencies['DRI_SubWorkflows']['name_dep'] = array (
    'hooks' => array ('edit'),
    'trigger' => 'true',
    'triggerFields' => array('trigger'),
    'onload' => true,
    'actions' => array (
        array (
            'name' => 'ReadOnly',
            'params' => array (
                'target' => 'name',
                'value' => 'not(equal($dri_subworkflow_template_name, ""))',
            ),
        ),
        array (
            'name' => 'ReadOnly',
            'params' => array (
                'target' => 'description',
                'value' => 'not(equal($dri_subworkflow_template_name, ""))',
            ),
        ),
    ),
);

?>
