<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<h1>Login</h1>
	<form class="block-form" action="login.php" method="post">
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
