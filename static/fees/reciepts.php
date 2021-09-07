<?php    ///connection to database...here my database name is 'test',  change it
include 'mysql_connect.php';
?>




<html>
<head><title>Reciepts</title></head>
<body bgcolor=lightyellow>
<h2 align=center>Reciepts</h2>
<center>
<!--<a href="ifees.php" ><button type="button" value=REGISTER name="reg1">Update fees</button></a>-->

<hr>
<table border=0 width="80%">
<tr>
<th>Registration No.</th>
<th> Name.</th>
<th>Transaction_id</th>
<th>Institute_name</th>
<th>Date</th>

<th>Print Reciepts</th>
<th></th>
</tr>
<?php
session_start();
//echo $_SESSION['u_id'];
if(!empty($_SESSION["u_id"]))
{
  $sid=$_SESSION['u_id'];

  /*$sql = "SELECT * from institute where id='" . $iid ."'";


$result = mysqli_query($conn,$sql);
  $count  = mysqli_num_rows($result);
  
	if($count==0) {
    $message = "Invalid Username or Password!";
    echo $message;
	} else {
       // $message="hello";
        //echo $message;
		$row = $result->fetch_assoc();
		$name= $row["iname"];
		echo $name;
	}*/
//}


//code if view transaction button is pressed all transactions related to current account number is fetched

	//$instname=$result;
	$sql ="SELECT * from traansaction where sname in(select stdname from student where reg_no='" . $sid . "')";
    //echo $sql;
	$result1 = $conn->query($sql);

if ($result1->num_rows > 0) 
{
  // output data of each row
  while($row1 = $result1->fetch_assoc()) 
  {
	  //here each row in the table is included within form as to post individual data etc.
	  echo "<form action=pr.php method=post>";
	  echo "<tr>";
	  echo "<td><input type=text name=regno readonly value=" . $row1["reg_no"] . "></td>" ;
      echo "<td><input type=text name=sname readonly value=". $row1["sname"] . "></td>" ;
	  echo "<td><input type=text name=Transaction_id readonly value=". $row1["trnid"] . "></td>" ;
	  echo "<td><input type=text name=iname readonly value=". $row1["iname"] . "></td>" ;
      echo "<td><input type=text name=date readonly value=". $row1["trndate"] . "></td>" ;
	  echo "<td><input type=submit value=print name=print></td>";
	  
	  /*if ($row1["appruval"]=="pending")
		  echo "<td><input type=submit value=Approve name=app></td>" ;
	  else
		  echo "<td> </td>" ;*/
	 echo "</tr>";
	 echo "</form>";
  }
  
}
 
}
?>
</table>
</center>
</body>
</html>
