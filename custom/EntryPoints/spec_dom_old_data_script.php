<?php

$select_sql = "select sales_stage, pending_date,const_finish_date,id,spec_dom  from m_cams where deleted = 0";

$result = $GLOBALS['db']->query($select_sql);

while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

    $sales_stage = $row['sales_stage'];
    $pending_date = $row['pending_date'];
    $const_finis_date = $row['const_finish_date'];
    $id = $row['id'];
    $now = time();
    $update = '';
    $diff = 0;
    $datediff = 0;
    if (empty($sales_stage)) {
        
        if ((empty($const_finis_date) || $const_finis_date == '0000-00-00')) {
            $update = "update m_cams set spec_dom = '0' where id = '$id'";
        } 
        elseif((!empty($const_finis_date) && $const_finis_date != '0000-00-00')){
            $your_date = strtotime($const_finis_date);
            $datediff = $your_date - $now;
            $diff = abs(round($datediff / (60 * 60 * 24)));
            $update = "update m_cams set spec_dom = $diff where id = '$id'";
        }
    } else {
        if (((empty($const_finis_date) || $const_finis_date == '0000-00-00') && (empty($pending_date) || $pending_date == '0000-00-00')) && !empty($row['spec_dom'])) {
            $update = "update m_cams set spec_dom = '0' where id = '$id'";
        } else if ((empty($const_finis_date) || $const_finis_date == '0000-00-00') && (!empty($pending_date) && $pending_date != '0000-00-00')) {
            $your_date = strtotime($pending_date);
            $datediff = $now - $your_date;
            $diff = abs(round($datediff / (60 * 60 * 24)));
            $update = "update m_cams set spec_dom = $diff where id = '$id'";
        } else if ((empty($pending_date) || $pending_date == '0000-00-00') && (!empty($const_finis_date) && $const_finis_date != '0000-00-00')) {
            $your_date = strtotime($const_finis_date);
            $datediff = $your_date - $now;
            $diff = abs(round($datediff / (60 * 60 * 24)));
            $update = "update m_cams set spec_dom = $diff where id = '$id'";
        } else if ((!empty($const_finis_date) && $const_finis_date != '0000-00-00') && (!empty($pending_date) && $pending_date != '0000-00-00')) {
            $your_date = strtotime($const_finis_date);
            $pending = strtotime($pending_date);
            $datediff = $your_date - $pending;
            $diff = abs(round($datediff / (60 * 60 * 24)));
            $update = "update m_cams set spec_dom = $diff where id = '$id'";
        }
    }
    if (!empty($update)) {
        $GLOBALS['db']->query($update);
    }
}
echo "Records Updated Successfully";

