<?php
	$db = new mysqli('localhost','root','','ABET');
    $output = '';
    $result = mysqli_query($db, "SELECT * FROM course WHERE name Like'%". $_GET['searchInput'] . "%'");

    if (mysqli_num_rows($result) > 0) {


    }
	?>
