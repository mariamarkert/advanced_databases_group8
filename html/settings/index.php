<!DOCTYPE html>
<html>
<head>
	<title>Account Settings Example</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <a href="../home/">Home</a>
        <a href="../myflow/">My Flow</a>
        <a href="../exercise/">Exercise</a>
        <a href="../nutrition/">Nutrition</a>
        <a href="../settins/">Account Settings</a>
    </header>
	<div class="container">
		<h1>Account Settings</h1>
		<form class="grid-form">
			<?php
				// Connect to database
				session_start();
				
		
               //if (isset($_SESSION['userid'])) {
                    include "../connect/connect.php";

                    // Retrieve user info from database
                    //$user_id = $_SESSION['userid']; // replace with actual user ID
					$user_id = 0;
                    $query = "SELECT * FROM users WHERE user_id = '$user_id'"; // replace with your actual query
                    $stmt = oci_parse($conn, $query);
                    
                    oci_execute($stmt);
                    $user = oci_fetch_array($stmt);
                    // Set default values for input fields
                    $username = $user['USERNAME'];
                    $password = $user['UPASSWORD'];
                    $firstname = $user['FIRST_NAME'];
                    $lastname = $user['LAST_NAME'];
                    $birthday = $user['BIRTHDAY'];
                    $height = $user['UHEIGHT'];
                    $weight = $user['UWEIGHT'];
                    $numpreg = $user['NUM_PREG'];
					$birthday = date("Y-m-d", strtotime($birthday));
					
		

        ?>

		<div class="row">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo $username ?>">
</div>
<div class="row">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?php echo $password ?>">
</div>
<div class="row">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" value="<?php echo $firstname ?>">
</div>
<div class="row">
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" value="<?php echo $lastname ?>">
</div>
<div class="row">
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" value="<?php echo $birthday ?>">
</div>
<div class="row">
    <label for="height">Height (in cm):</label>
    <input type="number" id="height" name="height" value="<?php echo $height ?>">
</div>
<div class="row">
    <label for="weight">Weight (in kg):</label>
    <input type="number" id="weight" name="weight" value="<?php echo $weight ?>">
</div>
<div class="row">
    <label for="numpreg">Number of Pregnencies:</label>
    <input type="number" id="numpreg" name="numpreg" value="<?php echo $numpreg ?>">
</div>

	</form>
	
	</div>
</body>
