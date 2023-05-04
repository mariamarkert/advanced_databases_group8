	<div class="calendar">
		<?php
		// Set the timezone to the local timezone
		date_default_timezone_set('America/New_York');

		// Get the number of days in May 2023
		$num_days = date('t', strtotime('May 2023'));

		// Loop through each day in May 2023
		for ($day = 1; $day <= $num_days; $day++) {
		    // Check if this day is already clicked
		    $filename = '../templates/num.php';
		    $handle = fopen($filename, 'r');
		    $content = fread($handle, filesize($filename));
		    fclose($handle);
		    $clicked = in_array($day, explode(',', $content));

		    // Generate the button HTML
		    echo '<div class="number-wrapper';
		    if ($clicked) {
		        echo ' clicked';
		    }
		    echo '" onclick="';

		    // Count the number of currently clicked buttons
		    echo 'var clicked_count = document.querySelectorAll(\'.number-wrapper.clicked\').length;';

		    // Allow the button to be toggled if less than 7 buttons are clicked
		    echo 'if (this.classList.contains(\'clicked\')) {';
		    echo 'this.classList.remove(\'clicked\');';
		    echo '} else if (clicked_count < 7) {';
		    echo 'this.classList.add(\'clicked\');';
		    echo '}';

		    // Get the index of the clicked button
		    echo 'var clicked_index = -1;';
		    echo 'var buttons = document.querySelectorAll(\'.number-wrapper\');';
		    echo 'for (var i = 0; i < buttons.length; i++) {';
		    echo 'if (buttons[i] == this) {';
		    echo 'clicked_index = i;';
		    echo 'break;';
		    echo '}';
		    echo '}';

		    // Click the next 7 buttons
		    echo 'if (clicked_index >= 0 && this.classList.contains(\'clicked\')) {';
		    echo 'for (var i = clicked_index + 1; i < buttons.length && i <= clicked_index + 7; i++) {';
		    echo 'buttons[i].classList.add(\'clicked\');';
		    echo '}';
		    echo '}';

		    // Save the clicked numbers to the server
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


