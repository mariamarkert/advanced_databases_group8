<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (e.g., check against a database)
    // For demonstration purposes, we'll hardcode a sample username and password
    $validUsername = 'myuser';
    $validPassword = 'mypassword';

    if ($username == $validUsername && $password == $validPassword) {
        // If the username and password are valid, redirect to a welcome page
        header('Location: welcome.php');
        exit;
    } else {
        // If the username and password are invalid, display an error message
        echo 'Invalid username or password. Please try again.';
    }
}
?>

