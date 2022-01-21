<?php
session_start();
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title> مادة </title>
    <link rel="stylesheet" href="assets/css/sty.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/.css">


    <link rel="icon" href="ms-icon.png">
    <style>
        
     @media (max-width: 576px) {
    html { font-size: 0.7rem; }
    th { font-size: 1rem; }
}
@media (min-width: 768px) {
    html { font-size: 0.8rem; }
    th { font-size: 1rem; }

}
@media (min-width: 992px) {
    html { font-size: 0.8rem; }
    th { font-size: 1rem; }
}
@media (min-width: 1200px) {
    html { font-size: 0.8rem; }
    th { font-size: 1rem; }
}
ul.a {
  list-style-type: circle;
}
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
  background-color: #f2f2f2;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;

}
h2{
    text-align: center;
}
table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
  background-color: #ccc;

}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
#StudentName {
  text-align: left;
}

#IDnumber {
  text-align: left;
}

.button1 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s;
  /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}




.main-card #myTable table, th, td {
    border: 1px solid black; 
    font-family: sans-serif;

}





#myTable{
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;

}


#mapping  {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 3.0vh;
}

#mapping  th {
    font-size: 3.0vh;
        padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:black;
  color: white;
  border-radius: 10px;
  border: 1px solid #ddd;
  padding: 8px;
  border-radius: 10px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;}
        table { width: 70%; }
        table  {
           
             border: solid 1px #DDD;
            border-collapse: collapse; padding: 2px 6px; text-align: center;
        }
        .btn1{
            color: #DDD;
            background-color: #f2f2f2;
        }
        #average{
            font-size: 20px;
            text-align: center;

        }
        #satisfactory{
            font-size: 20px;
            text-align: center;
        }
        
    </style>

</style>
    <script>
        var DARK_THEME = document.getElementById('dark_theme');
        var HEAD = document.getElementsByTagName('head')[0];
        var CURRENT_THEME = 'light';


        const AAA = "#181F25";
        const BBB = '#EFF1F2';
    </script>
    <script>
        var CURRENT_THEME = 'dark';
    </script>


</head>

<body onload="createTable()">
<?php
$db = new mysqli('localhost','root','','ABET');

        $id = mysqli_real_escape_string($db, $_GET['id']);
        ?>

    <div class="sidebar-main-container" id="sidebar">
        <a href="" class="noSelect">
            <img class='sidebar-logo' src="" alt="">
        </a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <a id="mainpage" href="home.php" class="sidebar-item-container noSelect">
            <div class="sidebar-item-title">
                المواد
            </div>
            <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
              </svg>


            <a id="addcourse" href="add.php" class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                    أضف مادة
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>
            
            <a id="addclo" href="addclo.php?id=<?php echo $id; ?>"  class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                    أضف clo
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>
            <a id="map" href="dd1.php" class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                   ربط So & Clo
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>

<!-- Put you mysqli connection here ................ -->

<style>
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
	</style>
	
	<?php

$con = mysqli_connect("localhost","root","","ABET");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>
<!-- Put your style layout here...... -->

<div class="main-card">
<?php

echo '<select>
<option>Select</option>';

$sqli = "SELECT * FROM So";
$result = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['student_outcome'].'</option>';
}

echo '</select>';

?>

<?php

echo '<select>
<option>Select</option>';

$sqli = "SELECT * FROM Clo";
$result = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['outcome'].'</option>';
}

echo '</select>';

?>
</div>
</body>
</html>