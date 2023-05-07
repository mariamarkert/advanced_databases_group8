<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>

	<link rel="stylesheet" href="../css/styles.css">

</head>
<body>
		<?php 
					include "../templates/header.php";
					include "../templates/your_stage.php"; ?>  
                    <section>
                        <div class="image-section">
                            <img src="dish.png" alt="dish" style="float:left" width="450">
                       </div>
						<section class="text-section" style="background-color: #ffe6f2">
							<center>
                            <h1 style="margin-top:20px">Recommended Nutrition</h1>
							<h4>Based on the stage of your cycle that you are in, you should focus on <?php include "nut_name.php" ?></h4>
							<h3><?php include "nut_desc.php" ?></h3>
														</center>
                        </section>
                    </section>
                </body>
                
