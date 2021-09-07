<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $roll=$_POST["roll"];
    $issue=$_POST["issue"];
    $issue+=1;
    $sql1="DELETE from tblauthors where roll='" . $roll . "'";
    $conn->query($sql1);
    $sql="UPDATE tblstudents SET issuebook='" . $issue . "' where roll='" . $roll . "'";
    if ($conn->query($sql) === TRUE) {
        header("Location: iss.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }
 else
	 echo "not posted";


?>