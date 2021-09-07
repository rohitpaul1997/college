<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>
<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id=$_POST["id"];
    $roll=$_POST["roll"];
    $datee= $_POST["datee"];

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

    $sql="UPDATE  tblissuedbookdetails SET ReturnDate='" . $datee . "' where id='" . $id . "'   ";
	$sql1="UPDATE tblstudents SET issuebook=issuebook-1  where roll='" . $roll . "'";
    if ($conn->query($sql) === TRUE) {
		if ($conn->query($sql) === TRUE)
		{
		header("Location: admin.php");}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }
 else
	 echo "not posted";
?>