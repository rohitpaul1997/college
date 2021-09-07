<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>
<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$roll=$_POST["roll"];

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
		$sql = "SELECT id, Roll, DATEDIFF(ReturnDate, IssuesDate) as days from tblissuedbookdetails where Roll= '".$roll."' ";
        $result1 = $conn->query($sql);

        
?>


<!DOCTYPE html>
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
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
    </ul>
<h2 align=center>Student List</h2>
<center>
<form action="#" method="post">
<input type=text name=roll value="" placeholder="Roll">
<button type="submit" value=REGISTER name="reg1">Get Student</button>
</form>

<hr>
<table border=0 width="80%"> 
<tr>
<th>id</th>
<th> Roll</th>
<th>Days</th>
<th>Amount</th>
<th></th>
</tr>
<?php


if ($result1->num_rows > 0) 
{
  // output data of each row
  while($row1 = $result1->fetch_assoc()) 
  {
      $num=$row1["days"];
	  //here each row in the table is included within form as to post individual data etc.
	  echo "<form action=# method=post>";
	  echo "<tr>";
	  echo "<td><input type=text name=regno readonly value=" . $row1["id"] . "></td>" ;
      echo "<td><input type=text name=sname readonly value=". $row1["Roll"] . "></td>" ;
	  echo "<td><input type=text name=address readonly value=". $row1["days"] . "></td>" ;
      if($num>14)
      {
          $amount=($num-14)*10;
          echo "<td><input type=text name=address readonly value=". $amount . "></td>" ;
      }
      else{
        echo "<td><input type=text name=address readonly value=0></td>" ;
      }
	  //echo "<td><input type=text name=roll readonly value=". $row1["MobileNumber"] . "></td>" ;
	  //echo "<td><input type=text name=status readonly value=". $row1["appruval"] . "></td>" ;
	  
  }
  
}
}
?>
<?php

 ?>
</table>
</center>
</body>
</html>
