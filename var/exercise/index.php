<?php 
		session_start();
		
		
		if (isset($_SESSION['userid'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<?php 
		include '../templates/navbar.php';
	?>
     <h1>Hello user, <?php echo $_SESSION['userid']; ?></h1>
	 
</body>
</html>
<?php

}else{
     //header("Location: ../temp_index.php");
     exit();
}
 ?>
