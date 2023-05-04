<?php 
	session_start(); 
	include "../connect/connect.php";

	
	$query = "INSERT INTO users (user_id, username, upassword, first_name, last_name, birthday, uheight, uweight, bmi, num_preg)
VALUES 
(126, '$username', '$password', '$first-name', '$last-name', TO_DATE('1995-05-04', 'yyyy-mm-dd'), '$height', '$weight', NULL, '$pregnancies')";

	$stmt = oci_parse($conn, $query);		
	oci_execute($stmt);
			
    header("Location: ../home/");
    exit();

?>

