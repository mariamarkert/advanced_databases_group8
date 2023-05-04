	<?php 
		$userid = 0;
		$user_stage = 1;
		include "../connect/connect.php";	
		$query = "SELECT *  FROM stage WHERE stage_id='$user_stage'";
		$stmt = oci_parse($conn, $query);
		oci_execute($stmt);
		$row = oci_fetch_array($stmt);
		$stage_name = $row['STG_NAME'];
				
	?>

<h1>You are in stage: <?php echo $user_stage; ?></h1>
					
<h3>This is called the <?php echo $stage_name; ?> stage.</h3>
					                

