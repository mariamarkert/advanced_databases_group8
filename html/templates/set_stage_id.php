	<?php 
		include "../connect/connect.php";	
		session_start();
		echo $_SESSION['userid'];
		if(isset($_SESSION['userid'])){
			$userid = $_SESSION['userid'];

			if(!isset($_SESSION['stageid'])){
				// to get the current date
				$query = "select to_char (current_date, 'YYYY-MM-DD') as today from (select current_date from dual)";

	  			$stmt = oci_parse($conn, $query);
  				oci_define_by_name($stmt, "TODAY", $today);
				oci_execute($stmt);
				oci_fetch($stmt);
				// to get the user's last date
				$query_lastdate = "(select to_char(period_start, 'YYYY-MM-DD') as lastdate from (select * from (select period_start from cycle where user_id = '$userid' order by period_start desc) where rownum =1))";
				$stmt = oci_parse($conn, $query_lastdate);
				oci_execute($stmt);
				$row = oci_fetch_array($stmt);
				$lastdate = $row['LASTDATE'];
				$timestamp1 = strtotime($lastdate);
				$timestamp2 = strtotime($today);

				$seconds_diff = $timestamp2 - $timestamp1;
				$days_diff = round($seconds_diff / (60 * 60 * 24));
			// how to subtract dates


				if ($days_diff < 6) {
					$user_stage = 1;
				}elseif($days_diff < 15){
					$user_stage = 2;
				}elseif($days_diff < 22){
					$user_stage = 3;
				}else{
					$user_stage = 4;
				}
				$_SESSION['stageid'] = $user_stage;
				session_write_close();
						
			}
		}else{
			$_SESSION['stageid'] = 1;
			//header("Location: ../");
        			
		}
						
	?>

					                

