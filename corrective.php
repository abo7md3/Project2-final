<?php
	$db = new mysqli('localhost','root','','ABET');
	
		// receive all input values from the form
		
        $corr = mysqli_real_escape_string($db, $_POST['corrective']);

       // Database connection
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
  

        if($db->connect_error){
            echo "$db->connect_error";
            die("Connection Failed : ". $db->connect_error);
        } 
        
        
        else {
            if (isset($_GET['id'])) {
                $result = mysqli_query($db, "SELECT name FROM course WHERE id='" . $_GET['id'] . "'");
                $row= mysqli_fetch_array($result);
$name = $row['name'];
            $query = "INSERT INTO corrective (name,cor_action) 
                    VALUES('$name','$corr')";
          mysqli_query($db, $query);
          echo "Registration successfully...";
          header('location: home.php');
  
          $db->close();
        }    
    }