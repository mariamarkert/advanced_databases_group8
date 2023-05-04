<?php
// Connect to database
session_start();
		
		
		if (isset($_SESSION['userid'])) {

            include '../connect.php';

            // Retrieve user info from database
            $user_id = $_SESSION['userid']; // replace with actual user ID
            $query = "SELECT * FROM users WHERE id = $user_id"; // replace with your actual query
            $stmt = oci_parse($conn, $query);
			
			oci_execute($stmt);
			$user = oci_fetch_array($stmt);

            // Set default values for input fields
            $username = $user['username'];
            $password = $user['password'];
            $firstname = $user['firstname'];
            $lastname = $user['lastname'];
            $birthday = $user['birthday'];
            $height = $user['height'];
            $weight = $user['weight'];
            $numpreg = $user['numpreg'];

?>

<!-- Add default values to input fields -->
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
