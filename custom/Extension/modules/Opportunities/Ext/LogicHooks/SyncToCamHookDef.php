<?php

/*$hook_array['after_relationship_add'][] = Array(
    1,
    'Flow data from Opp to CAM',
    'custom/modules/Opportunities/SyncDataToCam.php',
    'DataSync',
    'after_relationship_add_method'
);*/

$hook_array['after_save'][] = Array(
    1,
    'Flow data from Opp to CAM',
    'custom/modules/Opportunities/SyncDataToCam.php',
    'DataSync',
    'after_save_method'
);
$hook_array['before_relationship_delete'][] = Array(
    2,
    'Remove account id from cams before relationship delete',
    'custom/modules/Opportunities/SyncDataToCam.php',
    'DataSync',
    'before_relationship_delete_or_add'
);
$hook_array['before_relationship_add'][] = Array(
    2,
    'Attach account id with cam before relationship add',
    'custom/modules/Opportunities/SyncDataToCam.php',
    'DataSync',
    'before_relationship_delete_or_add'
);