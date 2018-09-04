<?php

//Opp => CAM
$watchedFields1 = array(
    'opp_amount' => 'cam_contract_price',
    'opp_sales_stage' => 'cam_sales_stage',
    'opp_date_closed' => 'cam_closing_date',
    'opp_opportunity_type' => 'cam_sale_type',
    'opp_warranty_exp' => 'cam_warranty_exp',
    'opp_pending_date' => 'cam_pending_date',
    'opp_elevation' => 'cam_elevation',
    'opp_garage_type' => 'cam_garage_type',
    'opp_floor_plan' => 'cam_floor_plan',
    'opp_square_ft' => 'cam_square_footage',
    'opp_precon' => 'cam_precon',
    'opp_account_name' => 'cam_account_name',
    'opp_account_id' => 'cam_account_id',
);

global $sugar_config;
$sql = "select c1.id as cam_id,c1.name as cam_name, o1.name as opp_name,o1.id as opp_id,a.id as acc_id, 
o1.amount as opp_amount,
o1.sales_stage as opp_sales_stage,
o1.date_closed as opp_date_closed,
o1.opportunity_type as opp_opportunity_type,
o1.warranty_exp as opp_warranty_exp,
o1.pending_date as opp_pending_date,
o1.elevation as opp_elevation,
o1.garage_type as opp_garage_type,
o1.floor_plan as opp_floor_plan,
o1.square_ft as opp_square_ft,
o1.precon as opp_precon,
a.id as opp_account_id,
a.name as opp_account_name,

c1.contract_price as cam_contract_price,
c1.sales_stage as cam_sales_stage,
c1.closing_date as cam_closing_date,
c1.sale_type as cam_sale_type,
c1.warranty_exp as cam_warranty_exp,
c1.pending_date as cam_pending_date,
c1.elevation as cam_elevation,
c1.garage_type as cam_garage_type,
c1.floor_plan as cam_floor_plan,
c1.square_footage as cam_square_footage,
c1.precon as cam_precon,
c1.account_id as cam_account_id,
a1.name as cam_account_name

from
m_cams c1 JOIN m_cams_opportunities_1_c c2 ON c1.id = c2.m_cams_opportunities_1m_cams_ida and c1.deleted=0 and c2.deleted=0
JOIN opportunities o1 ON c2.m_cams_opportunities_1opportunities_idb = o1.id and o1.deleted=0 and c2.deleted=0
LEFT JOIN accounts_opportunities o2 ON o1.id = o2.opportunity_id left join accounts a on a.id = o2.account_id and a.deleted=0   
left join accounts a1 on a1.id = c1.account_id and a1.deleted=0   
where 
(c1.contract_price != o1.amount ) OR
(c1.sales_stage != o1.sales_stage ) OR
(c1.closing_date != o1.date_closed ) OR
(c1.sale_type != o1.opportunity_type ) OR
(c1.warranty_exp != o1.warranty_exp ) OR
(c1.pending_date != o1.pending_date ) OR
(c1.elevation != o1.elevation ) OR
(c1.garage_type != o1.garage_type ) OR
(c1.floor_plan != o1.floor_plan ) OR
(c1.square_footage != o1.square_ft ) OR
(c1.precon != o1.precon ) OR
(c1.account_id != a.id )";

$result = $GLOBALS['db']->query($sql);
echo "<table style='width:70%; border: 2px solid black;text-align: left;'>"
 . "<tr>"
 . "<th style='font-size: 30px;'>CAM Records</th>"
 . "<th style='font-size: 30px;'>Opportunity Records</th>"
 . "</tr>";
$update_records = array();
while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
    $update_records[$row['cam_id']] = $row['acc_id'];
    $cam_name = $row['cam_name'];
    $opp_name = $row['opp_name'];
    $acc_name = $row['cam_account_name'];
    $cam_id = $row['cam_id'];
    $opp_id = $row['opp_id'];
    $acc_id = $row['cam_account_id'];

    echo "<tr>"
    . "<td style='border-bottom:2px solid;'> <a href='" . $sugar_config['site_url'] . "/#m_CAMS/$cam_id'>$cam_name</a> </td>"
    . "<td style='border-bottom:2px solid ;'> <a href='" . $sugar_config['site_url'] . "/#Opportunities/$opp_id'>$opp_name</a></td>"
//    . "<td><a href='" . $sugar_config['site_url'] . "/#Accounts/$acc_id'>$acc_name</a> </td>"
    . "</tr>";
    echo "<tr><th>CAM</th><th>Opportunity</th></tr>";
    foreach ($watchedFields1 as $opp => $cam) {
        if ($row[$opp] != $row[$cam]) {
            echo "<tr>"
            . "<td>" . str_replace('cam_', '', $cam) . ": &ensp;&emsp;$row[$cam] </td><td >  " . str_replace('opp_', '', $opp) . ":&ensp;&emsp; $row[$opp]   </td>"
            . "</tr>";
        }
    }
//    echo "<tr>"
//    . "<td>Account Name: &ensp;&emsp;".$row['cam_account_name']." </td>"
//    . "<td>Account Name: &ensp;&emsp;".$row['opp_account_name']." </td>"
//    . "</tr>";
}

echo "</table>";
//if (isset($_REQUEST['update_data']) && $_REQUEST['update_data'] == true) {
//    foreach ($update_records as $cam_id => $acc_id) {
//        $update_sql = "update m_cams set account_id ='$acc_id' where id='$cam_id' ";
//        $GLOBALS['db']->query($update_sql);
//    }
//    echo "Recors Updated Successfully";
//}
