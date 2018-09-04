<?php
// for sugar versions less than 7 we notify differently due to sugar structure differences
global $sugar_version;
$isSugarBWC = version_compare($sugar_version, '7.0.0.0', '<');
if ($isSugarBWC) {
	foreach ($js_groupings as $key => $groupings)
	{
	    foreach  ($groupings as $file => $target)
	    {
	        if ($target == 'include/javascript/sugar_grp1.js')
	        {
	            $js_groupings[$key]['custom/include/rt_GSync/notify_user_bwc.js'] =
	                'include/javascript/sugar_grp1.js';
	        }
	        break;
	    }
	}
}
