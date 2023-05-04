<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Health Tracker</title>
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
</head>
<body>
	<h1>Health Tracker</h1>
	<div class="form-container">
		<form method="post" action="addCycle.php">
			<label for="date-started">Date started:</label>
			<input type="date" id="date-started" name="date-started" required><br>
		
			<label for="date-ended">Date ended:</label>
			<input type="date" id="date-ended" name="date-ended" required><br>
				
			<label for="symptoms">Symptoms:</label>
			<div class="col-lg-2">
<div class="row-lg">
    <input type="checkbox" id="headache" name="symptoms[]" value="Headache">
    <label for="headache">Headache</label>
  </div>
  <div class="row">
    <input type="checkbox" id="cramps" name="symptoms[]" value="Cramps">
    <label for="cramps">Cramps</label>
  </div>
  <div class="row">
    <input type="checkbox" id="nausea" name="symptoms[]" value="Nausea">
    <label for="nausea">Nausea</label>
  </div>
  <div class="row">
    <input type="checkbox" id="fatigue" name="symptoms[]" value="Fatigue">
    <label for="fatigue">Fatigue</label>
  </div>
  <div class="row">
    <input type="checkbox" id="acne" name="symptoms[]" value="Acne">
    <label for="acne">Acne</label>
  </div>
  <div class="row">
    <input type="checkbox" id="bloating" name="symptoms[]" value="Bloating">
    <label for="bloating">Bloating</label>
  </div>
</div>
<input type="submit" value="Add Cycle">
					</form>
	</div>
</body>

