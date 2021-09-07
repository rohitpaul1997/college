<?php    ///connection to database...here my database name is 'college',  change it
include 'mysql_connect.php';
?>
<?php
$message="";
if(count($_POST)>0) {
  $ssql="SELECT * FROM student WHERE reg_no=" . $_POST["iid"] . " and password = '". $_POST["Pass"]."'";
  
	$result = mysqli_query($conn,$ssql);
  $count  = mysqli_num_rows($result);
  
	if($count==0) {
    $message = "Invalid Username or Password!";
    echo $message;
	} else {
        session_start();
        $iid=$_POST["iid"];
        $_SESSION['u_id']=$iid;
		header("Location: Reg_approve.php");
    
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

    <link rel="stylesheet" href="stylecss.css">

</head>
<body>
    <!--navbar-->

      <!--log form-->
      <div class="login">
        <h1>Admin login</h1>
        <form method="post" action="#">
          <p><input type="text" name="iid" value="" placeholder="Username"></p>
          <p><input type="password" name="Pass" value="" placeholder="Password"></p>
          <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
      </div>
      <!--end log form -->
    
</body>
</html>
