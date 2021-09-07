<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>
<?php

session_start();
//echo $_SESSION['u_id'];
if(!empty($_SESSION["u_id"]))
{
  $admin=$_SESSION['u_id'];


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$dept=$_POST["dept"];

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
		$sql = "SELECT * from tblstudents where department='" . $dept . "' ";
}


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
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
    </ul>
<h2 align=center>Student List</h2>
<center>
<form action="#" method="post">
<select name="dept" id="dept">
    <option value="CS">CS</option>
    <option value="IT">IT</option>
    <option value="MCA">MCA</option>
    <option value="CIVIL">CIVIL</option>
	<option value="MECHANICAL">MECHANICHAL</option>
	<option value="INSTRUMENTAL">INTRUMENTAL</option>
	
  </select>
<button type="submit" value=REGISTER name="reg1">Get Student</button>
</form>

<hr>
<table border=0 width="80%"> 
<tr>
<th>Roll No.</th>
<th> Name.</th>
<th>Department</th>
<th>Phone</th>
<th></th>
</tr>
<?php
	$result1 = $conn->query($sql);

if ($result1->num_rows > 0) 
{
  // output data of each row
  while($row1 = $result1->fetch_assoc()) 
  {
	  //here each row in the table is included within form as to post individual data etc.
	  echo "<form action=studentlist.php method=post>";
	  echo "<tr>";
	  echo "<td><input type=text name=regno readonly value=" . $row1["roll"] . "></td>" ;
      echo "<td><input type=text name=sname readonly value=". $row1["FullName"] . "></td>" ;
	  echo "<td><input type=text name=address readonly value=". $row1["department"] . "></td>" ;
	  echo "<td><input type=text name=roll readonly value=". $row1["MobileNumber"] . "></td>" ;
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
