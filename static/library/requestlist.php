<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            $sql = "SELECT * from tblauthors";
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
        <li><a href="main.php">Cataloge</a></li>
        <li><a href="#about">About</a></li>
    </ul>
<h2 align=center>Request List</h2>
<center>
<form action="#" method="post">
<button type="submit" value=REGISTER name="reg1">Get list</button>
</form>

<hr>
<table border=0 width="80%"> 
<tr>
<th>Book Name</th>
<th>Author</th>
<th>Edition</th>
<th>Roll</th>
<th>Check status</th>
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
	  echo "<form action=issuebook.php method=post>";
	  echo "<tr>";
	  echo "<td><input type=text name=bname size=50 readonly value=" . $row1["bname"] . "></td>" ;
      echo "<td><input type=text name=author size=50 readonly value=". $row1["author"] . "></td>" ;
	  echo "<td><input type=text name=edition readonly value=". $row1["edition"] . "></td>" ;
      echo "<td><input type=text name=roll  value=". $row1["roll"] . "></td>" ;
      echo  "<td><input type=submit name=issue value=check></input></td>";
      echo "</form>";
	   
	  
  }
  
}
?>

</table >
</center>
</body>
</html>
