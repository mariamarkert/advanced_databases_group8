<?php
    include "../connect/connect.php";
        //$user_id = $_SESSION['userid'];
        $user_id = 0;
        // Close the DB connection
        
        $query = "select * from (select * from cycle where user_id='$user_id' order by user_cycle_id DESC) where rownum<=2";
        
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
        $lengths = array();
        while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
            $lengths[] = date('M d', strtotime($row['PERIOD_START']));
        }

        echo $lengths[0];
        echo " to ";
        echo $lengths[1];

        oci_free_statement($stid);
        oci_close($conn);
        
    
?>