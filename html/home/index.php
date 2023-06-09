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

    <div class="container-fluid bg-white  text-center" style="margin-top:40px; border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  max-width: 1200px;
  margin: 0 auto;
  padding: 50px;">
        <div class="row">
            <div class="col-md-4">
                <button onclick="window.location.href='../logPeriod/';" class="btn-home">Log Period</button>
            </div>
            
            <div class="col-md-4">
                <h2>Prediction for: </h2>
                <?php include "../templates/newcal.php" ?>
            </div>
            
            <div class="col-md-4">
                <!-- Empty column for spacing -->
            </div>
        </div>

        <div class="row" style="margin-top:40px">
            <div class="col-md-6">
                <center class="text-section">
                    <h2>Exercises</h2>
                    <p><?php include "../sql_php/exercise_home.php" ?></p>
                </center>
            </div>
            
            <div class="col-md-6">
                <center class="text-section">
                    <h2>Nutrition</h2>
                    <p><?php include "../sql_php/nutrition_home.php";?></p>
                </center>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>

