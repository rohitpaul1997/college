<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $roll=$_POST["roll"];
?>

<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registered student list</title>
	<link rel="stylesheet" href="stylecss.css">





</head>
<body bgcolor=#0ca3d2>
	<!--navbar-->
	<ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="main.php">Cataloge</a></li>
        <li><a href="#about">About</a></li>
    </ul>
<h2 align=center>Number of borrowed book</h2>
<center>

<hr>
<table border=0 width="80%"> 
<tr>
<th>Roll</th>
<th>NUMBER OF BOOKS</th>
<th>GRANT</th>
</tr>
<?php
 $sql1="SELECT 	* from tblstudents where roll='" . $roll . "'" ;
    $result1 = $conn->query($sql1);
  while($row1 = $result1->fetch_assoc()) 
  {
      $num=$row1["issuebook"];
	  //here each row in the table is included within form as to post individual data etc.
	  echo "<form action=addbook.php method=post>";
	  echo "<tr>";
	  echo "<td><input type=text name=roll readonly value=" . $row1["roll"] . "></td>" ;
      echo "<td><input type=text name=issue readonly value=" . $row1["issuebook"] . "></td>";
      if($num<2)
      {
        echo  "<td><input type=submit name=issue value=grant></input></td>";
      }
      //echo  "<td><input type=submit name=issue value=grant></input></td></tr>";
      echo "</form>";
	   
	  
  }
  
}
?>

</table >
</center>
</body>
</html>