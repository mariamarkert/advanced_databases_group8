<?php
    include "../connect/connect.php";
        //$user_id = $_SESSION['userid'];
        $user_id = 0;
        // Close the DB connection
        
        $query = "select * from (select * from cycle where user_id='$user_id' order by user_cycle_id DESC) where rownum=2";
        
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
        // Fetch the first row (most recent cycle)
        $row = oci_fetch_array($stid, OCI_ASSOC);

        if ($row) {
        // Check if any of the symptom columns have a value of 1 and print their names
        if ($row['headache'] == 1) {
            echo "<h4> headache </h4>";
        }
        if ($row['cramps'] == 1) {
            echo "<h4>cramps</h4>";
        }
        if ($row['nausea'] == 1) {
            echo "<h4>nausea</h4>";
        }
        if ($row['fatigue'] == 1) {
            echo "<h4>fatigue</h4>";
        }
        if ($row['acne'] == 1) {
            echo "<h4>acne</h4>";
        }
        if ($row['bloatng'] == 1) {
            echo "<h4>bloating</h4>";
        }
        } else {
        // No matching rows found
        echo "No matching cycles found for user ID $user_id";
        }

        
        

        oci_free_statement($stid);
        oci_close($conn);
        
    
?>