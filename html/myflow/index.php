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
								<h4> <?php include "cycle_len.php"; ?> </h4>
								<h4> April 6 - May 1 </h4>
							<h2>Symptoms: </h2>
								
								<h4>headache </h4>
								<h4>cramps</h4>
								<h4>nausea </h4>
								
                        </center>
						</section>
                    </section>
                </body>
                
