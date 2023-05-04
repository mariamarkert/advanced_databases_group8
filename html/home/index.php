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
    ?>   

    <section class="container">
        <div class="row justify-content-between">
    		<div class="col-sm-2">
        		<?php include "../templates/maycal.php" ?>
    			</div>
			</div>
			<div class="col-sm-2">
                <button onclick = "window.location.href='../logPeriod/';" class="btn">Log Period</button>
            </div>
    		
		</div>

		<div class="row justify-content-between">
            <div class="col-sm-6">
                <div class="text-section">
                    <h2>Exercises</h2>
                    <p>The Best Exercises for you in this stage will be low impact includeinf Gentle Stretching and relaxation, and Low-Impact aerobic exercise.</p>
                </div>
			</div>
			<div class="col-sm-6">

                <div class="text-section">
                    <h2>Nutrition</h2>
                    <p>The best things to eat in this phase include: Red meat, poultry, fish, beans, lentils, tofu, fortified cereals, leafy green vegetables, dried fruits</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
           
