<?php    ///connection to database...here my database name is 'test',  change it
include 'mysql_connect.php';

?>
<html>
<head><title>Autogenerate code</title></head>
<body bgcolor=lightyellow>
<h2 align=center>Autogenerate code</h2>
<center>

<?php
//code to fill up institute dropdown box dynamically from database table ''
$sql = "SELECT max(trn_no) as maxtrn from fees_payment";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
	
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
	  if ( $row["maxtrn"]==null)
		  $TRNID=10001;
	  else
		$TRNID= $row["maxtrn"] +1;
	  
  }
} 

?>
Transaction No <input type=text name=trnid value="<?php echo $TRNID; ?>">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</center>
</body>
</html>
