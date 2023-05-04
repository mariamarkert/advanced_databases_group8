<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<style>
		body {
			background-color: #ffe6f2;
			font-family: 'Arial', sans-serif;
		}
		header {
			background-color: #ff66b3;
			padding: 20px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 1;
		}
		header a {
			color: #fff;
			text-decoration: none;
			font-size: 18px;
			font-weight: bold;
			padding: 10px 20px;
			border-radius: 10px;
			margin-right: 20px;
		}
		header a:hover {
			background-color: #ff4d94;
		}
		h1 {
			color: #ff66b3;
			font-size: 36px;
			margin-top: 100px;
			text-align: center;
		}
		h3 {
			color: #ff66b3;
			font-size: 26px;
			margin-top: 30px;
			text-align: center;
		}
		section {
			display: flex;
			margin-top: 50px;
			justify-content: space-between;
			align-items: flex-start;
			flex-wrap: wrap;
			max-width: 1200px;
			margin: 0 auto;
			padding: 50px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
		}
		.calendar {
			width: 30%;
		}
		.calendar h2 {
			color: #ff66b3;
			font-size: 24px;
			margin-bottom: 20px;
		}
		.calendar iframe {
			width: 100%;
			height: 500px;
			border: none;
		}
		.text-section {
			width: 45%;
		}
		.text-section h2 {
			color: #ff66b3;
			font-size: 24px;
			margin-bottom: 20px;
		}
		.text-section p {
			color: #666;
			font-size: 16px;
			line-height: 24px;
			margin-bottom: 40px;
		}
	</style>
</head>
<body>
		<?php 
					include "../templates/header.php";
					include "../templates/your_stage.php"; ?>   
					<button>Log Period</button>
                    <section>
						<div class="calendar">
							<h2>Upcoming Events</h2>
							<iframe src="https://calendar.google.com/calendar/embed?src=en.usa%23holiday%40group.v.calendar.google.com&ctz=America%2FNew_York" style="border: 0" frameborder="0" scrolling="no"></iframe>
						</div>
                        <div class="image-section">
                            <img src="https://via.placeholder.com/400x400.png?text=Image+Placeholder" alt="Sample Image">
                        </div>
                        <div class="text-section">
                            <h2>Exercises</h2>
                            <p>The Best Exercises for you in this stage will be low impact includeinf Gentle Stretching and relaxation, and Low-Impact aerobic exercise.</p>
                        </div>
                        <div class="text-section">
                            <h2>Nutrition</h2>
                            <p>The best things to eat in this phase include: Red meat, poultry, fish, beans, lentils, tofu, fortified cereals, leafy green vegetables, dried fruits</p>
                           </div>
                    </section>
                </body>
                
