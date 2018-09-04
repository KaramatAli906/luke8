<?php

global $sugar_config;
$sql = "select c1.id as cam_id,c1.name as cam_name, o1.name as opp_name,o1.id as opp_id, a.name as acc_name,a.id as acc_id from
    m_cams c1 JOIN m_cams_opportunities_1_c c2 ON c1.id = c2.m_cams_opportunities_1m_cams_ida 
    JOIN opportunities o1 ON c2.m_cams_opportunities_1opportunities_idb = o1.id 
    JOIN accounts_opportunities o2 ON o1.id = o2.opportunity_id join accounts a on a.id = o2.account_id 
    where c1.deleted=0 and c2.deleted = 0 and o1.deleted=0 and o2.deleted=0 and a.deleted=0 AND (c1.account_id IS NULL OR c1.account_id ='')";

$result = $GLOBALS['db']->query($sql);
echo "<table style='width:50%; border: 2px solid black;text-align: left;'>"
 . "<tr>"
 . "<th>Cam Name</th>"
 . "<th>Opportunity Name</th>"
 . "<th>Account Name</th>"
 . "</tr>";
$update_records = array();
while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
    $update_records[$row['cam_id']] = $row['acc_id'];
    $cam_name = $row['cam_name'];
    $opp_name = $row['opp_name'];
    $acc_name = $row['acc_name'];
    $cam_id = $row['cam_id'];
    $opp_id = $row['opp_id'];
    $acc_id = $row['acc_id'];
    echo "<tr>"
    . "<td><a href='" . $sugar_config['site_url'] . "/#m_CAMS/$cam_id'>$cam_name</a> </td>"
    . "<td> <a href='" . $sugar_config['site_url'] . "/#Opportunities/$opp_id'>$opp_name</a></td>"
    . "<td><a href='" . $sugar_config['site_url'] . "/#Accounts/$acc_id'>$acc_name</a> </td>"
    . "</tr>";
}
echo "</table>";
if (isset($_REQUEST['update_data']) && $_REQUEST['update_data'] == true) {
    foreach ($update_records as $cam_id => $acc_id) {
        $update_sql = "update m_cams set account_id ='$acc_id' where id='$cam_id' ";
        $GLOBALS['db']->query($update_sql);
    }
    echo "Recors Updated Successfully";
}
