<?php    ///connection to database...here my database name is 'college',  change it
	 include 'mysql_connect.php';
?>
<?php 

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {

	 $nm=$_POST["name"];
	 $conto=$_POST["phone"];
	 $email=$_POST["email"];
	 $address=$_POST["address"];
     $pass=$_POST["password"];
     $reg=$_POST["registration_no"];
     
	 

	 echo $nm;
	 // Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO institute(id, iname, email,	password,	address, phn) 
	               VALUES ('" . $reg . "','" . $nm ."','" . $email ."','" . $pass ."','" . $address ."','" . $conto ."')" ;

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }
 else
	 echo "not posted";
?>
