<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_upgrades_received.php

$dictionary['Opportunity']['fields']['upgrades_received']['name'] = 'upgrades_received';
$dictionary['Opportunity']['fields']['upgrades_received']['vname'] = 'LBL_UPGRADES_RECEIVED';

$dictionary['Opportunity']['fields']['upgrades_received']['type'] = 'currency';
$dictionary['Opportunity']['fields']['upgrades_received']['related_fields'] = ['currency_id','base_rate'];
$dictionary['Opportunity']['fields']['upgrades_received']['no_default'] = false;
$dictionary['Opportunity']['fields']['upgrades_received']['default'] = '0';
$dictionary['Opportunity']['fields']['upgrades_received']['len'] = 26;
$dictionary['Opportunity']['fields']['upgrades_received']['size'] = '20';
$dictionary['Opportunity']['fields']['upgrades_received']['precision'] = 6;


$dictionary['Opportunity']['fields']['upgrades_received']['importable'] = true;
$dictionary['Opportunity']['fields']['upgrades_received']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['upgrades_received']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['upgrades_received']['unified_search'] = false;
$dictionary['Opportunity']['fields']['upgrades_received']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['upgrades_received']['enable_range_search'] = false;

$dictionary['Opportunity']['fields']['upgrades_received']['comments'] = '';
$dictionary['Opportunity']['fields']['upgrades_received']['massupdate'] = true;
$dictionary['Opportunity']['fields']['upgrades_received']['audited'] = true;
$dictionary['Opportunity']['fields']['upgrades_received']['reportable'] = true;
$dictionary['Opportunity']['fields']['upgrades_received']['required'] = false;
$dictionary['Opportunity']['fields']['upgrades_received']['calculated'] = false;
$dictionary['Opportunity']['fields']['upgrades_received']['enforced'] = '';
$dictionary['Opportunity']['fields']['upgrades_received']['dependency'] = '';






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_phase.php


$dictionary['Opportunity']['fields']['phase']['name'] = 'phase';
$dictionary['Opportunity']['fields']['phase']['vname'] = 'LBL_PHASE';
$dictionary['Opportunity']['fields']['phase']['type'] = 'enum';
$dictionary['Opportunity']['fields']['phase']['options'] = 'phase_list';
$dictionary['Opportunity']['fields']['phase']['dependency'] = '';
$dictionary['Opportunity']['fields']['phase']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['phase']['len'] = 100;
$dictionary['Opportunity']['fields']['phase']['comments'] = '';
$dictionary['Opportunity']['fields']['phase']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['phase']['audited'] = true;
$dictionary['Opportunity']['fields']['phase']['reportable'] = true;
$dictionary['Opportunity']['fields']['phase']['unified_search'] = false;
$dictionary['Opportunity']['fields']['phase']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_contingency_expiration.php


$dictionary['Opportunity']['fields']['contingency_expiration']['name'] = 'contingency_expiration';
$dictionary['Opportunity']['fields']['contingency_expiration']['vname'] = 'LBL_CONTINGENCY_EXPIRATION';

$dictionary['Opportunity']['fields']['contingency_expiration']['type'] = 'date';
$dictionary['Opportunity']['fields']['contingency_expiration']['options'] = 'date_range_search_dom';


$dictionary['Opportunity']['fields']['contingency_expiration']['full_text_search'] = ['enabled' => true,'searchable' => false];
$dictionary['Opportunity']['fields']['contingency_expiration']['enable_range_search'] = true;
$dictionary['Opportunity']['fields']['contingency_expiration']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['contingency_expiration']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['contingency_expiration']['merge_filter'] = 'disabled';

$dictionary['Opportunity']['fields']['contingency_expiration']['importable'] = true;
$dictionary['Opportunity']['fields']['contingency_expiration']['required'] = false;
$dictionary['Opportunity']['fields']['contingency_expiration']['comments'] = '';
$dictionary['Opportunity']['fields']['contingency_expiration']['massupdate'] = true;
$dictionary['Opportunity']['fields']['contingency_expiration']['audited'] = true;
$dictionary['Opportunity']['fields']['contingency_expiration']['reportable'] = true;




?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_early_comm_payout.php

$dictionary['Opportunity']['fields']['early_comm_payout']['name'] = 'early_comm_payout';
$dictionary['Opportunity']['fields']['early_comm_payout']['vname'] = 'LBL_EARLY_COMM_PAYOUT';

$dictionary['Opportunity']['fields']['early_comm_payout']['type'] = 'currency';
$dictionary['Opportunity']['fields']['early_comm_payout']['related_fields'] = ['currency_id','base_rate'];
$dictionary['Opportunity']['fields']['early_comm_payout']['no_default'] = false;
$dictionary['Opportunity']['fields']['early_comm_payout']['default'] = '0';
$dictionary['Opportunity']['fields']['early_comm_payout']['len'] = 26;
$dictionary['Opportunity']['fields']['early_comm_payout']['size'] = '20';
$dictionary['Opportunity']['fields']['early_comm_payout']['precision'] = 6;


$dictionary['Opportunity']['fields']['early_comm_payout']['importable'] = true;
$dictionary['Opportunity']['fields']['early_comm_payout']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['early_comm_payout']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['early_comm_payout']['unified_search'] = false;
$dictionary['Opportunity']['fields']['early_comm_payout']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['early_comm_payout']['enable_range_search'] = false;

$dictionary['Opportunity']['fields']['early_comm_payout']['comments'] = '';
$dictionary['Opportunity']['fields']['early_comm_payout']['massupdate'] = true;
$dictionary['Opportunity']['fields']['early_comm_payout']['audited'] = true;
$dictionary['Opportunity']['fields']['early_comm_payout']['reportable'] = true;
$dictionary['Opportunity']['fields']['early_comm_payout']['required'] = false;
$dictionary['Opportunity']['fields']['early_comm_payout']['calculated'] = false;
$dictionary['Opportunity']['fields']['early_comm_payout']['enforced'] = '';
$dictionary['Opportunity']['fields']['early_comm_payout']['dependency'] = '';
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rental.php


$dictionary['Opportunity']['fields']['rental']['name'] = 'rental';
$dictionary['Opportunity']['fields']['rental']['vname'] = 'LBL_RENTAL';
$dictionary['Opportunity']['fields']['rental']['type'] = 'enum';
$dictionary['Opportunity']['fields']['rental']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['rental']['dependency'] = '';
$dictionary['Opportunity']['fields']['rental']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['rental']['len'] = 100;
$dictionary['Opportunity']['fields']['rental']['comments'] = '';
$dictionary['Opportunity']['fields']['rental']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['rental']['audited'] = false;
$dictionary['Opportunity']['fields']['rental']['reportable'] = true;
$dictionary['Opportunity']['fields']['rental']['unified_search'] = false;
$dictionary['Opportunity']['fields']['rental']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commission_note.php


$dictionary['Opportunity']['fields']['commission_note']['name'] = 'commission_note';
$dictionary['Opportunity']['fields']['commission_note']['vname'] = 'LBL_COMMISSION_NOTE';

$dictionary['Opportunity']['fields']['commission_note']['type'] = 'text';
$dictionary['Opportunity']['fields']['commission_note']['rows'] = 6;
$dictionary['Opportunity']['fields']['commission_note']['cols'] = 80;

$dictionary['Opportunity']['fields']['commission_note']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['commission_note']['importable'] = true;

$dictionary['Opportunity']['fields']['commission_note']['comments'] = '';
$dictionary['Opportunity']['fields']['commission_note']['massupdate'] = true;
$dictionary['Opportunity']['fields']['commission_note']['audited'] = false;
$dictionary['Opportunity']['fields']['commission_note']['reportable'] = true;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_date_closed_timestamp.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['date_closed_timestamp']['audited']=false;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed_timestamp']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed_timestamp']['formula']='timestamp($date_closed)';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_total_revenue_line_items.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['total_revenue_line_items']['audited']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['massupdate']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['total_revenue_line_items']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['total_revenue_line_items']['reportable']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['min']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['max']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_em_comments.php


$dictionary['Opportunity']['fields']['em_comments']['name'] = 'em_comments';
$dictionary['Opportunity']['fields']['em_comments']['vname'] = 'LBL_EM_COMMENTS';

$dictionary['Opportunity']['fields']['em_comments']['type'] = 'text';
$dictionary['Opportunity']['fields']['em_comments']['rows'] = 6;
$dictionary['Opportunity']['fields']['em_comments']['cols'] = 80;

$dictionary['Opportunity']['fields']['em_comments']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['em_comments']['importable'] = true;

$dictionary['Opportunity']['fields']['em_comments']['comments'] = '';
$dictionary['Opportunity']['fields']['em_comments']['massupdate'] = true;
$dictionary['Opportunity']['fields']['em_comments']['audited'] = false;
$dictionary['Opportunity']['fields']['em_comments']['reportable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_financing.php


$dictionary['Opportunity']['fields']['financing']['name'] = 'financing';
$dictionary['Opportunity']['fields']['financing']['vname'] = 'LBL_FINANCING';
$dictionary['Opportunity']['fields']['financing']['type'] = 'enum';
$dictionary['Opportunity']['fields']['financing']['options'] = 'financing_list';
$dictionary['Opportunity']['fields']['financing']['dependency'] = '';
$dictionary['Opportunity']['fields']['financing']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['financing']['len'] = 100;
$dictionary['Opportunity']['fields']['financing']['comments'] = '';
$dictionary['Opportunity']['fields']['financing']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['financing']['audited'] = false;
$dictionary['Opportunity']['fields']['financing']['reportable'] = true;
$dictionary['Opportunity']['fields']['financing']['unified_search'] = false;
$dictionary['Opportunity']['fields']['financing']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_status.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['sales_status']['audited']=false;
$dictionary['Opportunity']['fields']['sales_status']['massupdate']=false;
$dictionary['Opportunity']['fields']['sales_status']['importable']=false;
$dictionary['Opportunity']['fields']['sales_status']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_status']['reportable']=false;
$dictionary['Opportunity']['fields']['sales_status']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_status']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_status']['studio']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_spec_home_ar.php


$dictionary['Opportunity']['fields']['spec_home_ar']['name'] = 'spec_home_ar';
$dictionary['Opportunity']['fields']['spec_home_ar']['vname'] = 'LBL_SPEC_HOME_AR';
$dictionary['Opportunity']['fields']['spec_home_ar']['type'] = 'enum';
$dictionary['Opportunity']['fields']['spec_home_ar']['options'] = 'yes_no_na_list';
$dictionary['Opportunity']['fields']['spec_home_ar']['dependency'] = '';
$dictionary['Opportunity']['fields']['spec_home_ar']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['spec_home_ar']['len'] = 100;
$dictionary['Opportunity']['fields']['spec_home_ar']['comments'] = '';
$dictionary['Opportunity']['fields']['spec_home_ar']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['spec_home_ar']['audited'] = false;
$dictionary['Opportunity']['fields']['spec_home_ar']['reportable'] = true;
$dictionary['Opportunity']['fields']['spec_home_ar']['unified_search'] = false;
$dictionary['Opportunity']['fields']['spec_home_ar']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_buy_sell_12mo.php


$dictionary['Opportunity']['fields']['buy_sell_12mo']['name'] = 'buy_sell_12mo';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['vname'] = 'LBL_BUY_SELL_12MO';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['type'] = 'enum';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['dependency'] = '';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['len'] = 100;
$dictionary['Opportunity']['fields']['buy_sell_12mo']['comments'] = '';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['buy_sell_12mo']['audited'] = false;
$dictionary['Opportunity']['fields']['buy_sell_12mo']['reportable'] = true;
$dictionary['Opportunity']['fields']['buy_sell_12mo']['unified_search'] = false;
$dictionary['Opportunity']['fields']['buy_sell_12mo']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_escrow_open.php

$dictionary['Opportunity']['fields']['escrow_open']['name'] = 'escrow_open';
$dictionary['Opportunity']['fields']['escrow_open']['vname'] = 'LBL_ESCROW_OPEN';
$dictionary['Opportunity']['fields']['escrow_open']['type'] = 'enum';
$dictionary['Opportunity']['fields']['escrow_open']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['escrow_open']['dependency'] = '';
$dictionary['Opportunity']['fields']['escrow_open']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['escrow_open']['len'] = 100;
$dictionary['Opportunity']['fields']['escrow_open']['comments'] = '';
$dictionary['Opportunity']['fields']['escrow_open']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['escrow_open']['audited'] = true;
$dictionary['Opportunity']['fields']['escrow_open']['reportable'] = true;
$dictionary['Opportunity']['fields']['escrow_open']['unified_search'] = false;
$dictionary['Opportunity']['fields']['escrow_open']['importable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_elevation.php


$dictionary['Opportunity']['fields']['elevation']['name'] = 'elevation';
$dictionary['Opportunity']['fields']['elevation']['vname'] = 'LBL_ELEVATION';
$dictionary['Opportunity']['fields']['elevation']['type'] = 'enum';
$dictionary['Opportunity']['fields']['elevation']['options'] = 'elevation_list';
$dictionary['Opportunity']['fields']['elevation']['dependency'] = '';
$dictionary['Opportunity']['fields']['elevation']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['elevation']['len'] = 100;
$dictionary['Opportunity']['fields']['elevation']['comments'] = '';
$dictionary['Opportunity']['fields']['elevation']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['elevation']['audited'] = false;
$dictionary['Opportunity']['fields']['elevation']['reportable'] = true;
$dictionary['Opportunity']['fields']['elevation']['unified_search'] = false;
$dictionary['Opportunity']['fields']['elevation']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_relocating_from.php


$dictionary['Opportunity']['fields']['relocating_from']['name'] = 'relocating_from';
$dictionary['Opportunity']['fields']['relocating_from']['vname'] = 'LBL_RELOCATING_FROM';

$dictionary['Opportunity']['fields']['relocating_from']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['relocating_from']['len'] = 100;

$dictionary['Opportunity']['fields']['relocating_from']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['relocating_from']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['relocating_from']['importable'] = true;

$dictionary['Opportunity']['fields']['relocating_from']['comments'] = '';
$dictionary['Opportunity']['fields']['relocating_from']['massupdate'] = true;
$dictionary['Opportunity']['fields']['relocating_from']['audited'] = false;
$dictionary['Opportunity']['fields']['relocating_from']['reportable'] = true;



?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_inspection.php

$dictionary['Opportunity']['fields']['inspection']['name'] = 'inspection';
$dictionary['Opportunity']['fields']['inspection']['vname'] = 'LBL_INSPECTION';
$dictionary['Opportunity']['fields']['inspection']['type'] = 'enum';
$dictionary['Opportunity']['fields']['inspection']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['inspection']['dependency'] = '';
$dictionary['Opportunity']['fields']['inspection']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['inspection']['len'] = 100;
$dictionary['Opportunity']['fields']['inspection']['comments'] = '';
$dictionary['Opportunity']['fields']['inspection']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['inspection']['audited'] = yes;
$dictionary['Opportunity']['fields']['inspection']['reportable'] = true;
$dictionary['Opportunity']['fields']['inspection']['unified_search'] = false;
$dictionary['Opportunity']['fields']['inspection']['importable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_signed_around.php


$dictionary['Opportunity']['fields']['signed_around']['name'] = 'signed_around';
$dictionary['Opportunity']['fields']['signed_around']['vname'] = 'LBL_SIGNED_AROUND';
$dictionary['Opportunity']['fields']['signed_around']['type'] = 'enum';
$dictionary['Opportunity']['fields']['signed_around']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['signed_around']['dependency'] = '';
$dictionary['Opportunity']['fields']['signed_around']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['signed_around']['len'] = 100;
$dictionary['Opportunity']['fields']['signed_around']['comments'] = '';
$dictionary['Opportunity']['fields']['signed_around']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['signed_around']['audited'] = true;
$dictionary['Opportunity']['fields']['signed_around']['reportable'] = true;
$dictionary['Opportunity']['fields']['signed_around']['unified_search'] = false;
$dictionary['Opportunity']['fields']['signed_around']['importable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_amount_source.php


$dictionary['Opportunity']['fields']['amount_source']['name'] = 'amount_source';
$dictionary['Opportunity']['fields']['amount_source']['vname'] = 'LBL_AMOUNT_SOURCE';

$dictionary['Opportunity']['fields']['amount_source']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['amount_source']['len'] = 100;

$dictionary['Opportunity']['fields']['amount_source']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['amount_source']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['amount_source']['importable'] = true;

$dictionary['Opportunity']['fields']['amount_source']['comments'] = '';
$dictionary['Opportunity']['fields']['amount_source']['massupdate'] = true;
$dictionary['Opportunity']['fields']['amount_source']['audited'] = false;
$dictionary['Opportunity']['fields']['amount_source']['reportable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_lead_conversion_time.php

$dictionary['Opportunity']['fields']['lead_conversion_time']['name'] = 'lead_conversion_time';
$dictionary['Opportunity']['fields']['lead_conversion_time']['vname'] = 'LBL_LEAD_CONVERSION_TIME';

$dictionary['Opportunity']['fields']['lead_conversion_time']['type'] = 'int';
$dictionary['Opportunity']['fields']['lead_conversion_time']['dbType'] = 'double';
$dictionary['Opportunity']['fields']['lead_conversion_time']['len'] = 100;
$dictionary['Opportunity']['fields']['lead_conversion_time']['enable_range_search'] = false;
$dictionary['Opportunity']['fields']['lead_conversion_time']['min'] = false;
$dictionary['Opportunity']['fields']['lead_conversion_time']['max'] = false;
$dictionary['Opportunity']['fields']['lead_conversion_time']['disable_num_format'] = '';


$dictionary['Opportunity']['fields']['lead_conversion_time']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['lead_conversion_time']['importable'] = true;
$dictionary['Opportunity']['fields']['lead_conversion_time']['duplicate_merge'] = enabled;
$dictionary['Opportunity']['fields']['lead_conversion_time']['duplicate_merge_dom_value'] = 1;

$dictionary['Opportunity']['fields']['lead_conversion_time']['comments'] = '';
$dictionary['Opportunity']['fields']['lead_conversion_time']['massupdate'] = true;
$dictionary['Opportunity']['fields']['lead_conversion_time']['audited'] = false;
$dictionary['Opportunity']['fields']['lead_conversion_time']['reportable'] = true;
$dictionary['Opportunity']['fields']['lead_conversion_time']['studio'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_last_exhibit.php


$dictionary['Opportunity']['fields']['last_exhibit']['name'] = 'last_exhibit';
$dictionary['Opportunity']['fields']['last_exhibit']['vname'] = 'LBL_LAST_EXHIBIT';

$dictionary['Opportunity']['fields']['last_exhibit']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['last_exhibit']['len'] = 100;

$dictionary['Opportunity']['fields']['last_exhibit']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['last_exhibit']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['last_exhibit']['importable'] = true;

$dictionary['Opportunity']['fields']['last_exhibit']['comments'] = '';
$dictionary['Opportunity']['fields']['last_exhibit']['massupdate'] = true;
$dictionary['Opportunity']['fields']['last_exhibit']['audited'] = false;
$dictionary['Opportunity']['fields']['last_exhibit']['reportable'] = true;



?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_best_case.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['best_case']['audited']=true;
$dictionary['Opportunity']['fields']['best_case']['massupdate']=true;
$dictionary['Opportunity']['fields']['best_case']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['best_case']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['best_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['best_case']['calculated']=false;
$dictionary['Opportunity']['fields']['best_case']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['best_case']['default']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_transaction_id.php

$dictionary['Opportunity']['fields']['transaction_id']['name'] = 'transaction_id';
$dictionary['Opportunity']['fields']['transaction_id']['vname'] = 'LBL_TRANSACTION_ID';

$dictionary['Opportunity']['fields']['transaction_id']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['transaction_id']['len'] = 100;

$dictionary['Opportunity']['fields']['transaction_id']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['transaction_id']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['transaction_id']['importable'] = true;

$dictionary['Opportunity']['fields']['transaction_id']['comments'] = '';
$dictionary['Opportunity']['fields']['transaction_id']['massupdate'] = true;
$dictionary['Opportunity']['fields']['transaction_id']['audited'] = true;
$dictionary['Opportunity']['fields']['transaction_id']['reportable'] = true;



?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_prequal.php


$dictionary['Opportunity']['fields']['prequal']['name'] = 'prequal';
$dictionary['Opportunity']['fields']['prequal']['vname'] = 'LBL_PREQUAL';
$dictionary['Opportunity']['fields']['prequal']['type'] = 'enum';
$dictionary['Opportunity']['fields']['prequal']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['prequal']['dependency'] = '';
$dictionary['Opportunity']['fields']['prequal']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['prequal']['len'] = 100;
$dictionary['Opportunity']['fields']['prequal']['comments'] = '';
$dictionary['Opportunity']['fields']['prequal']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['prequal']['audited'] = true;
$dictionary['Opportunity']['fields']['prequal']['reportable'] = true;
$dictionary['Opportunity']['fields']['prequal']['unified_search'] = false;
$dictionary['Opportunity']['fields']['prequal']['importable'] = true;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commit_stage.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['commit_stage']['audited']=false;
$dictionary['Opportunity']['fields']['commit_stage']['massupdate']=true;
$dictionary['Opportunity']['fields']['commit_stage']['options']='';
$dictionary['Opportunity']['fields']['commit_stage']['comments']='Forecast commit ranges: Include, Likely, Omit etc.';
$dictionary['Opportunity']['fields']['commit_stage']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['commit_stage']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['commit_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['commit_stage']['reportable']=true;
$dictionary['Opportunity']['fields']['commit_stage']['enforced']=false;
$dictionary['Opportunity']['fields']['commit_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['commit_stage']['studio']=true;
$dictionary['Opportunity']['fields']['commit_stage']['related_fields']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_em_due.php

$dictionary['Opportunity']['fields']['em_due']['name'] = 'em_due';
$dictionary['Opportunity']['fields']['em_due']['vname'] = 'LBL_EM_DUE';

$dictionary['Opportunity']['fields']['em_due']['type'] = 'currency';
$dictionary['Opportunity']['fields']['em_due']['related_fields'] = ['currency_id','base_rate'];
$dictionary['Opportunity']['fields']['em_due']['no_default'] = false;
$dictionary['Opportunity']['fields']['em_due']['default'] = '0';
$dictionary['Opportunity']['fields']['em_due']['len'] = 26;
$dictionary['Opportunity']['fields']['em_due']['size'] = '20';
$dictionary['Opportunity']['fields']['em_due']['precision'] = 6;


$dictionary['Opportunity']['fields']['em_due']['importable'] = true;
$dictionary['Opportunity']['fields']['em_due']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['em_due']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['em_due']['unified_search'] = false;
$dictionary['Opportunity']['fields']['em_due']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['em_due']['enable_range_search'] = false;

$dictionary['Opportunity']['fields']['em_due']['comments'] = '';
$dictionary['Opportunity']['fields']['em_due']['massupdate'] = true;
$dictionary['Opportunity']['fields']['em_due']['audited'] = true;
$dictionary['Opportunity']['fields']['em_due']['reportable'] = true;
$dictionary['Opportunity']['fields']['em_due']['required'] = false;
$dictionary['Opportunity']['fields']['em_due']['calculated'] = false;
$dictionary['Opportunity']['fields']['em_due']['enforced'] = '';
$dictionary['Opportunity']['fields']['em_due']['dependency'] = '';





?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_promotion.php


$dictionary['Opportunity']['fields']['promotion']['name'] = 'promotion';
$dictionary['Opportunity']['fields']['promotion']['vname'] = 'LBL_PROMOTION';
$dictionary['Opportunity']['fields']['promotion']['type'] = 'enum';
$dictionary['Opportunity']['fields']['promotion']['options'] = 'promotion_list';
$dictionary['Opportunity']['fields']['promotion']['dependency'] = '';
$dictionary['Opportunity']['fields']['promotion']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['promotion']['len'] = 100;
$dictionary['Opportunity']['fields']['promotion']['comments'] = '';
$dictionary['Opportunity']['fields']['promotion']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['promotion']['audited'] = false;
$dictionary['Opportunity']['fields']['promotion']['reportable'] = true;
$dictionary['Opportunity']['fields']['promotion']['unified_search'] = false;
$dictionary['Opportunity']['fields']['promotion']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_contingency_notes.php


$dictionary['Opportunity']['fields']['contingency_notes']['name'] = 'contingency_notes';
$dictionary['Opportunity']['fields']['contingency_notes']['vname'] = 'LBL_CONTINGENCY_NOTES';

$dictionary['Opportunity']['fields']['contingency_notes']['type'] = 'text';
$dictionary['Opportunity']['fields']['contingency_notes']['rows'] = 6;
$dictionary['Opportunity']['fields']['contingency_notes']['cols'] = 80;

$dictionary['Opportunity']['fields']['contingency_notes']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['contingency_notes']['importable'] = true;

$dictionary['Opportunity']['fields']['contingency_notes']['comments'] = '';
$dictionary['Opportunity']['fields']['contingency_notes']['massupdate'] = true;
$dictionary['Opportunity']['fields']['contingency_notes']['audited'] = false;
$dictionary['Opportunity']['fields']['contingency_notes']['reportable'] = true;
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_overall_sales_duration.php

$dictionary['Opportunity']['fields']['overall_sales_duration']['name'] = 'overall_sales_duration';
$dictionary['Opportunity']['fields']['overall_sales_duration']['vname'] = 'LBL_OVERALL_SALES_DURATION';

$dictionary['Opportunity']['fields']['overall_sales_duration']['type'] = 'int';
$dictionary['Opportunity']['fields']['overall_sales_duration']['dbType'] = 'double';
$dictionary['Opportunity']['fields']['overall_sales_duration']['len'] = 100;
$dictionary['Opportunity']['fields']['overall_sales_duration']['enable_range_search'] = false;
$dictionary['Opportunity']['fields']['overall_sales_duration']['min'] = false;
$dictionary['Opportunity']['fields']['overall_sales_duration']['max'] = false;
$dictionary['Opportunity']['fields']['overall_sales_duration']['disable_num_format'] = '';


$dictionary['Opportunity']['fields']['overall_sales_duration']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['overall_sales_duration']['importable'] = true;
$dictionary['Opportunity']['fields']['overall_sales_duration']['duplicate_merge'] = enabled;
$dictionary['Opportunity']['fields']['overall_sales_duration']['duplicate_merge_dom_value'] = 1;

$dictionary['Opportunity']['fields']['overall_sales_duration']['comments'] = '';
$dictionary['Opportunity']['fields']['overall_sales_duration']['massupdate'] = true;
$dictionary['Opportunity']['fields']['overall_sales_duration']['audited'] = false;
$dictionary['Opportunity']['fields']['overall_sales_duration']['reportable'] = true;
$dictionary['Opportunity']['fields']['overall_sales_duration']['studio'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_notice30_sent.php

$dictionary['Opportunity']['fields']['notice30_sent']['name'] = 'notice30_sent';
$dictionary['Opportunity']['fields']['notice30_sent']['vname'] = 'LBL_NOTICE30_SENT';
$dictionary['Opportunity']['fields']['notice30_sent']['type'] = 'enum';
$dictionary['Opportunity']['fields']['notice30_sent']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['notice30_sent']['dependency'] = '';
$dictionary['Opportunity']['fields']['notice30_sent']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['notice30_sent']['len'] = 100;
$dictionary['Opportunity']['fields']['notice30_sent']['comments'] = '';
$dictionary['Opportunity']['fields']['notice30_sent']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['notice30_sent']['audited'] = yes;
$dictionary['Opportunity']['fields']['notice30_sent']['reportable'] = true;
$dictionary['Opportunity']['fields']['notice30_sent']['unified_search'] = false;
$dictionary['Opportunity']['fields']['notice30_sent']['importable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_relocating.php


$dictionary['Opportunity']['fields']['relocating']['name'] = 'relocating';
$dictionary['Opportunity']['fields']['relocating']['vname'] = 'LBL_RELOCATING';
$dictionary['Opportunity']['fields']['relocating']['type'] = 'enum';
$dictionary['Opportunity']['fields']['relocating']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['relocating']['dependency'] = '';
$dictionary['Opportunity']['fields']['relocating']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['relocating']['len'] = 100;
$dictionary['Opportunity']['fields']['relocating']['comments'] = '';
$dictionary['Opportunity']['fields']['relocating']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['relocating']['audited'] = false;
$dictionary['Opportunity']['fields']['relocating']['reportable'] = true;
$dictionary['Opportunity']['fields']['relocating']['unified_search'] = false;
$dictionary['Opportunity']['fields']['relocating']['importable'] = true;






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_listing_firm_comm.php

 // created: 2017-08-17 15:18:21
$dictionary['Opportunity']['fields']['listing_firm_comm']['name']='listing_firm_comm';
$dictionary['Opportunity']['fields']['listing_firm_comm']['vname']='LBL_LISTING_FIRM_COMM';
$dictionary['Opportunity']['fields']['listing_firm_comm']['type']='currency';
$dictionary['Opportunity']['fields']['listing_firm_comm']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['listing_firm_comm']['no_default']=false;
$dictionary['Opportunity']['fields']['listing_firm_comm']['len']=26;
$dictionary['Opportunity']['fields']['listing_firm_comm']['size']='20';
$dictionary['Opportunity']['fields']['listing_firm_comm']['precision']=6;
$dictionary['Opportunity']['fields']['listing_firm_comm']['importable']='false';
$dictionary['Opportunity']['fields']['listing_firm_comm']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['listing_firm_comm']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['listing_firm_comm']['unified_search']=false;
$dictionary['Opportunity']['fields']['listing_firm_comm']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['listing_firm_comm']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['listing_firm_comm']['comments']='';
$dictionary['Opportunity']['fields']['listing_firm_comm']['massupdate']=false;
$dictionary['Opportunity']['fields']['listing_firm_comm']['audited']=true;
$dictionary['Opportunity']['fields']['listing_firm_comm']['reportable']=true;
$dictionary['Opportunity']['fields']['listing_firm_comm']['required']=false;
$dictionary['Opportunity']['fields']['listing_firm_comm']['calculated']='1';
$dictionary['Opportunity']['fields']['listing_firm_comm']['enforced']=true;
$dictionary['Opportunity']['fields']['listing_firm_comm']['formula']='multiply(subtract($amount,$seller_concessions),divide($listing_commission_percent,100))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_upgrades_received_date.php


$dictionary['Opportunity']['fields']['upgrades_received_date']['name'] = 'upgrades_received_date';
$dictionary['Opportunity']['fields']['upgrades_received_date']['vname'] = 'LBL_UPGRADES_RECEIVED_DATE';

$dictionary['Opportunity']['fields']['upgrades_received_date']['type'] = 'date';
$dictionary['Opportunity']['fields']['upgrades_received_date']['options'] = 'date_range_search_dom';


$dictionary['Opportunity']['fields']['upgrades_received_date']['full_text_search'] = ['enabled' => true,'searchable' => false];
$dictionary['Opportunity']['fields']['upgrades_received_date']['enable_range_search'] = true;
$dictionary['Opportunity']['fields']['upgrades_received_date']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['upgrades_received_date']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['upgrades_received_date']['merge_filter'] = 'disabled';

$dictionary['Opportunity']['fields']['upgrades_received_date']['importable'] = true;
$dictionary['Opportunity']['fields']['upgrades_received_date']['required'] = false;
$dictionary['Opportunity']['fields']['upgrades_received_date']['comments'] = '';
$dictionary['Opportunity']['fields']['upgrades_received_date']['massupdate'] = true;
$dictionary['Opportunity']['fields']['upgrades_received_date']['audited'] = true;
$dictionary['Opportunity']['fields']['upgrades_received_date']['reportable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_early_comm_date.php


$dictionary['Opportunity']['fields']['early_comm_date']['name'] = 'early_comm_date';
$dictionary['Opportunity']['fields']['early_comm_date']['vname'] = 'LBL_EARLY_COMM_DATE';

$dictionary['Opportunity']['fields']['early_comm_date']['type'] = 'date';
$dictionary['Opportunity']['fields']['early_comm_date']['options'] = 'date_range_search_dom';


$dictionary['Opportunity']['fields']['early_comm_date']['full_text_search'] = ['enabled' => true,'searchable' => false];
$dictionary['Opportunity']['fields']['early_comm_date']['enable_range_search'] = true;
$dictionary['Opportunity']['fields']['early_comm_date']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['early_comm_date']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['early_comm_date']['merge_filter'] = 'disabled';

$dictionary['Opportunity']['fields']['early_comm_date']['importable'] = true;
$dictionary['Opportunity']['fields']['early_comm_date']['required'] = false;
$dictionary['Opportunity']['fields']['early_comm_date']['comments'] = '';
$dictionary['Opportunity']['fields']['early_comm_date']['massupdate'] = true;
$dictionary['Opportunity']['fields']['early_comm_date']['audited'] = true;
$dictionary['Opportunity']['fields']['early_comm_date']['reportable'] = true;




?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_closed_revenue_line_items.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['audited']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['massupdate']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['reportable']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['min']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['max']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_cycle_duration.php

$dictionary['Opportunity']['fields']['sales_cycle_duration']['name'] = 'sales_cycle_duration';
$dictionary['Opportunity']['fields']['sales_cycle_duration']['vname'] = 'LBL_SALES_CYCLE_DURATION';

$dictionary['Opportunity']['fields']['sales_cycle_duration']['type'] = 'int';
$dictionary['Opportunity']['fields']['sales_cycle_duration']['dbType'] = 'double';
$dictionary['Opportunity']['fields']['sales_cycle_duration']['len'] = 100;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['enable_range_search'] = false;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['min'] = false;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['max'] = false;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['disable_num_format'] = '';


$dictionary['Opportunity']['fields']['sales_cycle_duration']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['sales_cycle_duration']['importable'] = true;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['duplicate_merge'] = enabled;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['duplicate_merge_dom_value'] = 1;

$dictionary['Opportunity']['fields']['sales_cycle_duration']['comments'] = '';
$dictionary['Opportunity']['fields']['sales_cycle_duration']['massupdate'] = true;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['audited'] = false;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['reportable'] = true;
$dictionary['Opportunity']['fields']['sales_cycle_duration']['studio'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_other_builders.php


$dictionary['Opportunity']['fields']['other_builders']['name'] = 'other_builders';
$dictionary['Opportunity']['fields']['other_builders']['vname'] = 'LBL_OTHER_BUILDERS';

$dictionary['Opportunity']['fields']['other_builders']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['other_builders']['len'] = 100;

$dictionary['Opportunity']['fields']['other_builders']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['other_builders']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['other_builders']['importable'] = true;

$dictionary['Opportunity']['fields']['other_builders']['comments'] = '';
$dictionary['Opportunity']['fields']['other_builders']['massupdate'] = true;
$dictionary['Opportunity']['fields']['other_builders']['audited'] = false;
$dictionary['Opportunity']['fields']['other_builders']['reportable'] = true;



?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_last_addendum.php


$dictionary['Opportunity']['fields']['last_addendum']['name'] = 'last_addendum';
$dictionary['Opportunity']['fields']['last_addendum']['vname'] = 'LBL_LAST_ADDENDUM';

$dictionary['Opportunity']['fields']['last_addendum']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['last_addendum']['len'] = 100;

$dictionary['Opportunity']['fields']['last_addendum']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['last_addendum']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['last_addendum']['importable'] = true;

$dictionary['Opportunity']['fields']['last_addendum']['comments'] = '';
$dictionary['Opportunity']['fields']['last_addendum']['massupdate'] = true;
$dictionary['Opportunity']['fields']['last_addendum']['audited'] = false;
$dictionary['Opportunity']['fields']['last_addendum']['reportable'] = true;



?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_total_upgrades.php


$dictionary['Opportunity']['fields']['total_upgrades']['name'] = 'total_upgrades';
$dictionary['Opportunity']['fields']['total_upgrades']['vname'] = 'LBL_TOTAL_UPGRADES';

$dictionary['Opportunity']['fields']['total_upgrades']['type'] = 'currency';
$dictionary['Opportunity']['fields']['total_upgrades']['related_fields'] = ['currency_id','base_rate'];
$dictionary['Opportunity']['fields']['total_upgrades']['no_default'] = false;
$dictionary['Opportunity']['fields']['total_upgrades']['default'] = '0';
$dictionary['Opportunity']['fields']['total_upgrades']['len'] = 26;
$dictionary['Opportunity']['fields']['total_upgrades']['size'] = '20';
$dictionary['Opportunity']['fields']['total_upgrades']['precision'] = 6;


$dictionary['Opportunity']['fields']['total_upgrades']['importable'] = true;
$dictionary['Opportunity']['fields']['total_upgrades']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['total_upgrades']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['total_upgrades']['unified_search'] = false;
$dictionary['Opportunity']['fields']['total_upgrades']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['total_upgrades']['enable_range_search'] = false;

$dictionary['Opportunity']['fields']['total_upgrades']['comments'] = '';
$dictionary['Opportunity']['fields']['total_upgrades']['massupdate'] = true;
$dictionary['Opportunity']['fields']['total_upgrades']['audited'] = false;
$dictionary['Opportunity']['fields']['total_upgrades']['reportable'] = true;
$dictionary['Opportunity']['fields']['total_upgrades']['required'] = false;
$dictionary['Opportunity']['fields']['total_upgrades']['calculated'] = false;
$dictionary['Opportunity']['fields']['total_upgrades']['enforced'] = '';
$dictionary['Opportunity']['fields']['total_upgrades']['dependency'] = '';






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_selling_side.php

$dictionary['Opportunity']['fields']['selling_side']['name'] = 'selling_side';
$dictionary['Opportunity']['fields']['selling_side']['vname'] = 'LBL_SELLING_SIDE';
$dictionary['Opportunity']['fields']['selling_side']['type'] = 'enum';
$dictionary['Opportunity']['fields']['selling_side']['options'] = 'selling_side_list';
$dictionary['Opportunity']['fields']['selling_side']['dependency'] = '';
$dictionary['Opportunity']['fields']['selling_side']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['selling_side']['len'] = 100;
$dictionary['Opportunity']['fields']['selling_side']['comments'] = '';
$dictionary['Opportunity']['fields']['selling_side']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['selling_side']['audited'] = true;
$dictionary['Opportunity']['fields']['selling_side']['reportable'] = true;
$dictionary['Opportunity']['fields']['selling_side']['unified_search'] = false;
$dictionary['Opportunity']['fields']['selling_side']['importable'] = true;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_upgrades_comments.php

$dictionary['Opportunity']['fields']['upgrades_comments']['name'] = 'upgrades_comments';
$dictionary['Opportunity']['fields']['upgrades_comments']['vname'] = 'LBL_UPGRADES_COMMENTS';

$dictionary['Opportunity']['fields']['upgrades_comments']['type'] = 'text';
$dictionary['Opportunity']['fields']['upgrades_comments']['rows'] = 6;
$dictionary['Opportunity']['fields']['upgrades_comments']['cols'] = 80;

$dictionary['Opportunity']['fields']['upgrades_comments']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['upgrades_comments']['importable'] = true;

$dictionary['Opportunity']['fields']['upgrades_comments']['comments'] = '';
$dictionary['Opportunity']['fields']['upgrades_comments']['massupdate'] = true;
$dictionary['Opportunity']['fields']['upgrades_comments']['audited'] = false;
$dictionary['Opportunity']['fields']['upgrades_comments']['reportable'] = true;





?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_seller_concessions.php


$dictionary['Opportunity']['fields']['seller_concessions']['name'] = 'seller_concessions';
$dictionary['Opportunity']['fields']['seller_concessions']['vname'] = 'LBL_SELLER_CONCESSIONS';

$dictionary['Opportunity']['fields']['seller_concessions']['type'] = 'currency';
$dictionary['Opportunity']['fields']['seller_concessions']['related_fields'] = ['currency_id','base_rate'];
$dictionary['Opportunity']['fields']['seller_concessions']['no_default'] = false;
$dictionary['Opportunity']['fields']['seller_concessions']['default'] = '0';
$dictionary['Opportunity']['fields']['seller_concessions']['len'] = 26;
$dictionary['Opportunity']['fields']['seller_concessions']['size'] = '20';
$dictionary['Opportunity']['fields']['seller_concessions']['precision'] = 6;


$dictionary['Opportunity']['fields']['seller_concessions']['importable'] = true;
$dictionary['Opportunity']['fields']['seller_concessions']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['seller_concessions']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['seller_concessions']['unified_search'] = false;
$dictionary['Opportunity']['fields']['seller_concessions']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['seller_concessions']['enable_range_search'] = false;

$dictionary['Opportunity']['fields']['seller_concessions']['comments'] = '';
$dictionary['Opportunity']['fields']['seller_concessions']['massupdate'] = true;
$dictionary['Opportunity']['fields']['seller_concessions']['audited'] = true;
$dictionary['Opportunity']['fields']['seller_concessions']['reportable'] = true;
$dictionary['Opportunity']['fields']['seller_concessions']['required'] = false;
$dictionary['Opportunity']['fields']['seller_concessions']['calculated'] = false;
$dictionary['Opportunity']['fields']['seller_concessions']['enforced'] = '';
$dictionary['Opportunity']['fields']['seller_concessions']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_precon.php


$dictionary['Opportunity']['fields']['precon']['name'] = 'precon';
$dictionary['Opportunity']['fields']['precon']['vname'] = 'LBL_PRECON';

$dictionary['Opportunity']['fields']['precon']['type'] = 'datetime';
$dictionary['Opportunity']['fields']['precon']['options'] = 'date_range_search_dom';


$dictionary['Opportunity']['fields']['precon']['full_text_search'] = ['enabled' => true,'searchable' => false];
$dictionary['Opportunity']['fields']['precon']['enable_range_search'] = true;
$dictionary['Opportunity']['fields']['precon']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['precon']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['precon']['merge_filter'] = 'disabled';

$dictionary['Opportunity']['fields']['precon']['importable'] = true;
$dictionary['Opportunity']['fields']['precon']['required'] = false;
$dictionary['Opportunity']['fields']['precon']['comments'] = '';
$dictionary['Opportunity']['fields']['precon']['massupdate'] = true;
$dictionary['Opportunity']['fields']['precon']['audited'] = true;
$dictionary['Opportunity']['fields']['precon']['reportable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_orientation.php


$dictionary['Opportunity']['fields']['orientation']['name'] = 'orientation';
$dictionary['Opportunity']['fields']['orientation']['vname'] = 'LBL_ORIENTATION';

$dictionary['Opportunity']['fields']['orientation']['type'] = 'datetime';
$dictionary['Opportunity']['fields']['orientation']['options'] = 'date_range_search_dom';


$dictionary['Opportunity']['fields']['orientation']['full_text_search'] = ['enabled' => true,'searchable' => false];
$dictionary['Opportunity']['fields']['orientation']['enable_range_search'] = true;
$dictionary['Opportunity']['fields']['orientation']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['orientation']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['orientation']['merge_filter'] = 'disabled';

$dictionary['Opportunity']['fields']['orientation']['importable'] = true;
$dictionary['Opportunity']['fields']['orientation']['required'] = false;
$dictionary['Opportunity']['fields']['orientation']['comments'] = '';
$dictionary['Opportunity']['fields']['orientation']['massupdate'] = true;
$dictionary['Opportunity']['fields']['orientation']['audited'] = true;
$dictionary['Opportunity']['fields']['orientation']['reportable'] = true;




?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_em_received_date.php


$dictionary['Opportunity']['fields']['em_received_date']['name'] = 'em_received_date';
$dictionary['Opportunity']['fields']['em_received_date']['vname'] = 'LBL_EM_RECEIVED_DATE';

$dictionary['Opportunity']['fields']['em_received_date']['type'] = 'date';
$dictionary['Opportunity']['fields']['em_received_date']['options'] = 'date_range_search_dom';


$dictionary['Opportunity']['fields']['em_received_date']['full_text_search'] = ['enabled' => true,'searchable' => false];
$dictionary['Opportunity']['fields']['em_received_date']['enable_range_search'] = true;
$dictionary['Opportunity']['fields']['em_received_date']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['em_received_date']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['em_received_date']['merge_filter'] = 'disabled';

$dictionary['Opportunity']['fields']['em_received_date']['importable'] = true;
$dictionary['Opportunity']['fields']['em_received_date']['required'] = false;
$dictionary['Opportunity']['fields']['em_received_date']['comments'] = '';
$dictionary['Opportunity']['fields']['em_received_date']['massupdate'] = true;
$dictionary['Opportunity']['fields']['em_received_date']['audited'] = true;
$dictionary['Opportunity']['fields']['em_received_date']['reportable'] = true;




?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_upgrades_due.php


$dictionary['Opportunity']['fields']['upgrades_due']['name'] = 'upgrades_due';
$dictionary['Opportunity']['fields']['upgrades_due']['vname'] = 'LBL_UPGRADES_DUE';

$dictionary['Opportunity']['fields']['upgrades_due']['type'] = 'currency';
$dictionary['Opportunity']['fields']['upgrades_due']['related_fields'] = ['currency_id','base_rate'];
$dictionary['Opportunity']['fields']['upgrades_due']['no_default'] = false;
$dictionary['Opportunity']['fields']['upgrades_due']['default'] = '0';
$dictionary['Opportunity']['fields']['upgrades_due']['len'] = 26;
$dictionary['Opportunity']['fields']['upgrades_due']['size'] = '20';
$dictionary['Opportunity']['fields']['upgrades_due']['precision'] = 6;


$dictionary['Opportunity']['fields']['upgrades_due']['importable'] = true;
$dictionary['Opportunity']['fields']['upgrades_due']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['upgrades_due']['duplicate_merge_dom_value'] = 1;
$dictionary['Opportunity']['fields']['upgrades_due']['unified_search'] = false;
$dictionary['Opportunity']['fields']['upgrades_due']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['upgrades_due']['enable_range_search'] = false;

$dictionary['Opportunity']['fields']['upgrades_due']['comments'] = '';
$dictionary['Opportunity']['fields']['upgrades_due']['massupdate'] = true;
$dictionary['Opportunity']['fields']['upgrades_due']['audited'] = true;
$dictionary['Opportunity']['fields']['upgrades_due']['reportable'] = true;
$dictionary['Opportunity']['fields']['upgrades_due']['required'] = false;
$dictionary['Opportunity']['fields']['upgrades_due']['calculated'] = false;
$dictionary['Opportunity']['fields']['upgrades_due']['enforced'] = '';
$dictionary['Opportunity']['fields']['upgrades_due']['dependency'] = '';


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_pending_month.php

 // created: 2017-08-17 12:15:31
$dictionary['Opportunity']['fields']['pending_month']['name']='pending_month';
$dictionary['Opportunity']['fields']['pending_month']['vname']='LBL_PENDING_MONTH';
$dictionary['Opportunity']['fields']['pending_month']['type']='varchar';
$dictionary['Opportunity']['fields']['pending_month']['len']='100';
$dictionary['Opportunity']['fields']['pending_month']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.5',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['pending_month']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['pending_month']['importable']='false';
$dictionary['Opportunity']['fields']['pending_month']['comments']='';
$dictionary['Opportunity']['fields']['pending_month']['massupdate']=false;
$dictionary['Opportunity']['fields']['pending_month']['audited']=false;
$dictionary['Opportunity']['fields']['pending_month']['reportable']=true;
$dictionary['Opportunity']['fields']['pending_month']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['pending_month']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['pending_month']['calculated']='true';
$dictionary['Opportunity']['fields']['pending_month']['formula']='monthofyear($pending_date)';
$dictionary['Opportunity']['fields']['pending_month']['enforced']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_em_received.php

$dictionary['Opportunity']['fields']['em_received']['name'] = 'em_received';
$dictionary['Opportunity']['fields']['em_received']['vname'] = 'LBL_EM_RECEIVED';
$dictionary['Opportunity']['fields']['em_received']['type'] = 'enum';
$dictionary['Opportunity']['fields']['em_received']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['em_received']['dependency'] = '';
$dictionary['Opportunity']['fields']['em_received']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['em_received']['len'] = 100;
$dictionary['Opportunity']['fields']['em_received']['comments'] = '';
$dictionary['Opportunity']['fields']['em_received']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['em_received']['audited'] = yes;
$dictionary['Opportunity']['fields']['em_received']['reportable'] = true;
$dictionary['Opportunity']['fields']['em_received']['unified_search'] = false;
$dictionary['Opportunity']['fields']['em_received']['importable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_marketing_notes.php


$dictionary['Opportunity']['fields']['marketing_notes']['name'] = 'marketing_notes';
$dictionary['Opportunity']['fields']['marketing_notes']['vname'] = 'LBL_MARKETING_NOTES';

$dictionary['Opportunity']['fields']['marketing_notes']['type'] = 'text';
$dictionary['Opportunity']['fields']['marketing_notes']['rows'] = 6;
$dictionary['Opportunity']['fields']['marketing_notes']['cols'] = 80;

$dictionary['Opportunity']['fields']['marketing_notes']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['marketing_notes']['importable'] = true;

$dictionary['Opportunity']['fields']['marketing_notes']['comments'] = '';
$dictionary['Opportunity']['fields']['marketing_notes']['massupdate'] = true;
$dictionary['Opportunity']['fields']['marketing_notes']['audited'] = false;
$dictionary['Opportunity']['fields']['marketing_notes']['reportable'] = true;
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_worst_case.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['worst_case']['audited']=true;
$dictionary['Opportunity']['fields']['worst_case']['massupdate']=true;
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['worst_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['worst_case']['calculated']=false;
$dictionary['Opportunity']['fields']['worst_case']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['worst_case']['default']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_probability.php

 // created: 2017-08-15 16:03:10
$dictionary['Opportunity']['fields']['probability']['audited']=true;
$dictionary['Opportunity']['fields']['probability']['massupdate']=false;
$dictionary['Opportunity']['fields']['probability']['comments']='The probability of closure';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['probability']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['probability']['reportable']=true;
$dictionary['Opportunity']['fields']['probability']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['probability']['min']=false;
$dictionary['Opportunity']['fields']['probability']['max']=false;
$dictionary['Opportunity']['fields']['probability']['disable_num_format']='';
$dictionary['Opportunity']['fields']['probability']['studio']=true;
$dictionary['Opportunity']['fields']['probability']['importable']='required';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_square_ft.php

$dictionary['Opportunity']['fields']['square_ft']['name'] = 'square_ft';
$dictionary['Opportunity']['fields']['square_ft']['vname'] = 'LBL_SQUARE_FT';

$dictionary['Opportunity']['fields']['square_ft']['type'] = 'int';
$dictionary['Opportunity']['fields']['square_ft']['dbType'] = 'double';
$dictionary['Opportunity']['fields']['square_ft']['len'] = 100;
$dictionary['Opportunity']['fields']['square_ft']['enable_range_search'] = false;
$dictionary['Opportunity']['fields']['square_ft']['min'] = false;
$dictionary['Opportunity']['fields']['square_ft']['max'] = false;
$dictionary['Opportunity']['fields']['square_ft']['disable_num_format'] = '';


$dictionary['Opportunity']['fields']['square_ft']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['square_ft']['importable'] = true;
$dictionary['Opportunity']['fields']['square_ft']['duplicate_merge'] = enabled;
$dictionary['Opportunity']['fields']['square_ft']['duplicate_merge_dom_value'] = 1;

$dictionary['Opportunity']['fields']['square_ft']['comments'] = '';
$dictionary['Opportunity']['fields']['square_ft']['massupdate'] = true;
$dictionary['Opportunity']['fields']['square_ft']['audited'] = false;
$dictionary['Opportunity']['fields']['square_ft']['reportable'] = true;
$dictionary['Opportunity']['fields']['square_ft']['studio'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/dri-customer-journey.php


VardefManager::addTemplate('Opportunities', 'Opportunity', 'customer_journey_parent', 'Opportunity', true);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_amount.php

 // created: 2017-09-19 23:42:56
$dictionary['Opportunity']['fields']['amount']['required']=true;
$dictionary['Opportunity']['fields']['amount']['audited']=true;
$dictionary['Opportunity']['fields']['amount']['massupdate']=false;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['calculated']=false;
$dictionary['Opportunity']['fields']['amount']['default']='';
$dictionary['Opportunity']['fields']['amount']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_date_closed.php

 // created: 2017-09-20 23:35:35
$dictionary['Opportunity']['fields']['date_closed']['required']=false;
$dictionary['Opportunity']['fields']['date_closed']['audited']=true;
$dictionary['Opportunity']['fields']['date_closed']['massupdate']=true;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['calculated']=false;
$dictionary['Opportunity']['fields']['date_closed']['enable_range_search']='1';
$dictionary['Opportunity']['fields']['date_closed']['full_text_search']=array (
);
$dictionary['Opportunity']['fields']['date_closed']['related_fields']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_job_code.php

 // created: 2017-09-20 23:52:56
$dictionary['Opportunity']['fields']['job_code']['name']='job_code';
$dictionary['Opportunity']['fields']['job_code']['vname']='LBL_JOB_CODE';
$dictionary['Opportunity']['fields']['job_code']['type']='int';
$dictionary['Opportunity']['fields']['job_code']['dbType']='double';
$dictionary['Opportunity']['fields']['job_code']['len']='100';
$dictionary['Opportunity']['fields']['job_code']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['job_code']['min']=false;
$dictionary['Opportunity']['fields']['job_code']['max']=false;
$dictionary['Opportunity']['fields']['job_code']['disable_num_format']='1';
$dictionary['Opportunity']['fields']['job_code']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['job_code']['importable']='true';
$dictionary['Opportunity']['fields']['job_code']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['job_code']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['job_code']['comments']='';
$dictionary['Opportunity']['fields']['job_code']['massupdate']=false;
$dictionary['Opportunity']['fields']['job_code']['audited']=false;
$dictionary['Opportunity']['fields']['job_code']['reportable']=true;
$dictionary['Opportunity']['fields']['job_code']['studio']=true;
$dictionary['Opportunity']['fields']['job_code']['required']=true;
$dictionary['Opportunity']['fields']['job_code']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['job_code']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/opportunities_cases_1_Opportunities.php

// created: 2017-09-25 10:18:59
$dictionary["Opportunity"]["fields"]["opportunities_cases_1"] = array (
  'name' => 'opportunities_cases_1',
  'type' => 'link',
  'relationship' => 'opportunities_cases_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_cases_1opportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/attachments.php



$parentObject = "Opportunity";
$parentModule = "Opportunities";
$parentTable = "opportunities";

$childObject = "mv_Attachments";
$childModule = "mv_Attachments";
$childTable = "mv_attachments";

$relationship = strtolower($parentModule . "_" . $childModule);
$label = strtoupper("LBL_$childModule");
$label2 = strtoupper("LBL_$parentModule");


$GLOBALS["dictionary"][$parentObject]['fields'][$relationship] = [
  'name' => $relationship,
  'type' => 'link',
  'relationship' => $relationship,
  'module' => $childModule,
  'bean_name' => $childObject,
  'source' => 'non-db',
  'vname' => $label,
];

$GLOBALS["dictionary"][$parentObject]['relationships'][$relationship] = [
  'lhs_module' => $parentModule,
  'lhs_table' => $parentTable,
  'lhs_key' => 'id',
  'rhs_module' => $childModule,
  'rhs_table' => $childTable,
  'rhs_key' => 'parent_id',
  'relationship_type' => 'one-to-many',
  'relationship_role_column' => 'parent_type',
  'relationship_role_column_value' => $parentModule,
];

// Note, you'll also need a relationship file on the Child Module.
// Name this file - "{child}.php" and save it on the parent

// You'll also need a subpanel
// It'll be at /Parent/Ext/c/b/l/subpanels/file.php






?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_cam_const_finish_mgr_c.php

 // created: 2017-10-02 13:33:07
$dictionary['Opportunity']['fields']['cam_const_finish_mgr_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['cam_const_finish_mgr_c']['labelValue']='CAM Construction Finish Date - Mgr Walk';
$dictionary['Opportunity']['fields']['cam_const_finish_mgr_c']['calculated']='1';
$dictionary['Opportunity']['fields']['cam_const_finish_mgr_c']['formula']='date(related($m_cams_opportunities_1,"const_finish_date"))';
$dictionary['Opportunity']['fields']['cam_const_finish_mgr_c']['enforced']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_cam_permit_num_c.php

 // created: 2017-10-02 13:54:05
$dictionary['Opportunity']['fields']['cam_permit_num_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['cam_permit_num_c']['labelValue']='CAM Permit Num';
$dictionary['Opportunity']['fields']['cam_permit_num_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['cam_permit_num_c']['calculated']='1';
$dictionary['Opportunity']['fields']['cam_permit_num_c']['formula']='related($m_cams_opportunities_1,"permit_number")';
$dictionary['Opportunity']['fields']['cam_permit_num_c']['enforced']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mls_id.php


$dictionary['Opportunity']['fields']['mls_id']['name'] = 'mls_id';
$dictionary['Opportunity']['fields']['mls_id']['vname'] = 'LBL_MLS_ID';

$dictionary['Opportunity']['fields']['mls_id']['type'] = 'int';
$dictionary['Opportunity']['fields']['mls_id']['dbType'] = 'double';
$dictionary['Opportunity']['fields']['mls_id']['len'] = 100;
$dictionary['Opportunity']['fields']['mls_id']['enable_range_search'] = false;
$dictionary['Opportunity']['fields']['mls_id']['min'] = false;
$dictionary['Opportunity']['fields']['mls_id']['max'] = false;
$dictionary['Opportunity']['fields']['mls_id']['disable_num_format'] = true;


$dictionary['Opportunity']['fields']['mls_id']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['mls_id']['importable'] = true;
$dictionary['Opportunity']['fields']['mls_id']['duplicate_merge'] = enabled;
$dictionary['Opportunity']['fields']['mls_id']['duplicate_merge_dom_value'] = 1;

$dictionary['Opportunity']['fields']['mls_id']['comments'] = '';
$dictionary['Opportunity']['fields']['mls_id']['massupdate'] = true;
$dictionary['Opportunity']['fields']['mls_id']['audited'] = false;
$dictionary['Opportunity']['fields']['mls_id']['reportable'] = true;
$dictionary['Opportunity']['fields']['mls_id']['studio'] = true;



?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_warranty_exp.php

 // created: 2017-10-20 13:45:47
$dictionary['Opportunity']['fields']['warranty_exp']['name']='warranty_exp';
$dictionary['Opportunity']['fields']['warranty_exp']['vname']='LBL_WARRANTY_EXP';
$dictionary['Opportunity']['fields']['warranty_exp']['type']='date';
$dictionary['Opportunity']['fields']['warranty_exp']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['warranty_exp']['enable_range_search']='1';
$dictionary['Opportunity']['fields']['warranty_exp']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['warranty_exp']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['warranty_exp']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['warranty_exp']['importable']='false';
$dictionary['Opportunity']['fields']['warranty_exp']['required']=false;
$dictionary['Opportunity']['fields']['warranty_exp']['readonly']=true;
$dictionary['Opportunity']['fields']['warranty_exp']['comments']='';
$dictionary['Opportunity']['fields']['warranty_exp']['massupdate']=false;
$dictionary['Opportunity']['fields']['warranty_exp']['audited']=true;
$dictionary['Opportunity']['fields']['warranty_exp']['reportable']=true;
$dictionary['Opportunity']['fields']['warranty_exp']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_address_street_c.php

 // created: 2017-10-23 15:34:26
$dictionary['Opportunity']['fields']['address_street_c']['group']='address_c';
$dictionary['Opportunity']['fields']['address_street_c']['group_label']='LBL_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_address_city_c.php

 // created: 2017-10-23 15:34:26
$dictionary['Opportunity']['fields']['address_city_c']['group']='address_c';
$dictionary['Opportunity']['fields']['address_city_c']['group_label']='LBL_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_address_state_c.php

 // created: 2017-10-23 15:34:27
$dictionary['Opportunity']['fields']['address_state_c']['group']='address_c';
$dictionary['Opportunity']['fields']['address_state_c']['group_label']='LBL_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_address_postalcode_c.php

 // created: 2017-10-23 15:34:27
$dictionary['Opportunity']['fields']['address_postalcode_c']['group']='address_c';
$dictionary['Opportunity']['fields']['address_postalcode_c']['group_label']='LBL_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_address_country_c.php

 // created: 2017-10-23 15:34:27
$dictionary['Opportunity']['fields']['address_country_c']['group']='address_c';
$dictionary['Opportunity']['fields']['address_country_c']['group_label']='LBL_ADDRESS';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_community.php

 // created: 2017-10-30 17:17:20
$dictionary['Opportunity']['fields']['community']['name']='community';
$dictionary['Opportunity']['fields']['community']['vname']='LBL_COMMUNITY';
$dictionary['Opportunity']['fields']['community']['type']='enum';
$dictionary['Opportunity']['fields']['community']['options']='community_list';
$dictionary['Opportunity']['fields']['community']['dependency']=false;
$dictionary['Opportunity']['fields']['community']['len']=100;
$dictionary['Opportunity']['fields']['community']['comments']='';
$dictionary['Opportunity']['fields']['community']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['community']['audited']=true;
$dictionary['Opportunity']['fields']['community']['reportable']=true;
$dictionary['Opportunity']['fields']['community']['unified_search']=false;
$dictionary['Opportunity']['fields']['community']['importable']='true';
$dictionary['Opportunity']['fields']['community']['required']=true;
$dictionary['Opportunity']['fields']['community']['massupdate']=true;
$dictionary['Opportunity']['fields']['community']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['community']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['community']['calculated']=false;
$dictionary['Opportunity']['fields']['community']['default']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_garage_type.php

 // created: 2017-10-30 17:26:45
$dictionary['Opportunity']['fields']['garage_type']['name']='garage_type';
$dictionary['Opportunity']['fields']['garage_type']['vname']='LBL_GARAGE_TYPE';
$dictionary['Opportunity']['fields']['garage_type']['type']='enum';
$dictionary['Opportunity']['fields']['garage_type']['options']='garage_type_list';
$dictionary['Opportunity']['fields']['garage_type']['dependency']=false;
$dictionary['Opportunity']['fields']['garage_type']['len']=100;
$dictionary['Opportunity']['fields']['garage_type']['comments']='';
$dictionary['Opportunity']['fields']['garage_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['garage_type']['audited']=false;
$dictionary['Opportunity']['fields']['garage_type']['reportable']=true;
$dictionary['Opportunity']['fields']['garage_type']['unified_search']=false;
$dictionary['Opportunity']['fields']['garage_type']['importable']='true';
$dictionary['Opportunity']['fields']['garage_type']['massupdate']=true;
$dictionary['Opportunity']['fields']['garage_type']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['garage_type']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['garage_type']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_customer_age.php

 // created: 2017-11-29 12:09:59
$dictionary['Opportunity']['fields']['customer_age']['name']='customer_age';
$dictionary['Opportunity']['fields']['customer_age']['vname']='LBL_CUSTOMER_AGE';
$dictionary['Opportunity']['fields']['customer_age']['type']='enum';
$dictionary['Opportunity']['fields']['customer_age']['options']='customer_age_list';
$dictionary['Opportunity']['fields']['customer_age']['dependency']=false;
$dictionary['Opportunity']['fields']['customer_age']['len']=100;
$dictionary['Opportunity']['fields']['customer_age']['comments']='';
$dictionary['Opportunity']['fields']['customer_age']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['customer_age']['audited']=false;
$dictionary['Opportunity']['fields']['customer_age']['reportable']=true;
$dictionary['Opportunity']['fields']['customer_age']['unified_search']=false;
$dictionary['Opportunity']['fields']['customer_age']['importable']='true';
$dictionary['Opportunity']['fields']['customer_age']['default']='17_34';
$dictionary['Opportunity']['fields']['customer_age']['massupdate']=true;
$dictionary['Opportunity']['fields']['customer_age']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['customer_age']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['customer_age']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_account_name.php


$dictionary['Opportunity']['fields']['account_name']['importable'] = 'true';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/m_cams_opportunities_1_Opportunities.php

// created: 2017-09-19 14:11:42
$dictionary["Opportunity"]["fields"]["m_cams_opportunities_1"] = array (
  'name' => 'm_cams_opportunities_1',
  'type' => 'link',
  'relationship' => 'm_cams_opportunities_1',
  'source' => 'non-db',
  'module' => 'm_CAMS',
  'bean_name' => 'm_CAMS',
  'vname' => 'LBL_M_CAMS_OPPORTUNITIES_1_FROM_M_CAMS_TITLE',
  'id_name' => 'm_cams_opportunities_1m_cams_ida',
);
$dictionary["Opportunity"]["fields"]["m_cams_opportunities_1_name"] = array (
  'name' => 'm_cams_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_M_CAMS_OPPORTUNITIES_1_FROM_M_CAMS_TITLE',
  'save' => true,
  'id_name' => 'm_cams_opportunities_1m_cams_ida',
  'link' => 'm_cams_opportunities_1',
  'table' => 'm_cams',
  'module' => 'm_CAMS',
  'rname' => 'name',
  'populate_list' => [
    // 'target' => 'source',
    // 'contract_price' => 'amount',
    // 'sales_stage' => 'sales_stage',
    // 'closing_date' => 'date_closed',
    // 'sale_type' => 'opportunity_type',
    // 'warranty_exp' => 'warranty_exp',
    // 'pending_date' => 'pending_date',
  ]
);
$dictionary["Opportunity"]["fields"]["m_cams_opportunities_1m_cams_ida"] = array (
  'name' => 'm_cams_opportunities_1m_cams_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_M_CAMS_OPPORTUNITIES_1_FROM_M_CAMS_TITLE_ID',
  'id_name' => 'm_cams_opportunities_1m_cams_ida',
  'link' => 'm_cams_opportunities_1',
  'table' => 'm_cams',
  'module' => 'm_CAMS',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
  'importable' => 'true',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_builder.php

 // created: 2017-12-01 23:47:55
$dictionary['Opportunity']['fields']['builder']['name']='builder';
$dictionary['Opportunity']['fields']['builder']['vname']='LBL_BUILDER';
$dictionary['Opportunity']['fields']['builder']['type']='enum';
$dictionary['Opportunity']['fields']['builder']['options']='builder_list';
$dictionary['Opportunity']['fields']['builder']['dependency']=false;
$dictionary['Opportunity']['fields']['builder']['len']=100;
$dictionary['Opportunity']['fields']['builder']['comments']='';
$dictionary['Opportunity']['fields']['builder']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['builder']['audited']=false;
$dictionary['Opportunity']['fields']['builder']['reportable']=true;
$dictionary['Opportunity']['fields']['builder']['unified_search']=false;
$dictionary['Opportunity']['fields']['builder']['importable']='true';
$dictionary['Opportunity']['fields']['builder']['default']='MonteVista Homes';
$dictionary['Opportunity']['fields']['builder']['massupdate']=true;
$dictionary['Opportunity']['fields']['builder']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['builder']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['builder']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_differentiator.php


$dictionary['Opportunity']['fields']['differentiator']['name'] = 'differentiator';
$dictionary['Opportunity']['fields']['differentiator']['vname'] = 'LBL_DIFFERENTIATOR';

$dictionary['Opportunity']['fields']['differentiator']['type'] = 'text';
$dictionary['Opportunity']['fields']['differentiator']['rows'] = 6;
$dictionary['Opportunity']['fields']['differentiator']['cols'] = 80;

$dictionary['Opportunity']['fields']['differentiator']['full_text_search'] = ['enabled' => true,'searchable' => true,'boost' => 0.5];
$dictionary['Opportunity']['fields']['differentiator']['importable'] = true;

$dictionary['Opportunity']['fields']['differentiator']['comments'] = '';
$dictionary['Opportunity']['fields']['differentiator']['massupdate'] = true;
$dictionary['Opportunity']['fields']['differentiator']['audited'] = false;
$dictionary['Opportunity']['fields']['differentiator']['reportable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_address.php


  $dictionary['Opportunity']['fields']['address_street']['group'] = 'address';
  $dictionary['Opportunity']['fields']['address_street']['group_label'] = 'LBL_ADDRESS';
  $dictionary['Opportunity']['fields']['address_street']['required'] = false;
  $dictionary['Opportunity']['fields']['address_street']['name'] = 'address_street';
  $dictionary['Opportunity']['fields']['address_street']['vname'] = 'LBL_ADDRESS_STREET';
  $dictionary['Opportunity']['fields']['address_street']['type'] = 'text';
  $dictionary['Opportunity']['fields']['address_street']['massupdate'] = false;
  $dictionary['Opportunity']['fields']['address_street']['no_default'] = false;
  $dictionary['Opportunity']['fields']['address_street']['comments'] = '';
  $dictionary['Opportunity']['fields']['address_street']['help'] = '';
  $dictionary['Opportunity']['fields']['address_street']['importable'] = 'true';
  $dictionary['Opportunity']['fields']['address_street']['duplicate_merge'] = 'enabled';
  $dictionary['Opportunity']['fields']['address_street']['duplicate_merge_dom_value'] = 1;
  $dictionary['Opportunity']['fields']['address_street']['audited'] = false;
  $dictionary['Opportunity']['fields']['address_street']['reportable'] = true;
  $dictionary['Opportunity']['fields']['address_street']['unified_search'] = false;
  $dictionary['Opportunity']['fields']['address_street']['merge_filter'] = 'disabled';
  $dictionary['Opportunity']['fields']['address_street']['calculated'] = false;
  $dictionary['Opportunity']['fields']['address_street']['len'] = 150;
  $dictionary['Opportunity']['fields']['address_street']['size'] = '20';
  $dictionary['Opportunity']['fields']['address_street']['studio'] = 'visible';
  




  $dictionary['Opportunity']['fields']['address_city']['group'] = 'address';
  $dictionary['Opportunity']['fields']['address_city']['group_label'] = 'LBL_ADDRESS';
  $dictionary['Opportunity']['fields']['address_city']['required'] = false;
  $dictionary['Opportunity']['fields']['address_city']['name'] = 'address_city';
  $dictionary['Opportunity']['fields']['address_city']['vname'] = 'LBL_ADDRESS_CITY';
  $dictionary['Opportunity']['fields']['address_city']['type'] = 'varchar';
  $dictionary['Opportunity']['fields']['address_city']['massupdate'] = false;
  $dictionary['Opportunity']['fields']['address_city']['no_default'] = false;
  $dictionary['Opportunity']['fields']['address_city']['comments'] = '';
  $dictionary['Opportunity']['fields']['address_city']['help'] = '';
  $dictionary['Opportunity']['fields']['address_city']['importable'] = 'true';
  $dictionary['Opportunity']['fields']['address_city']['duplicate_merge'] = 'enabled';
  $dictionary['Opportunity']['fields']['address_city']['duplicate_merge_dom_value'] = 1;
  $dictionary['Opportunity']['fields']['address_city']['audited'] = false;
  $dictionary['Opportunity']['fields']['address_city']['reportable'] = true;
  $dictionary['Opportunity']['fields']['address_city']['unified_search'] = false;
  $dictionary['Opportunity']['fields']['address_city']['merge_filter'] = 'disabled';
  $dictionary['Opportunity']['fields']['address_city']['calculated'] = false;
  $dictionary['Opportunity']['fields']['address_city']['len'] = 100;
  $dictionary['Opportunity']['fields']['address_city']['size'] = '20';
  




  $dictionary['Opportunity']['fields']['address_state']['group'] = 'address';
  $dictionary['Opportunity']['fields']['address_state']['group_label'] = 'LBL_ADDRESS';
  $dictionary['Opportunity']['fields']['address_state']['required'] = false;
  $dictionary['Opportunity']['fields']['address_state']['name'] = 'address_state';
  $dictionary['Opportunity']['fields']['address_state']['vname'] = 'LBL_ADDRESS_STATE';
  $dictionary['Opportunity']['fields']['address_state']['type'] = 'varchar';
  $dictionary['Opportunity']['fields']['address_state']['massupdate'] = false;
  $dictionary['Opportunity']['fields']['address_state']['no_default'] = false;
  $dictionary['Opportunity']['fields']['address_state']['comments'] = '';
  $dictionary['Opportunity']['fields']['address_state']['help'] = '';
  $dictionary['Opportunity']['fields']['address_state']['importable'] = 'true';
  $dictionary['Opportunity']['fields']['address_state']['duplicate_merge'] = 'enabled';
  $dictionary['Opportunity']['fields']['address_state']['duplicate_merge_dom_value'] = 1;
  $dictionary['Opportunity']['fields']['address_state']['audited'] = false;
  $dictionary['Opportunity']['fields']['address_state']['reportable'] = true;
  $dictionary['Opportunity']['fields']['address_state']['unified_search'] = false;
  $dictionary['Opportunity']['fields']['address_state']['merge_filter'] = 'disabled';
  $dictionary['Opportunity']['fields']['address_state']['calculated'] = false;
  $dictionary['Opportunity']['fields']['address_state']['len'] = 100;
  $dictionary['Opportunity']['fields']['address_state']['size'] = '20';
  




  $dictionary['Opportunity']['fields']['address_country']['group'] = 'address';
  $dictionary['Opportunity']['fields']['address_country']['group_label'] = 'LBL_ADDRESS';
  $dictionary['Opportunity']['fields']['address_country']['required'] = false;
  $dictionary['Opportunity']['fields']['address_country']['name'] = 'address_country';
  $dictionary['Opportunity']['fields']['address_country']['vname'] = 'LBL_ADDRESS_COUNTRY';
  $dictionary['Opportunity']['fields']['address_country']['type'] = 'varchar';
  $dictionary['Opportunity']['fields']['address_country']['massupdate'] = false;
  $dictionary['Opportunity']['fields']['address_country']['no_default'] = false;
  $dictionary['Opportunity']['fields']['address_country']['comments'] = '';
  $dictionary['Opportunity']['fields']['address_country']['help'] = '';
  $dictionary['Opportunity']['fields']['address_country']['importable'] = 'true';
  $dictionary['Opportunity']['fields']['address_country']['duplicate_merge'] = 'enabled';
  $dictionary['Opportunity']['fields']['address_country']['duplicate_merge_dom_value'] = 1;
  $dictionary['Opportunity']['fields']['address_country']['audited'] = false;
  $dictionary['Opportunity']['fields']['address_country']['reportable'] = true;
  $dictionary['Opportunity']['fields']['address_country']['unified_search'] = false;
  $dictionary['Opportunity']['fields']['address_country']['merge_filter'] = 'disabled';
  $dictionary['Opportunity']['fields']['address_country']['calculated'] = false;
  $dictionary['Opportunity']['fields']['address_country']['len'] = 100;
  $dictionary['Opportunity']['fields']['address_country']['size'] = '20';
  





  $dictionary['Opportunity']['fields']['address_postalcode']['group'] = 'address';
  $dictionary['Opportunity']['fields']['address_postalcode']['group_label'] = 'LBL_ADDRESS';
  $dictionary['Opportunity']['fields']['address_postalcode']['required'] = false;
  $dictionary['Opportunity']['fields']['address_postalcode']['name'] = 'address_postalcode';
  $dictionary['Opportunity']['fields']['address_postalcode']['vname'] = 'LBL_ADDRESS_POSTALCODE';
  $dictionary['Opportunity']['fields']['address_postalcode']['type'] = 'varchar';
  $dictionary['Opportunity']['fields']['address_postalcode']['massupdate'] = false;
  $dictionary['Opportunity']['fields']['address_postalcode']['no_default'] = false;
  $dictionary['Opportunity']['fields']['address_postalcode']['comments'] = '';
  $dictionary['Opportunity']['fields']['address_postalcode']['help'] = '';
  $dictionary['Opportunity']['fields']['address_postalcode']['importable'] = 'true';
  $dictionary['Opportunity']['fields']['address_postalcode']['duplicate_merge'] = 'enabled';
  $dictionary['Opportunity']['fields']['address_postalcode']['duplicate_merge_dom_value'] = 1;
  $dictionary['Opportunity']['fields']['address_postalcode']['audited'] = false;
  $dictionary['Opportunity']['fields']['address_postalcode']['reportable'] = true;
  $dictionary['Opportunity']['fields']['address_postalcode']['unified_search'] = false;
  $dictionary['Opportunity']['fields']['address_postalcode']['merge_filter'] = 'disabled';
  $dictionary['Opportunity']['fields']['address_postalcode']['calculated'] = false;
  $dictionary['Opportunity']['fields']['address_postalcode']['len'] = 20;
  $dictionary['Opportunity']['fields']['address_postalcode']['size'] = '20';
  



















































?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_contigent_offer.php

$dictionary['Opportunity']['fields']['contigent_offer']['name'] = 'contigent_offer';
$dictionary['Opportunity']['fields']['contigent_offer']['vname'] = 'LBL_CONTIGENT_OFFER';
$dictionary['Opportunity']['fields']['contigent_offer']['type'] = 'enum';
$dictionary['Opportunity']['fields']['contigent_offer']['options'] = 'yes_no_list';
$dictionary['Opportunity']['fields']['contigent_offer']['dependency'] = '';
$dictionary['Opportunity']['fields']['contigent_offer']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['contigent_offer']['len'] = 100;
$dictionary['Opportunity']['fields']['contigent_offer']['comments'] = '';
$dictionary['Opportunity']['fields']['contigent_offer']['merge_filter'] = 'enabled';
$dictionary['Opportunity']['fields']['contigent_offer']['audited'] = true;
$dictionary['Opportunity']['fields']['contigent_offer']['reportable'] = true;
$dictionary['Opportunity']['fields']['contigent_offer']['unified_search'] = false;
$dictionary['Opportunity']['fields']['contigent_offer']['importable'] = true;


?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_pending_date.php

 // created: 2018-01-03 14:58:08
$dictionary['Opportunity']['fields']['pending_date']['name']='pending_date';
$dictionary['Opportunity']['fields']['pending_date']['vname']='LBL_PENDING_DATE';
$dictionary['Opportunity']['fields']['pending_date']['type']='date';
$dictionary['Opportunity']['fields']['pending_date']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['pending_date']['enable_range_search']='1';
$dictionary['Opportunity']['fields']['pending_date']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['pending_date']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['pending_date']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['pending_date']['importable']='true';
$dictionary['Opportunity']['fields']['pending_date']['required']=true;
$dictionary['Opportunity']['fields']['pending_date']['comments']='';
$dictionary['Opportunity']['fields']['pending_date']['massupdate']=true;
$dictionary['Opportunity']['fields']['pending_date']['audited']=true;
$dictionary['Opportunity']['fields']['pending_date']['reportable']=true;
$dictionary['Opportunity']['fields']['pending_date']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sale_fail_date_c.php

 // created: 2018-01-08 18:13:00
$dictionary['Opportunity']['fields']['sale_fail_date_c']['labelValue']='Sale Fail Date';
$dictionary['Opportunity']['fields']['sale_fail_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['sale_fail_date_c']['dependency']='isInList($sales_stage,createList("Closed Lost"))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_cam_construction_stage_c.php

 // created: 2018-01-13 19:12:06
$dictionary['Opportunity']['fields']['cam_construction_stage_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['cam_construction_stage_c']['labelValue']='CAM Construction Stage';
$dictionary['Opportunity']['fields']['cam_construction_stage_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['cam_construction_stage_c']['calculated']='true';
$dictionary['Opportunity']['fields']['cam_construction_stage_c']['formula']='related($m_cams_opportunities_1,"construction_stage")';
$dictionary['Opportunity']['fields']['cam_construction_stage_c']['enforced']='true';
$dictionary['Opportunity']['fields']['cam_construction_stage_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_selling_broker_comm.php

 // created: 2018-01-22 17:45:50
$dictionary['Opportunity']['fields']['selling_broker_comm']['name']='selling_broker_comm';
$dictionary['Opportunity']['fields']['selling_broker_comm']['vname']='LBL_SELLING_BROKER_COMM';
$dictionary['Opportunity']['fields']['selling_broker_comm']['type']='currency';
$dictionary['Opportunity']['fields']['selling_broker_comm']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['selling_broker_comm']['no_default']=false;
$dictionary['Opportunity']['fields']['selling_broker_comm']['len']=26;
$dictionary['Opportunity']['fields']['selling_broker_comm']['size']='20';
$dictionary['Opportunity']['fields']['selling_broker_comm']['precision']=6;
$dictionary['Opportunity']['fields']['selling_broker_comm']['importable']='false';
$dictionary['Opportunity']['fields']['selling_broker_comm']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['selling_broker_comm']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['selling_broker_comm']['unified_search']=false;
$dictionary['Opportunity']['fields']['selling_broker_comm']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['selling_broker_comm']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['selling_broker_comm']['comments']='';
$dictionary['Opportunity']['fields']['selling_broker_comm']['massupdate']=false;
$dictionary['Opportunity']['fields']['selling_broker_comm']['audited']=true;
$dictionary['Opportunity']['fields']['selling_broker_comm']['reportable']=true;
$dictionary['Opportunity']['fields']['selling_broker_comm']['required']=false;
$dictionary['Opportunity']['fields']['selling_broker_comm']['calculated']='1';
$dictionary['Opportunity']['fields']['selling_broker_comm']['enforced']=true;
$dictionary['Opportunity']['fields']['selling_broker_comm']['formula']='multiply(subtract($amount,$seller_concessions,$total_upgrades),divide($commission_percent,100))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/attachedcontacts_c.php


$dictionary["Opportunity"]["fields"]["attachedcontacts_c"] =  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'attachedcontacts_c',
    'vname' => 'LBL_ATTACHED_CONTACTS',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'contact_id_c',
    'ext2' => 'Contacts',
    'module' => 'Contacts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  );
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/dp_doucumentspackets_opportunities_1_Opportunities.php

// created: 2015-10-01 14:45:37
$dictionary["Opportunity"]["fields"]["dp_doucumentspackets_opportunities_1"] = array (
  'name' => 'dp_doucumentspackets_opportunities_1',
  'type' => 'link',
  'relationship' => 'dp_doucumentspackets_opportunities_1',
  'source' => 'non-db',
  'module' => 'DP_DoucumentsPackets',
  'bean_name' => 'DP_DoucumentsPackets',
  'vname' => 'LBL_DP_DOUCUMENTSPACKETS_OPPORTUNITIES_1_FROM_DP_DOUCUMENTSPACKETS_TITLE',
  'id_name' => 'dp_doucumentspackets_opportunities_1dp_doucumentspackets_ida',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/attacheddocuments_c.php


$dictionary["Opportunity"]["fields"]["attacheddocuments_c"] =  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'attacheddocuments_c',
    'vname' => 'LBL_ATTACHED_DOCUMENT',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'document_id_c',
    'ext2' => 'Documents',
    'module' => 'Documents',
    'rname' => 'document_name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  );
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_opportunity_type.php

 // created: 2018-02-18 19:07:05
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['required']=true;
$dictionary['Opportunity']['fields']['opportunity_type']['massupdate']=true;
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['opportunity_type']['calculated']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['dependency']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['visibility_grid']=array (
  'trigger' => 'builder',
  'values' => 
  array (
    'MonteVista Homes' => 
    array (
      0 => '',
      1 => 'Pre-Sale',
      2 => 'Spec-Sale',
      3 => 'Lot / Land',
    ),
    'CloudCrest Homes' => 
    array (
      0 => '',
      1 => 'Pre-Sale',
      2 => 'Spec-Sale',
      3 => 'Lot / Land',
    ),
    'Elden Homes' => 
    array (
      0 => 'Pre-Sale',
      1 => 'Spec-Sale',
      2 => 'Spec',
      3 => 'Model Home',
      4 => 'Lot / Land',
      5 => 'Permits Only',
    ),
    'One Off' => 
    array (
      0 => 'Pre-Sale',
      1 => 'Spec-Sale',
      2 => 'Lot / Land',
    ),
    'PacWest Realty Group' => 
    array (
      0 => '',
      1 => 'Existing Home',
      2 => 'Lot / Land',
      3 => 'Pre-Sale',
      4 => 'Spec-Sale',
      5 => 'Model Home',
      6 => 'Multifamily Hold',
      7 => 'Permits Only',
    ),
    'Rosemont' => 
    array (
    ),
    'SGS' => 
    array (
      0 => 'Lot / Land',
      1 => 'Multifamily Hold',
      2 => 'Existing Home',
      3 => 'Pre-Sale',
      4 => 'Spec-Sale',
      5 => 'Spec',
      6 => 'Permits Only',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_stage.php

 // created: 2018-02-18 19:07:56
$dictionary['Opportunity']['fields']['sales_stage']['required']=true;
$dictionary['Opportunity']['fields']['sales_stage']['audited']=true;
$dictionary['Opportunity']['fields']['sales_stage']['massupdate']=true;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['importable']='required';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['reportable']=true;
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_stage']['studio']=true;
$dictionary['Opportunity']['fields']['sales_stage']['default']='Pending';
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_proof_of_funds.php

 // created: 2018-03-02 19:22:01
$dictionary['Opportunity']['fields']['proof_of_funds']['name']='proof_of_funds';
$dictionary['Opportunity']['fields']['proof_of_funds']['vname']='LBL_PROOF_OF_FUNDS';
$dictionary['Opportunity']['fields']['proof_of_funds']['type']='enum';
$dictionary['Opportunity']['fields']['proof_of_funds']['options']='yes_no_na_list';
$dictionary['Opportunity']['fields']['proof_of_funds']['dependency']=false;
$dictionary['Opportunity']['fields']['proof_of_funds']['len']=100;
$dictionary['Opportunity']['fields']['proof_of_funds']['comments']='';
$dictionary['Opportunity']['fields']['proof_of_funds']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['proof_of_funds']['audited']=false;
$dictionary['Opportunity']['fields']['proof_of_funds']['reportable']=true;
$dictionary['Opportunity']['fields']['proof_of_funds']['unified_search']=false;
$dictionary['Opportunity']['fields']['proof_of_funds']['importable']='true';
$dictionary['Opportunity']['fields']['proof_of_funds']['massupdate']=true;
$dictionary['Opportunity']['fields']['proof_of_funds']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['proof_of_funds']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['proof_of_funds']['calculated']=false;
$dictionary['Opportunity']['fields']['proof_of_funds']['required']=false;
$dictionary['Opportunity']['fields']['proof_of_funds']['visibility_grid']=array (
  'trigger' => 'financing',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
    ),
    'Conventional' => 
    array (
      0 => 'na',
    ),
    'FHS' => 
    array (
      0 => 'na',
    ),
    'FHA' => 
    array (
      0 => 'na',
    ),
    'USDA' => 
    array (
      0 => 'na',
    ),
    'VA' => 
    array (
      0 => 'na',
    ),
    'Cash' => 
    array (
      0 => 'no',
      1 => 'yes',
    ),
    '1031 Exchange' => 
    array (
      0 => 'no',
      1 => 'yes',
    ),
    'Construction Loan' => 
    array (
      0 => 'na',
    ),
    'Other' => 
    array (
      0 => '',
      1 => 'yes',
      2 => 'no',
      3 => 'na',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/document_id_c.php

 
 $dictionary["Opportunity"]["fields"]["document_id_c"] =  array (
    'required' => false,
    'name' => 'document_id_c',
    'vname' => 'LBL_ATTACHED_CONTACTS_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  );
 
 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/contact_id_c.php

 
 $dictionary["Opportunity"]["fields"]["contact_id_c"] =  array (
    'required' => false,
    'name' => 'contact_id_c',
    'vname' => 'LBL_ATTACHED_CONTACTS_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  );
 
 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/signed_copies.php

 // created: 2018-03-10 05:09:21

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_floor_plan.php

 // created: 2018-05-17 20:17:23
$dictionary['Opportunity']['fields']['floor_plan']['name']='floor_plan';
$dictionary['Opportunity']['fields']['floor_plan']['vname']='LBL_FLOOR_PLAN';
$dictionary['Opportunity']['fields']['floor_plan']['type']='enum';
$dictionary['Opportunity']['fields']['floor_plan']['options']='floor_plan_list';
$dictionary['Opportunity']['fields']['floor_plan']['dependency']=false;
$dictionary['Opportunity']['fields']['floor_plan']['len']=100;
$dictionary['Opportunity']['fields']['floor_plan']['comments']='';
$dictionary['Opportunity']['fields']['floor_plan']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['floor_plan']['audited']=false;
$dictionary['Opportunity']['fields']['floor_plan']['reportable']=true;
$dictionary['Opportunity']['fields']['floor_plan']['unified_search']=false;
$dictionary['Opportunity']['fields']['floor_plan']['importable']='true';
$dictionary['Opportunity']['fields']['floor_plan']['massupdate']=true;
$dictionary['Opportunity']['fields']['floor_plan']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['floor_plan']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['floor_plan']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/mvh_colorselection_opportunities_Opportunities.php

// created: 2018-06-11 08:59:55
$dictionary["Opportunity"]["fields"]["mvh_colorselection_opportunities"] = array (
  'name' => 'mvh_colorselection_opportunities',
  'type' => 'link',
  'relationship' => 'mvh_colorselection_opportunities',
  'source' => 'non-db',
  'module' => 'mvh_Colorselection',
  'bean_name' => 'mvh_Colorselection',
  'side' => 'right',
  'vname' => 'LBL_MVH_COLORSELECTION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["mvh_colorselection_opportunities_name"] = array (
  'name' => 'mvh_colorselection_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_OPPORTUNITIES_FROM_MVH_COLORSELECTION_TITLE',
  'save' => true,
  'id_name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'link' => 'mvh_colorselection_opportunities',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["mvh_colorselection_opportunitiesmvh_colorselection_ida"] = array (
  'name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MVH_COLORSELECTION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
  'link' => 'mvh_colorselection_opportunities',
  'table' => 'mvh_colorselection',
  'module' => 'mvh_Colorselection',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commission_percent.php

 // created: 2018-06-23 04:06:07
$dictionary['Opportunity']['fields']['commission_percent']['name']='commission_percent';
$dictionary['Opportunity']['fields']['commission_percent']['vname']='LBL_COMMISSION_PERCENT';
$dictionary['Opportunity']['fields']['commission_percent']['type']='decimal';
$dictionary['Opportunity']['fields']['commission_percent']['len']='6';
$dictionary['Opportunity']['fields']['commission_percent']['size']='20';
$dictionary['Opportunity']['fields']['commission_percent']['no_default']=false;
$dictionary['Opportunity']['fields']['commission_percent']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['commission_percent']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['commission_percent']['unified_search']=false;
$dictionary['Opportunity']['fields']['commission_percent']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['commission_percent']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['commission_percent']['calculated']=false;
$dictionary['Opportunity']['fields']['commission_percent']['required']=false;
$dictionary['Opportunity']['fields']['commission_percent']['massupdate']=false;
$dictionary['Opportunity']['fields']['commission_percent']['comments']='';
$dictionary['Opportunity']['fields']['commission_percent']['help']='';
$dictionary['Opportunity']['fields']['commission_percent']['importable']='true';
$dictionary['Opportunity']['fields']['commission_percent']['reportable']=true;
$dictionary['Opportunity']['fields']['commission_percent']['precision']=4;
$dictionary['Opportunity']['fields']['commission_percent']['audited']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_listing_commission_percent.php

 // created: 2018-06-23 04:06:46
$dictionary['Opportunity']['fields']['listing_commission_percent']['name']='listing_commission_percent';
$dictionary['Opportunity']['fields']['listing_commission_percent']['vname']='LBL_LISTING_COMMISSION_PERCENT';
$dictionary['Opportunity']['fields']['listing_commission_percent']['type']='decimal';
$dictionary['Opportunity']['fields']['listing_commission_percent']['len']='6';
$dictionary['Opportunity']['fields']['listing_commission_percent']['size']='20';
$dictionary['Opportunity']['fields']['listing_commission_percent']['no_default']=false;
$dictionary['Opportunity']['fields']['listing_commission_percent']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['listing_commission_percent']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['listing_commission_percent']['unified_search']=false;
$dictionary['Opportunity']['fields']['listing_commission_percent']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['listing_commission_percent']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['listing_commission_percent']['calculated']=false;
$dictionary['Opportunity']['fields']['listing_commission_percent']['required']=false;
$dictionary['Opportunity']['fields']['listing_commission_percent']['massupdate']=false;
$dictionary['Opportunity']['fields']['listing_commission_percent']['comments']='';
$dictionary['Opportunity']['fields']['listing_commission_percent']['help']='';
$dictionary['Opportunity']['fields']['listing_commission_percent']['importable']='true';
$dictionary['Opportunity']['fields']['listing_commission_percent']['reportable']=true;
$dictionary['Opportunity']['fields']['listing_commission_percent']['precision']=4;
$dictionary['Opportunity']['fields']['listing_commission_percent']['audited']=true;

 
?>
