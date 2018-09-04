<?php
 // created: 2018-06-19 12:52:39
$dictionary['m_CAMS']['fields']['price_per_foot']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['m_CAMS']['fields']['price_per_foot']['calculated']='1';
$dictionary['m_CAMS']['fields']['price_per_foot']['formula']='ifElse(equal($sales_stage,"Pending"),
divide($contract_price,$square_footage),
ifElse(equal($sales_stage,"Closed Won"),
divide($contract_price,$square_footage),
divide($list_price_c,$square_footage)
)
)';

 ?>