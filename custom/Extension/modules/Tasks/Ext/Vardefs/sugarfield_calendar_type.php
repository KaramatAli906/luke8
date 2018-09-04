<?php	
//all day event
$dictionary["Task"]["fields"]['calendar_type'] = array (
	'name'=>'calendar_type',
	'vname' => 'LBL_CALENDAR_TYPE',
	'function' => 'getCalendarTypes',
	'type' => 'enum',
	'default' => 'primary',
	'reportable'=>false,
	'massupdate' => false,
	'importable' => 'false',
	'studio' => array(
		'listview' => true,
	    'detailview' => true,
	    'editview' => true),
);
