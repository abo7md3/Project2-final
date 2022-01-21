<?php
	$db = new mysqli('localhost','root','','ABET');
	
		// receive all input values from the form
		
        $collage = mysqli_real_escape_string($db, $_POST['collage']);
        $section = mysqli_real_escape_string($db, $_POST['section']);
        $so = mysqli_real_escape_string($db, $_POST['student_outcome']);
        $so1 = mysqli_real_escape_string($db, $_POST['student_outcome1']);



      
        
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


		$query = "INSERT INTO So (collage,section,student_outcome) 
  			  VALUES('$collage', '$section', '$so')";
  	mysqli_query($db, $query);
      if(!empty($_POST['student_outcome1'])){

        $query = "INSERT INTO So (collage,section,student_outcome) 
            VALUES('$collage', '$section', '$so1')";
  mysqli_query($db, $query);

    echo "Registration successfully...";
    header('location: home.php');
    }
		echo "Registration successfully...";
        header('location: home.php');

		$db->close();
  }
	
?>