	<?php 
		include "../connect/connect.php";	
		include "../templates/set_stage_id.php ";
		
		session_start();
		if(isset($_SESSION['userid']) && isset($_SESSION['stageid'])){
			$userid = $_SESSION['userid'];
			$user_stage = $_SESSION['stageid'];
			
			
			$query = "SELECT *  FROM stage WHERE stage_id='$user_stage'";
			$stmt = oci_parse($conn, $query);
			oci_execute($stmt);
			$row = oci_fetch_array($stmt);
			$stage_name = $row['STG_NAME'];
		}else{
			//header("Location: ../");
        	exit();
		}
				
	?>

<h1>You are in stage: <?php echo $user_stage; ?></h1>
					
<h3>This is called the <?php echo $stage_name; ?> stage.</h3>
					                

