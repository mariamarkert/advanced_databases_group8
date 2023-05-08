<?php 
	session_start();
    include "../connect/connect.php";
    
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate inputs
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $first_name = htmlspecialchars($_POST['first-name']);
        $last_name = htmlspecialchars($_POST['last-name']);
        $birthday = htmlspecialchars($_POST['birthday']);
        if (is_numeric($_POST['height']) && is_numeric($_POST['weight']) && is_numeric($_POST['pregnancies'])) {
            // height and weight are numeric, proceed with insertion
            $height = (int)$_POST['height'];
            $weight = (int)$_POST['weight'];
            $pregnancies = (int)$_POST['pregnancies'];
        } else {
            // height and/or weight are not numeric, handle error
            echo "Error: Height and weight must be numeric values.";
            exit();
        }
    
        // Check if the username already exists in the database
        $query = "SELECT COUNT(*) as cnt FROM users WHERE username = :username";
        $stmt = oci_parse($conn, $query);
        oci_bind_by_name($stmt, ':username', $username);
        oci_execute($stmt);
        
        $count = oci_fetch_array($stmt)];
        if ($count['cnt'] > 0) {
            // Username already exists, handle error
            echo "Error: Username already exists.";
            exit();
        }
    
 /*       
        $query = "INSERT INTO users (username, upassword, first_name, last_name, birthday, uheight, uweight, bmi, num_preg)
          VALUES (:username, :password, :first_name, :last_name, TO_DATE(:birthday, 'yyyy-mm-dd'), :height, :weight, NULL, :pregnancies)
          RETURNING user_id INTO :user_id";
        $stmt = oci_parse($conn, $query);

        // Bind the values to the prepared statement
        oci_bind_by_name($stmt, ':username', $username);
        oci_bind_by_name($stmt, ':password', $password);
        oci_bind_by_name($stmt, ':first_name', $first_name);
        oci_bind_by_name($stmt, ':last_name', $last_name);
        oci_bind_by_name($stmt, ':birthday', $birthday);
        oci_bind_by_name($stmt, ':height', $height);
        oci_bind_by_name($stmt, ':weight', $weight);
        oci_bind_by_name($stmt, ':pregnancies', $pregnancies);
        oci_bind_by_name($stmt, ':user_id', $user_id, -1, OCI_B_INT);

        // Execute the prepared statement
        if (oci_execute($stmt)) {
            // Retrieve the generated user_id value
            oci_fetch($stmt);
            $user_id = $user_id;
            $_SESSION['userid'] = $user_id;
            echo 'User created successfully.';
            oci_free_statement($stmt);
            oci_close($conn);
            header("Location: ../home/");
            exit();
        } else {
            $error = oci_error($stmt);
            echo 'Error creating user: ' . $error['message'];
            oci_free_statement($stmt);
            oci_close($conn);
            header("Location: ../createUser");
            exit();
        }
*/
    }
    
?>

			
    



