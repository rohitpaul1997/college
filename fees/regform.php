<?php    ///connection to database...here my database name is 'college',  change it
	 include 'mysql_connect.php';
?>
<?php 

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {

	 $nm=$_POST["name"];
	 $conto=$_POST["phone"];
	 $gender=$_POST["gender"];
	 $email=$_POST["email"];
	 $address=$_POST["address"];
     $pass=$_POST["password"];
     $institute=$_POST["institute"];
     $stream=$_POST["stream"];
     $reg=$_POST["registration_no"];
     $roll=$_POST["roll_no"];
     


	 echo $nm;
	 // Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO student(reg_no,	stdname,email,	contact_no,	gender,	address, stream,	institute_name,	password) 
	               VALUES ('" . $reg . "','" . $nm ."','" . $email ."','" . $conto ."','" . $gender."',
				   '" . $address ."','" . $stream ."','" . $institute ."','" . $pass ."')" ;

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
