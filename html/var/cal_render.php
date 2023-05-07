<?php
include 'calendar.php';
$calendar = new Calendar('2021-02-02');
$calendar->add_event('Birthday', '2021-02-03', 1, 'green');
$calendar->add_event('Doctors', '2021-02-04', 1, 'red');
$calendar->add_event('Holiday', '2021-02-16', 7);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<link href="css/styles.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    
		<div>
			<?=$calendar?>
		</div>
	</body>
</html>