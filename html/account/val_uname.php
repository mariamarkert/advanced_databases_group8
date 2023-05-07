<? php
	
	function validate_username($data){
       		$data = trim($data);
	   		$data = stripslashes($data);
	   		//$data = htmlspecialchars($data);
			//check if username is less than 20
	   		return $data;
	}	

?>
