<?php    ///connection to database...here my database name is 'college',  change it
	 include 'mysql_connect.php';
?>
<?php 

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {

	 $nm=$_POST["name"];
	 $trnId= $_POST["trnid"];
     $dt= $_POST["date"];
     $reg = $_POST["reg"];
     $roll =$_POST["roll"];
     $sesson= $_POST["sesson"];
     $strm= $_POST["stream"];
     $sem =$_POST["sem"];
     $iname=$_POST["iname"];
     $iid=$_POST["iid"];
     $fees=$_POST["fees"];
	 $trntype=$_POST["pmethod"];
	 $bank=$_POST["bank"];
	 $acc=$_POST["acc"];



	 echo $nm;
	 // Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO traansaction(	trnid,	trndate,	reg_no,  sname,  sroll,	instid,	sem,	stream, fees,	iname,	session,trntype,bankname,acc) 
	               VALUES ('" . $trnId . "','" . $dt ."','" . $reg ."','" . $nm ."','" . $roll."',
				   '" . $iid ."','" . $sem ."','" . $strm ."','" . $fees ."','" . $iname ."','" . $sesson ."','" . $trntype ."','" . $bank ."','" . $acc ."')" ;

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		header("Location: sshow.php");
        //echo "<a href=' "sshow.php"' ><button type="button" value=back name="back">go to home</button></a> ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }
 else
	 echo "not posted";
?>
