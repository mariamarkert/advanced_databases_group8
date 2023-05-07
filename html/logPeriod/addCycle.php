
<?php 
       session_start(); 
	include "../connect/connect.php";

	
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate inputs
	
    // Retrieve form data from $_POST superglobal
       $user_id = $_SESSION['userid'];
       $period_start = $_POST['period-start'];
       $period_end = $_POST['period-end'];
       $symptoms = $_POST['symptoms'];
       // Get the checkbox values
       $headache = isset($_POST['symptoms']) && in_array('Headache', $_POST['symptoms']) ? 1 : 0;
       $cramps = isset($_POST['symptoms']) && in_array('Cramps', $_POST['symptoms']) ? 1 : 0;
       $nausea = isset($_POST['symptoms']) && in_array('Nausea', $_POST['symptoms']) ? 1 : 0;
       $fatigue = isset($_POST['symptoms']) && in_array('Fatigue', $_POST['symptoms']) ? 1 : 0;
       $acne = isset($_POST['symptoms']) && in_array('Acne', $_POST['symptoms']) ? 1 : 0;
       $bloating = isset($_POST['symptoms']) && in_array('Bloating', $_POST['symptoms']) ? 1 : 0;

       // Perform any necessary validation and sanitation of the data

       // Prepare the query
       $query = "INSERT INTO cycle (user_id, user_cycle_id, cycle_length, headache, cramps, nausea, fatigue, acne, bloatng, period_start, period_end)
              VALUES (:user_id, cycle_user_id_seq.nextval, NULL, :headache, :cramps, :nausea, :fatigue, :acne, :bloatng, TO_DATE(:period_start, 'yyyy-mm-dd'), TO_DATE(:period_end, 'yyyy-mm-dd'))";
       $stmt = oci_parse($conn, $query);

       // Bind the values to the prepared statement
       oci_bind_by_name($stmt, ':user_id', $user_id);
       oci_bind_by_name($stmt, ':cycle_length', $cycle_length);
       oci_bind_by_name($stmt, ':headache', $headache);
       oci_bind_by_name($stmt, ':cramps', $cramps);
       oci_bind_by_name($stmt, ':nausea', $nausea);
       oci_bind_by_name($stmt, ':fatigue', $fatigue);
       oci_bind_by_name($stmt, ':acne', $acne);
       oci_bind_by_name($stmt, ':bloatng', $bloating);
       oci_bind_by_name($stmt, ':period_start', $period_start);
       oci_bind_by_name($stmt, ':period_end', $period_end);


       // Execute the prepared statement
       if (oci_execute($stmt)) {
              echo 'Cycle added successfully.';
              oci_free_statement($stmt);
              oci_close($conn);
              //exit();
          } else {
              $error = oci_error($stmt);
              echo 'Error ading cycle: ' . $error['message'];
              oci_free_statement($stmt);
              oci_close($conn);
              exit();
          }

}
        	
?>

