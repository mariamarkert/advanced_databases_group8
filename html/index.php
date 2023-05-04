<!DOCTYPE html>
<html lang="en">
<?php 
session_save_path("/home/ec2-user/advanced_databases_group8/html/tmp"); 
session_start(); 
$_SESSION['userid'] = 0;
?>
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<style>
		body {
			background-color: #ffe6f2;
			font-family: 'Arial', sans-serif;
		}
		h1 {
			color: #ff66b3;
			text-align: center;
			font-size: 48px;
			margin-top: 100px;
		}
		.btn {
			display: block;
			margin: 0 auto;
			margin-top: 50px;
			width: 200px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			color: #fff;
			background-color: #ff66b3;
			border-radius: 25px;
			text-decoration: none;
		}
		.btn:hover {
			background-color: #ff4d94;
		}
	</style>
</head>
<body>
	<h1>Welcome</h1>
	<a href="login/" class="btn">Login</a>
	<a href="createUser/" class="btn">New User</a>
</body>
</html>
<?php exit(); ?>
