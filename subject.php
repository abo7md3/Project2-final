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
    width: 100%;

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
            <a id="map" href="dd1ck.php?id=<?php echo $id; ?>" class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                   ربط So & Clo
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>


          
<?php 	
$db = new mysqli('localhost','root','','ABET');
	
   
// Database connection
ini_set("display_errors", "1");
error_reporting(E_ALL);

?>

<?php
if (isset($_GET['id'])) {
    $result = mysqli_query($db, "SELECT * FROM course WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
}



?>







    </div>

    <div class="overlay stopScroll noSelect" id="overlay" onclick="close_sidebar()"></div>



    <div class="body">








        <form action="" method="POST" class="main-card" id="">

        <div class="inputs">
                <div class="title">
                    <h2><?php echo $row['name'];?> </h2>
                </div>
               

            </div>
            
        <table>
  <thead>
    <tr>
    <?php  
            $db = new mysqli('localhost','root','','ABET');
            if (isset($_GET['id'])) {
                $result1 = mysqli_query($db, "SELECT section FROM course WHERE id='" . $_GET['id'] . "'");
                $row= mysqli_fetch_array($result1);
                $y= $row['section'];

                if (isset($y)) {
                    ?>
                <tr>
                <th>Student outcome of <?php echo $y; ?> </th>
                
              </tr>
                <?php
                $sql = "SELECT student_outcome FROM So where section = '$y' ";
                    $result1 = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_array($result1)) {
                            ?>  
                        
                      
                
                   <tr>
                    <td><?php echo $row['student_outcome']; ?> </td>
    
                    
                   
                            
                        
                          <?php
                        }
                    }
                }
            }
                          ?>  

</table>
  <br>
  <br>
  <table>
   <?php  
            $db = new mysqli('localhost','root','','ABET');
            if (isset($_GET['id'])) {
                $result2 = mysqli_query($db, "SELECT name FROM course WHERE id='" . $_GET['id'] . "'");
                $row= mysqli_fetch_array($result2);
                $x= $row['name'];

                if (!empty($x)) {
                    ?>
                <tr>
                <th scope="col">Course learning outcome of  <?php echo $x; ?> </th>
                
              </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT outcome FROM Clo WHERE name = '$x' ";
                    $result2 = mysqli_query($db, $sql);
                    if ($result2 && mysqli_num_rows($result2) > 0) {
                        while ($row = mysqli_fetch_array($result2)) {
                            ?>  
                        
                      
                
  <tr>
    <td  data-label="Course learning outcome of  <?php echo $x; ?> "><p><?php echo $row['outcome']; ?> </p></td>
   
</td>
  </tr>
            
                            
                        
                          <?php
                        }
                    }
                }
            }
                          ?>  
                          </table>
  <br>
  <br>
        <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

 


            
        </form>
  
        <div class= "main-card">
        <h2>mapping Table</h2>
        <table>
        <th>Clo</th>
                       <th>So</th>
                       
                       <th>con</th>

<?php
        $db = new mysqli('localhost','root','','ABET');
        if (isset($_GET['id'])) {
            $result2 = mysqli_query($db, "SELECT name FROM course WHERE id='" . $_GET['id'] . "'");
            $row= mysqli_fetch_array($result2);
            $x= $row['name'];

            if (!empty($x)) {
                ?>
              
            <?php
            $sql = "SELECT * FROM map WHERE name = '$x' ";
                $result4 = mysqli_query($db, $sql);
                if ($result4 && mysqli_num_rows($result4) > 0) {
                   
                    while ($row = mysqli_fetch_array($result4)) {
                       ?>

                        <tr>
                       
                        <td><?php echo $row['outcome']; ?> </td>
                        <td><?php echo $row['student_outcome']; ?> </td>
                        <td><?php echo $row['con']; ?> </td>

                        
                        
                      </tr>
    <?php
                    }
                }
            }
        }
            ?>
    

    
</table>
        </div>
        <form action="mark.php?id=<?php echo $id; ?>" method="POST" class="main-card" id="">
    <h2>mapping Table</h2>
       
<table id="map">
  <tr>
    <th>clo</th>
    <th>sub</th>
    <th>marks</th>
  </tr>
  <?php  

            $db = new mysqli('localhost','root','','ABET');
            if (isset($_GET['id'])) {
                $result2 = mysqli_query($db, "SELECT name FROM course WHERE id='" . $_GET['id'] . "'");
                $row= mysqli_fetch_array($result2);
                $x= $row['name'];

                if (!empty($x)) {
                    ?>
                  
                <?php
                $sql = "SELECT outcome FROM Clo WHERE name = '$x' ";
                    $result3 = mysqli_query($db, $sql);
                    if ($result3 && mysqli_num_rows($result3) > 0) {
                       
                        while ($row = mysqli_fetch_array($result3)) {
                            
                            ?>  
                        
                        
                
  <tr>
    <td><?php echo $row['outcome']; ?> </td>
    <td> <input onkeyup="name_change()" id="name" type="text" name="name" value="" required placeholder="  " autocomplete="off"> </td>
    <td> <input onkeyup="name_change()" id="mark" type="text" name="mark" value="" required placeholder="marks  " autocomplete="off"> </td>
    
  </tr>
  <?php 
                        }
                        ?>
                       
    <?php
                    }
                }
            }
  ?>
  <tr>
   
</table>
<br>
<br>
<div class="buttongro"> 
    <button type='btn1' class="btn1" onclick="sendmarks()">
      Save Marks

    </button>
</div>
        </form>
    <script> 
    
calcAverage = function() {
	var tbl = document.getElementById('myTable1');
  var count = 0;
  var total = 0;
	for(var i= 1; i<tbl.rows.length; i++){
		var num = Number(tbl.rows[i].cells[1].innerHTML);
		total += num;
    count++;
	}
  console.log(total/count);
  document.getElementById("average").innerHTML = "%" + total/count * 10 ;
}
    </script><br>
        <br>
        <br>

    
<br> 
<div class="main-card">
<table id="myTable" style="width:100%">

    <th id="StudentName" bgcolor="FFF55A">Name</th>
    <th id="IDnumber" bgcolor="#FFF55A">ID</th>
    <th bgcolor="#FFF55A">CLO 1</th>
    <th bgcolor="#FFF55A">CLO 2</th>
    <th bgcolor="#FFF55A">CLO 3</th>
    <th bgcolor="#FFF55A">CLO 4</th>
    <th bgcolor="#FFF55A">CLO 5</th>
    <th bgcolor="#FFF55A">CLO 6</th>

    <th bgcolor="#FFF55A">Avg</th>
    <th bgcolor="#FFF55A">Sat lvl</th>

  </tr>
  <tr>
    <td contenteditable='true'>Person1 </td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'>Person2</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'>Person3</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'> Person4</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'>Person5</td>
    <td contenteditable='true'> </td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'>Person6</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'>Person7</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'>Person8</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr>
    <td contenteditable='true'>Person9</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    

    <td></td>
    <td></td>

  </tr>

  <tr>
    <td contenteditable='true'>Person10</td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>

  </tr>
  <tr> 
  <td contenteditable='true'>Avg</td>
 <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>

    <td></td>
    <td></td>
  </tr>

</table>
<div class="buttongro"> 
<button id="myFunction" class="button1">Calculate Averge & Satisfactory </button>

<button type="button" onclick="addRow1()">Add row</button>



</div>
</div>
<script> 
        function addRow1() {
            var table = document.getElementById('myTable');
      var row = table.getElementsByTagName('tr');
      var row = row[row.length-1].outerHTML;
      table.innerHTML = table.innerHTML + row;
      var row = table.getElementsByTagName('tr');
      var row = row[row.length-1].getElementsByTagName('td');
      for(i=0;i<row.length;i++){
        row[i].innerHTML = '';
        }
    }
        function addColumn() {
            var table = document.getElementById('myTable');
            for (var r = 0, n = table.rows.length; r < n; r++) {
                table.rows[r].insertCell(2);
                table.rows[r].cells[2].innerHTML = '';
            }
        }

        function deleteRow() {
            document.getElementById("myTable").deleteRow(1);
        }

        function deleteColumn() {
            // var row = document.getElementById("myRow");
            var table = document.getElementById('myTable');
            for (var r = 0, n = table.rows.length; r < n; r++) {
                table.rows[r].deleteCell(0); // var table handle
            }
        }
    
 function myFunction() {
   var table = document.getElementById("myTable");
   var rows = table.rows;
   
   for (var i = 1; i < rows.length; i++) {
     var cells = rows[i].cells;

     var sum = 0;
		 var numbers = 0;
     for (var x = 2; x < (cells.length -1); x++) {
       var cell = cells[x];
       var addme = parseInt(cell.innerHTML);
       if(!isNaN(addme)) {       
          sum += addme;
          numbers++;

       }
     }
     var average = sum / numbers * 10;
     rows[i].cells[8].innerHTML = "<td>" + "%"+ Math.round(average) + "</td>";
     rows[i].cells[9].innerHTML = "<td>" + Math.round(sum) + "</td>";


   }
 }

document.getElementById('myFunction').onclick = myFunction;
</script>
<br>
<div class="main-card">
    <h2>previous corrective action</h2>
    <table>
    <?php
  
$db = new mysqli('localhost','root','','ABET');
if (isset($_GET['id'])) {
    $result = mysqli_query($db, "SELECT name FROM course WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
$name = $row['name'];

    $result2 = mysqli_query($db, "SELECT cor_action FROM corrective WHERE name='" . $name . "'");

    while ($row = mysqli_fetch_array($result2)) {
       ?>
       <tr>
           <td><?php echo $row['cor_action']; ?> </td>
           </tr>
<?php
       
        }
        
}
?>
  </table>
</div>

<form action="corrective.php?id=<?php echo $id; ?>" method="POST" class="main-card" id="">
 <h2>Corrective Action </h2>

 <input type="text" name="corrective" >
 <br>
 <br>
 <button class="button">اضف </button>
</div>
</form>
<br>
<br>


    <footer>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
        openConsoleUrl = "https://www.google.com"
    </script>
    <script>
        (function() {
            try {
                var $_console$$ = console;
                Object.defineProperty(window, "console", {
                    get: function() {
                        if ($_console$$._commandLineAPI)
                            throw "Sorry, for security reasons, the script console is deactivated ";
                        return $_console$$
                    },
                    set: function($val$$) {
                        $_console$$ = $val$$
                    }
                })
            } catch ($ignore$$) {}
        })();
    </script>
    <script>
        document.addEventListener('keydown', function() {
            if (event.keyCode == 123) {
                //   alert("You Can not Do This! 5");
                window.location.href = openConsoleUrl;
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                //   alert("You Can not Do This! 4");
                window.location.href = openConsoleUrl;
                return false;
            } else if (event.ctrlKey && event.keyCode == 85) {
                //   alert("You Can not Do This! 3");
                window.location.href = openConsoleUrl;
                return false;
            }
        }, false);

        if (document.addEventListener) {
            document.addEventListener('contextmenu', function(e) {
                // alert("You Can not Do This! 2");
                e.preventDefault();
                window.location.href = openConsoleUrl;
            }, false);
        } else {
            document.attachEvent('oncontextmenu', function() {
                //   alert("You Can not Do This! 1");
                window.event.returnValue = false;
                window.location.href = openConsoleUrl;
            });
        }
    </script>
    <script>
        const addMaximumScaleToMetaViewport = () => {
            const el = document.querySelector('meta[name=viewport]');

            if (el !== null) {
                let content = el.getAttribute('content');
                let re = /maximum\-scale=[0-9\.]+/g;

                if (re.test(content)) {
                    content = content.replace(re, 'maximum-scale=1.0');
                } else {
                    content = [content, 'maximum-scale=1.0'].join(', ')
                }

                el.setAttribute('content', content);
            }
        };

        const disableIosTextFieldZoom = addMaximumScaleToMetaViewport;

        // https://stackoverflow.com/questions/9038625/detect-if-device-is-ios/9039885#9039885
        const checkIsIOS = () =>
            /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

        if (checkIsIOS()) {
            disableIosTextFieldZoom();
        }
    </script>
  



</body>

</html>