<?php
	$db = new mysqli('localhost','root','','ABET');
	
		// receive all input values from the form
        $clo = mysqli_real_escape_string($db, $_POST['outcome']);

        $mark = mysqli_real_escape_string($db, $_POST['mark']);

       // Database connection
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
  

        if($db->connect_error){
            echo "$db->connect_error";
            die("Connection Failed : ". $db->connect_error);
        } 
        
        
        else {
               
            $query = "INSERT INTO marks (clo,mark) 
                    VALUES('$clo','$mark')";
          mysqli_query($db, $query);
          echo "Registration successfully...";
          header('location: home.php');
  
          $db->close();
           
    }