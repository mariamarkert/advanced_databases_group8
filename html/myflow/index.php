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
						<img src="menstrual-cycle.png" alt="period icon" width="500" style="float:left"/>
                      
						<section style="background-color: #ffe6f2">
                        <center>
                            <h1 style="margin-top:30px">Your most recent cycle</h1>
							<h2>Cycle length: </h2>
								<h4> <?php include "cycle_len.php"; ?> days</h4>
								<h4> <?php include "cycle_dates.php"; ?> </h4>
							<h2>Symptoms: </h2>
								<?php include "symptoms.php"; ?> 
								
								
                        </center>
						</section>
                    </section>
                </body>
                
