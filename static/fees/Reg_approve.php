<?php    ///connection to database...here my database name is 'test',  change it
include 'mysql_connect.php';
?>




<html>
<head><title>Registration Approval Form</title></head>
<body bgcolor=lightyellow>
<h2 align=center>Registration Approval</h2>
<center>
<a href="ifees.php" ><button type="button" value=REGISTER name="reg1">Enter fees</button></a>
<a href="i1fees.php" ><button type="button" value=REGISTER name="reg1">Update fees</button></a>
<a href="payfees.php" ><button type="button" value=REGISTER name="reg1">PAYED fees</button></a>
<a href="noticeupload.php" ><button type="button" value=REGISTER name="reg1">Notice upload</button></a>

<hr>
<table border=0 width="80%"> 
<tr>
<th>Registration No.</th>
<th> Name.</th>
<th>Address</th>
<th>City</th>

<th>Status</th>
<th></th>
</tr>
<?php
session_start();
//echo $_SESSION['u_id'];
if(!empty($_SESSION["u_id"]))
{
  $iid=$_SESSION['u_id'];

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
	$sql ="SELECT * from student where institute_name in(select iname from institute where id='" . $iid . "')";
    //echo $sql;
	$result1 = $conn->query($sql);

if ($result1->num_rows > 0) 
{
  // output data of each row
  while($row1 = $result1->fetch_assoc()) 
  {
	  //here each row in the table is included within form as to post individual data etc.
	  echo "<form action=Reg_approve.php method=post>";
	  echo "<tr>";
	  echo "<td><input type=text name=regno readonly value=" . $row1["reg_no"] . "></td>" ;
      echo "<td><input type=text name=sname readonly value=". $row1["stdname"] . "></td>" ;
	  echo "<td><input type=text name=address readonly value=". $row1["address"] . "></td>" ;
	  echo "<td><input type=text name=roll readonly value=". $row1["roll_no"] . "></td>" ;
	  echo "<td><input type=text name=status readonly value=". $row1["appruval"] . "></td>" ;
	  
	  if ($row1["appruval"]=="pending")
		  echo "<td><input type=submit value=Approve name=app></td>" ;
	  else
		  echo "<td> </td>" ;
	 echo "</tr>";
	 echo "</form>";
  }
  
}
 
}
?>
<?php
 if(isset($_POST["app"]))    //If Approve button is pressed amount is updated in account table 
							//and the transaction status is made Approved in transaction table
 {
	$sql = "update student set appruval='approved' where reg_no=" . $_POST['regno'] ;
	
    $result = $conn->query($sql); 
	if(!$result)
	{
		die( "Approval failed..");
	}
	
 }
 ?>
</table>
</center>
</body>
</html>
