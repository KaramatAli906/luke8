<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/JSGroupings/addCssLoaderPlugin.php

/**
 * Copyright 2016 SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */
//Loop through the groupings to find grouping file you want to append to
foreach ($js_groupings as $key => $groupings)
{
    foreach  ($groupings as $file => $target)
    {
        //if the target grouping is found
        if ($target == 'include/javascript/sugar_grp7.min.js')
        {
            //append the custom JavaScript file to existing grouping
            $js_groupings[$key]['custom/include/javascript/sugar7/plugins/CssLoader.js'] = 'include/javascript/sugar_grp7.min.js';
        }
        break;
    }
}

?>
<?php
// Merged from custom/Extension/application/Ext/JSGroupings/rt_gsync_sugar_ce.php

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

?>
<?php
// Merged from custom/Extension/application/Ext/JSGroupings/rt_gsync_sugar_sidecar.php

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

?>
