<?php
    include "../connect/connect.php";
        $user_id = $_SESSION['userid'];
        // Close the DB connection
        
        $query = "select * from (select * from cycle where user_id='$user_id' order by user_cycle_id DESC) where rownum<=5";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
        $lengths = array();
        while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
            $lengths[] = $row['CYCLE_LENGTH'];
        }
        print_r($lengths);
        echo $lengths[2];
        

        oci_free_statement($stid);
        oci_close($conn);
        
    
?>