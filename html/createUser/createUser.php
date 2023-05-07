<?php 
	session_start(); 
	include "../connect/connect.php";

	
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate inputs
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $birthday = htmlspecialchars($_POST['birthday']);
    $height = htmlspecialchars($_POST['height']);
    $weight = htmlspecialchars($_POST['weight']);
    $pregnancies = htmlspecialchars($_POST['pregnancies']);

    // Prepare the query
    $query = "INSERT INTO users (user_id, username, upassword, first_name, last_name, birthday, uheight, uweight, bmi, num_preg)
              VALUES (:user_id, :username, :password, :first_name, :last_name, TO_DATE(:birthday, 'yyyy-mm-dd'), :height, :weight, NULL, :pregnancies)";
    $stmt = oci_parse($conn, $query);

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
        //echo 'User created successfully.';
		header("Location: ../home/");
		oci_free_statement($stmt);
    	oci_close($conn);
    	exit();
    } else {
        $error = oci_error($stmt);
        //header("Location: ../createUser/?Error creating user");
		oci_free_statement($stmt);
    	oci_close($conn);
		exit();
    }

    // Clean up
    
}
?>

			
    

?>

