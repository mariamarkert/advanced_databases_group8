<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<?php
// Set the timezone to the local timezone
date_default_timezone_set('America/New_York');

// Get the number of days in May 2023
$num_days = date('t', strtotime('May 2023'));


// Loop through each day in May 2023
for ($day = 1; $day <= $num_days; $day++) {
    // Check if this day is already clicked
    $filename = 'num.php';
    $handle = fopen($filename, 'r');
    $content = fread($handle, filesize($filename));
    fclose($handle);
    $clicked = in_array($day, explode(',', $content));

    // Generate the button HTML
    echo '<div class="number-wrapper';
    if ($clicked) {
        echo ' clicked';
    }
    echo '" onclick="this.classList.toggle(\'clicked\');';
    echo 'var nums = document.querySelectorAll(\'.number-wrapper.clicked .cal-number\');';
    echo 'var clicked_nums = [];';
    echo 'for (var i = 0; i < nums.length; i++) {';
    echo 'clicked_nums.push(nums[i].textContent);';
    echo '}';
    echo 'var xmlhttp = new XMLHttpRequest();';
    echo 'xmlhttp.open(\'POST\', \'num.php\', true);';
    echo 'xmlhttp.setRequestHeader(\'Content-type\', \'application/x-www-form-urlencoded\');';
    echo 'xmlhttp.send(\'clicked_nums=\' + JSON.stringify(clicked_nums));"';
    echo '>';
    echo '<div class="cal-number">' . $day . '</div>';
    echo '</div>';
}
?>

