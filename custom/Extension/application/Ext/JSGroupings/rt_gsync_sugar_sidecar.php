<?php
// include js file to notify user for google authentication
foreach ($js_groupings as $key => $groupings)
{
    foreach  ($groupings as $file => $target)
    {
        if ($target == 'include/javascript/sugar_sidecar.min.js')
        {
            $js_groupings[$key]['custom/include/rt_GSync/notify_user.js'] = 
                'include/javascript/sugar_sidecar.min.js';
        }
        break;
    }
}
