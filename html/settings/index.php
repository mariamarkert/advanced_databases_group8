<!DOCTYPE html>
<html>
<head>
	<title>Account Settings Example</title>
	<style>
		* {
			box-sizing: border-box;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
        body {
			background-color: #ffe6f2;
			font-family: 'Arial', sans-serif;
		}
		header {
			background-color: #ff66b3;
			padding: 20px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 1;
		}
		header a {
			color: #fff;
			text-decoration: none;
			font-size: 18px;
			font-weight: bold;
			padding: 10px 20px;
			border-radius: 10px;
			margin-right: 20px;
		}
		header a:hover {
			background-color: #ff4d94;
		}
		h1 {
			color: #ff66b3;
			font-size: 36px;
			margin-top: 100px;
			text-align: center;
		}
		.container {
			width: 600px;
			margin: 0 auto;
			padding: 20px;
		}

		form {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-gap: 20px;
			margin-bottom: 20px;
		}

		label {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		input[type="text"], input[type="password"], input[type="date"], input[type="number"] {
			font-size: 18px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
		}

		input[type="submit"] {
			background-color: #ff99cc;
			border: none;
			color: #fff;
			font-size: 20px;
			font-weight: bold;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
            background-color: #ff66b3;
			transition: background-color 0.2s;
			width: auto;
			margin-left: auto;
		}
        input[type="submit"] {
			display: block;
			margin: 0 auto;
			margin-top: 20px;
			width: 200px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			color: #fff;
			background-color: #ff66b3;
			border-radius: 25px;
			border: none;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #ff6699;
		}

		.row {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
		}

		.row label {
			width: 150px;
			margin-right: 20px;
		}

		.row input[type="number"] {
			width: 100px;
		}
	</style>
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
		<form>
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
