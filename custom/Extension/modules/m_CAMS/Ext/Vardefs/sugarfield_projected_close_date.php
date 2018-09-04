<?php
 // created: 2018-05-21 06:04:30
$dictionary['m_CAMS']['fields']['projected_close_date']['massupdate']=false;
$dictionary['m_CAMS']['fields']['projected_close_date']['importable']='false';
$dictionary['m_CAMS']['fields']['projected_close_date']['duplicate_merge']='disabled';
$dictionary['m_CAMS']['fields']['projected_close_date']['duplicate_merge_dom_value']='0';
$dictionary['m_CAMS']['fields']['projected_close_date']['calculated']='1';
$dictionary['m_CAMS']['fields']['projected_close_date']['formula']='projectDate(equal($sale_type,"Spec"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,60)),ifElse(equal($sale_type,"Pre-Sale"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,14)),ifElse(equal($sale_type,"Spec-Sale"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,14)),ifElse(equal($sale_type,"Multifamily Hold"),ifElse(equal(toString($const_finish_date),""),$const_finish_date,addDays($const_finish_date,14)),$const_finish_date))))';
$dictionary['m_CAMS']['fields']['projected_close_date']['enforced']=true;
$dictionary['m_CAMS']['fields']['projected_close_date']['type']='date';
$dictionary['m_CAMS']['fields']['projected_close_date']['audited']=true;
