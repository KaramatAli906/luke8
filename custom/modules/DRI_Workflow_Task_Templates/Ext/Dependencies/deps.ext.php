<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/DRI_Workflow_Task_Templates/Ext/Dependencies/days_type_dep.php


$dependencies['DRI_Workflow_Task_Templates']['days_type_dep'] = array (
    'hooks' => array ('all'),
    'trigger' => 'true',
    'triggerFields' => array('activity_type'),
    'onload' => true,
    'actions' => array (
        array (
            'name' => 'SetRequired',
            'params' => array (
                'target' => 'task_due_date_type',
                'label'  => 'task_due_date_type_label',
                'value' => 'or(equal($activity_type, "Meetings"), equal($activity_type, "Calls"))',
            ),
        ),
    ),
);

?>
