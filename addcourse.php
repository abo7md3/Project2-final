<?php
	$db = new mysqli('localhost','root','','ABET');
	
		// receive all input values from the form
		$Name = mysqli_real_escape_string($db, $_POST['name']);
		$Number = mysqli_real_escape_string($db, $_POST['number']);
        $collage = mysqli_real_escape_string($db, $_POST['collage']);
        $section = mysqli_real_escape_string($db, $_POST['section']);

        $result = $Name . ' ' . $Number;
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
	} else {
		
		$query = "INSERT INTO course (name,collage,section) 
  			  VALUES('$result', '$collage', '$section')";
  	mysqli_query($db, $query);
	
		echo "Registration successfully...";
        header('location: home.php');

		$db->close();
  }
	
?>