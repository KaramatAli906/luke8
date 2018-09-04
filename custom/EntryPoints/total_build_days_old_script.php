<?php

$update_sql = "update m_cams 
               set total_build_days =

               CASE     WHEN IFNULL(const_finish_date, 0 ) <= 0 THEN  0
                        WHEN IFNULL( const_start_date, 0 ) <= 0 THEN  0
                        ELSE   abs(DATEDIFF(const_finish_date, const_start_date))
                        END  ";

$GLOBALS['db']->query($update_sql);

echo"Records Updated SuccessFully";

