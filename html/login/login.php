
<?php 
	session_start(); 
	include "../connect/connect.php";

	if (isset($_POST['uname']) && isset($_POST['password'])) {
		function validate($data){
       		$data = trim($data);
	   		$data = stripslashes($data);
	   		//$data = htmlspecialchars($data);
	   		return $data;
		}
		$uname = validate($_POST['uname']);
		$pass = validate($_POST['password']);
		
		if (empty($uname)) {
			header("Location: ../?error=User Name is required");
	    	exit();
		}else if(empty($pass)){
        	header("Location: ../?error=Password is required");
	    	exit();
		}else{
			$query = "SELECT *  FROM users WHERE username='$uname' AND upassword='$pass'";

			$stmt = oci_parse($conn, $query);
			
			oci_execute($stmt);
			$row = oci_fetch_array($stmt);
			// Get the value of the username column for the first row
			$username = $row['USERNAME'];
			$password = $row['UPASSWORD'];
			$userid = $row['USER_ID'];
		
		
			if ($username  === $uname && $password === $pass) {
          			$_SESSION['userid'] = $userid;
					//echo $_SESSION['userid'];
        			header("Location: ../home/");
        			exit();
    		} else {
        		//header("Location: ../?error=Incorrect User name or password");
        		exit();
    		}

		
		}
		
	}else{
		//header("Location: ../");
		exit();
	}

?>

