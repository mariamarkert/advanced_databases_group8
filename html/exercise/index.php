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
			width: 40%;
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
                    <section>
                        <div class="image-section">
                            <img src="yoga.png" alt="yoga" style="float:left" width="450">
                       </div>
						<section class="text-section" style="background-color: #ffe6f2">
							<center>
                            <h1 style="margin-top:20px">Recommended Exercises</h1>
							<h4>Based on the stage of your cycle that you are in, your body will benefit most from these exercises:</h4>
							<h3> Swimming</h3>
							<h3> Yoga </h3>
							<h3> Flexibility Exercises </h3>
							</center>
                        </section>
                    </section>
                </body>
                
