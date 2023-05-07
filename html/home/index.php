<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
<body>
    <?php 
        include "../templates/header.php";
        include "../templates/your_stage.php";
		session_start();
		echo $_SESSION['userid'];
    ?>   

    <section class="container">
        <div class="row justify-content-between">
    		<div class="col-sm-3">
				<h2 class="text-center">May 2023</h2>
        		<?php include "../templates/maycal.php" ?>
    			</div>
			</div>
			<div class="col-sm-2">
                <button onclick = "window.location.href='../logPeriod/';" class="btn-home">Log Period</button>
            </div>
    		
		</div>

		<div class="row justify-content-between" style="margin-top:40px">
			<br>
			<br>
            <center class="col-sm-6 mt:4">
                <center class="text-section">
				
                    <h2>Exercises</h2>
                    <p><?php include "../sql_php/exercise_home.php" ?></p>
                </center>
			</center>
			<center class="col-sm-6">

                <center class="text-section">
                    <h2>Nutrition</h2>
					<p><?php include "../sql_php/nutrition_home.php";?></p>
                 </center>
            </center>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
           