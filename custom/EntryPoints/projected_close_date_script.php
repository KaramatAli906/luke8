<?php

$select_sql = "select id, projected_close_date from m_cams where deleted = 0 AND projected_close_date='0000-00-00'";

$result = $GLOBALS['db']->query($select_sql);

$count = 0;
while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

    $projected_close_date = $row['projected_close_date'];
    $id = $row['id'];
    $update = '';
    if (!empty($projected_close_date)) {
        $update = "update m_cams set projected_close_date = Null where id = '$id'";
    }
    if (!empty($update)) {
        $count++;
        $GLOBALS['db']->query($update);
    }
}
echo $count. " Records Updated Successfully";

