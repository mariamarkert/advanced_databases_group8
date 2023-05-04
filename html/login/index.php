<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
		form {
			display: block;
			margin: 0 auto;
			margin-top: 50px;
			width: 400px;
			background-color: #fff;
			border-radius: 10px;
			padding: 50px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
		}
		input[type="text"], input[type="password"] {
			display: block;
			margin-bottom: 20px;
			width: 100%;
			height: 40px;
			padding: 0 10px;
			border: none;
			border-radius: 20px;
			background-color: #f2f2f2;
			font-size: 16px;
			font-family: 'Arial', sans-serif;
			color: #666;
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
			background-color: #ff4d94;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="post">
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

		<label for="uname">Username</label>
		<input type="text" class="form-control" id="uname" name="uname" placeholder="User Name">
		<label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		<input type="submit" value="Login">
	</form>
</body>
</html>
