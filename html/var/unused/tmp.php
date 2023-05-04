<!DOCTYPE html>
<body>

<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//session_start(); 
include "connect/connect.php";

		// Construct the query with a placeholder for the username
$query = "SELECT * FROM users where username='nfp8122' AND upassword='nfp8122'"; // Using a placeholder for the username

		// Prepare the statement
$stmt = oci_parse($conn, $query);

		// Bind the username parameter to the actual username value
		//oci_bind_by_name($stmt, ":username", $username); // Binding the username parameter
	
		// Execute the statement
oci_execute($stmt);
echo $stmt;
$row = oci_fetch_array($stmt);
echo $row["USERNAME"];

?>
</body>
