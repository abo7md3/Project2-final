<?php
	$db = new mysqli('localhost','root','','ABET');
	
		// receive all input values from the form
		
        $so = mysqli_real_escape_string($db, $_POST['map1']);
        $clo = mysqli_real_escape_string($db, $_POST['map2']);
        $con = mysqli_real_escape_string($db, $_POST['con1']);

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
            $query = "INSERT INTO map (name,student_outcome,outcome,con) 
                    VALUES('$name','$so', '$clo', '$con')";
          mysqli_query($db, $query);
          echo "Registration successfully...";
          header('location: dd1ck.php');
  
          $db->close();
        }    
    }