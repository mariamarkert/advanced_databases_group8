<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<style>
		.calendar {
			display: grid;
			grid-template-columns: repeat(7, 1fr);
			grid-gap: 10px;
		}
		.calendar .number-wrapper.red {
			background-color: red;
		}
	</style>
</head>
<body>
	<div class="calendar">
		<?php
		// Set the timezone to the local timezone
		date_default_timezone_set('America/New_York');

		// Get the given date
        include "../home/predict.php";
$given_date = predict_next();
echo '<h2 class="text-center">' . date('F Y', strtotime($given_date)) . '</h2>'; // Add this line


// Get the month and year from the given date
$month = date('n', strtotime($given_date));
$year = date('Y', strtotime($given_date));

// Get the first day of the given month
$first_day = date('N', strtotime($year . '-' . $month . '-01'));

// Get the number of days in the given month
$num_days = date('t', strtotime($year . '-' . $month . '-01'));

// Calculate the offset based on the first day of the month
$offset = ($first_day - 1) % 7;

// Loop through each day in the given month
for ($day = 1; $day <= $num_days; $day++) {
    // Determine if this day is within the next 7 days of the given date
    $given_day = strtotime($given_date);
    $current_day = strtotime("$year-$month-$day");
    $is_next_7_days = false;
    if ($current_day >= $given_day && $current_day <= strtotime("+7 days", $given_day)) {
        $is_next_7_days = true;
    }

    // Determine the grid column for this day
    $col = ($day + $offset) % 7;
    if ($col == 0) {
        $col = 7;
    }

    // Generate the button HTML
    echo '<div class="number-wrapper';
    if ($is_next_7_days) {
        echo ' red';
    }
    echo '" style="grid-column: ' . $col . '">';
    echo $day;
      echo '</div>';


		}
		?>
	</div>
</body>
</html>
