
<?php 
	session_start(); 
	include "../connect/connect.php";
	if (isset($_SESSION['userid'])){
		if(!isset($_SESSION['stageid'])) {
			include "../templates/set_stage_id.php";
		}
		$stageid = $_SESSION['stageid'];
		//echo $stageid;
		$query = "SELECT nut_name FROM nutrition WHERE ideal_stage_id='$stageid'";

		$stmt = oci_parse($conn, $query);
			
		oci_execute($stmt);
		$row = oci_fetch_array($stmt);
		// Get the value of the username column for the first row
		//echo $row;
		$nutname = $row['NUT_NAME'];
		$nutname = str_replace("'", "", $nutname);
		$nutstring = "This stage is great time to focus on eating foods that contains $nutname.";
			
		
					
	}else{
		header("Location: ../");
		exit();
	}
	if(empty($nutstring)){
		$nutstring = "This is a great time to focus on eating a balanced diet and fueling your body.";
	}
	echo $nutstring;

?>

