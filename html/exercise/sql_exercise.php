
<?php 
	session_start(); 
	include "../connect/connect.php";
	if (isset($_SESSION['userid'])){
		if(!isset($_SESSION['stageid'])) {
			include "../templates/set_stage_id.php";
		}
		$stageid = $_SESSION['stageid'];
		$stageid =1;
		$query = "SELECT * FROM (SELECT ex_name, ex_desc FROM exercise WHERE ideal_stage_id='$stageid')";

		$stmt = oci_parse($conn, $query);
			
		oci_execute($stmt);
		//$row = oci_fetch_array($stmt);
		// Get the value of the username column for the first row
		//echo $row;
		//$exname = $row['EX_TYPE'];
		//echo $nutname;
		//$exname = str_replace("'", "", $exname);
		//$nutstring = "This stage is great time to focus exercises like $exname and always listening to you body for when to rest.";
			$rows = array();
oci_fetch_all($stmt, $rows, null, null, OCI_FETCHSTATEMENT_BY_ROW);

// Print the results
echo "<table>";
foreach ($rows as $row) {
    echo "<tr>";
    foreach ($row as $column) {
        echo "<td>" . $column . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

oci_free_statement($stmt);
oci_close($conn);
		
					
	}else{
		header("Location: ../");
		exit();
	}
	if(empty($nutstring)){
		$nutstring = "This is a greate time to focus on moving your body to what you feel capable of and respecting your rest days.";
	}
	//echo $nutstring;

?>

