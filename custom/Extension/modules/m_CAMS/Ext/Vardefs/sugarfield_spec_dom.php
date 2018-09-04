<?php
 // created: 2018-04-25 13:21:27
$dictionary['m_CAMS']['fields']['spec_dom']['importable']='false';
$dictionary['m_CAMS']['fields']['spec_dom']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['spec_dom']['duplicate_merge_dom_value']=0;
$dictionary['m_CAMS']['fields']['spec_dom']['calculated']='1';
$dictionary['m_CAMS']['fields']['spec_dom']['formula']='ifElse(greaterThan(strlen($sales_stage),0),
	abs(subtract(ifElse(equal(toString($const_finish_date),""),0,daysUntil($const_finish_date)),
		ifElse(equal(toString($pending_date),""),0,daysUntil($pending_date)))),
	abs(subtract(ifElse(equal(toString($const_finish_date),""),0,daysUntil($const_finish_date)),daysUntil(today())))
)';
$dictionary['m_CAMS']['fields']['spec_dom']['enforced']=true;
$dictionary['m_CAMS']['fields']['spec_dom']['precision']=0;

 ?>