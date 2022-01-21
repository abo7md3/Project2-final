<?php
	$db = new mysqli('localhost','root','','ABET');
	
		// receive all input values from the form

        session_start();
        $name = $_SESSION['name'];
        $section = mysqli_real_escape_string($db, $_POST['section']);
        $out = mysqli_real_escape_string($db, $_POST['outcome']);
        $out1 = mysqli_real_escape_string($db, $_POST['outcome1']);



      
        
if($section == 1){
	$section = "هندسة حاسب";
}
if($section == 2){
	$section = "علوم حاسب";
}
if($section == 3){
	$section = "هندسة برمجيات";
}
if($section == 4){
	$section = " نظم المعلومات";
}
if($section == 8){
	$section = " تقنية المعلومات";
}
	// Database connection
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
  


	
	if($db->connect_error){
		echo "$db->connect_error";
		die("Connection Failed : ". $db->connect_error);
	} 
    
    
    else {
       
		$query = "INSERT INTO Clo (name,section,outcome) 
  			  VALUES('$name', '$section', '$out')";
  	mysqli_query($db, $query);
      if(!empty($_POST['outcome1'])){

        $query = "INSERT INTO Clo (name,section,outcome) 
        VALUES('$name', '$section', '$out1')";
  mysqli_query($db, $query);

    
    }
    echo "Registration successfully...";
    header('location: home.php');
    
    }
    echo "Registration successfully...";
    header('location: home.php');
    
		$db->close();


	
?>

          