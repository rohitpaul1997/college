<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>

<?php 

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {

	 $nm=$_POST["student_name"];
	 $conto=$_POST["phn_number"];
	 $email=$_POST["Email"];
   $roll=$_POST["Roll"];
   $dept=$_POST["dept"];
     
	 

	 // Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO tblstudents(roll ,department, FullName, EmailId,MobileNumber) 
	               VALUES ('" . $roll . "','" . $dept ."','" . $nm ."','" . $email ."','" . $conto ."')" ;

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('New record inserted.')</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

 }
 else
	 echo "not posted";
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="stylecss.css">


    <script type="text/javascript">
        function valid()
        {
        if(document.studentreg.password.value!= document.studentreg.cpassword.value)
        {
        alert("Password and Confirm Password Field do not match  !!");
        document.studentreg.cpassword.focus();
        return false;
        }
        return true;
        }
    </script>

</head>
<body>
    <!--navbar-->
    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <!--log form-->
      <div class="login">
        <h1>Register your account</h1>
        <form method="post" action="#" onSubmit="return valid();">
          <p><input type="text" name="Roll" value="" placeholder="Roll number"></p>
          <p><input type="text" name="dept" value="" placeholder="Department"></p>
          <p><input type="text" name="student_name" value="" placeholder="Name"></p>
          <p><input type="text" name="Email" value="" placeholder="Email"></p>
          <p><input type="text" name="phn_number" value="" placeholder="mobile"></p>
          <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
      </div>
      
      <div class="login-help">
        <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
        <p>new user? <a href="#">login here</a>.</p>
      </div>
      <!--end log form -->
    
</body>
</html>