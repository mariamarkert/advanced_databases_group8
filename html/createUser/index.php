<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create User</title>
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
			width: 600px;
			background-color: #fff;
			border-radius: 10px;
			padding: 50px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
		}
		input[type="text"], input[type="password"], input[type="date"], input[type="number"] {
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
	<h1>Create User</h1>
	<form class="block-form" action="createUser.php" method="post">
		<label for="username">Username</label>
		<input type="text" id="username" name="username">
		<label for="password">Password</label>
		<input type="password" id="password" name="password">
		<label for="first-name">First Name</label>
		<input type="text" id="first-name" name="first-name">
		<label for="last-name">Last Name</label>
		<input type="text" id="last-name" name="last-name">
		<label for="birthday">Birthday</label>
		<input type="date" id="birthday" name="birthday">
		<label for="height">Height (inches)</label>
		<input type="number" id="height" name="height">
		<label for="weight">Weight (lbs)</label>
		<input type="number" id="weight" name="weight">
		<label for="pregnancies">Number of Pregnancies</label>
		<input type="number" id="pregnancies" name="pregnancies">
		<input type="submit" value="Create User">
	</form>
</body>
</html>
