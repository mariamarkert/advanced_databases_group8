<?php 
	session_start(); 
	include "../connect/connect.php";

	
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate inputs
	echo $_POST['username'];
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $birthday = htmlspecialchars($_POST['birthday']);
	if (is_numeric($_POST['height']) && is_numeric($_POST['weight']) && is_numeric($_POST['pregnancies']) ) {
		// height and weight are numeric, proceed with insertion
		$height = (int)$_POST['height'];
		$weight = (int)$_POST['weight'];
		$pregnancies = (int)$_POST['pregnancies']);
	} else {
		// height and/or weight are not numeric, handle error
		echo "Error: Height and weight must be numeric values.";
		exit();
	}
	
    
	$user_id = 127;
    // Prepare the query
    $query = "INSERT INTO users (user_id, username, upassword, first_name, last_name, birthday, uheight, uweight, bmi, num_preg)
              VALUES (:user_id, :username, :password, :first_name, :last_name, TO_DATE(:birthday, 'yyyy-mm-dd'), :height, :weight, 1, :pregnancies)";
    $stmt = oci_parse($conn, $query);
	echo $query;

    // Bind the values to the prepared statement
    $user_id = uniqid(); // Generate a unique ID for the user
    oci_bind_by_name($stmt, ':user_id', $user_id);
    oci_bind_by_name($stmt, ':username', $username);
    oci_bind_by_name($stmt, ':password', $password);
    oci_bind_by_name($stmt, ':first_name', $first_name);
    oci_bind_by_name($stmt, ':last_name', $last_name);
    oci_bind_by_name($stmt, ':birthday', $birthday);
    oci_bind_by_name($stmt, ':height', $height);
    oci_bind_by_name($stmt, ':weight', $weight);
    oci_bind_by_name($stmt, ':pregnancies', $pregnancies);

    // Execute the prepared statement
    if (oci_execute($stmt)) {
        echo 'User created successfully.';
		//header("Location: ../home/");
		oci_free_statement($stmt);
    	oci_close($conn);
    	//exit();
    } else {
        $error = oci_error($stmt);
		echo 'Error creating user: ' . $error['message'];
        //header("Location: ../createUser/?Error creating user");
		oci_free_statement($stmt);
    	oci_close($conn);
		exit();
    }

    // Clean up
    
}
?>

			
    



