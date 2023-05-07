<?php
include "../connect/connect.php"
// Query to retrieve the last 6 cycle lengths for user 125
$query = "SELECT cycle_length, period_start FROM (SELECT cycle_length, period_start FROM cycle WHERE user_id = '125' ORDER BY period_start DESC) WHERE ROWNUM <= 6";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// Store the lengths in an array
$lengths = array();
while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
    $lengths[] = $row['CYCLE_LENGTH'];
}
// Invert the array
$lengths = array_reverse($lengths);

$denom = 0;
$prediction = 0;

// Compute the weighted average
foreach ($lengths as $weight => $cycle_len) {
    $temp = ($weight+1) * $cycle_len;
    $denom += $weight + 1;
    $prediction += $temp;
}

// Divide the prediction by the total extra weight
$prediction = (int) ($prediction / $denom);

// Print the prediction
echo "Predicted period length: $prediction days";

// Close the DB connection
oci_free_statement($stid);
oci_close($conn);
?>
