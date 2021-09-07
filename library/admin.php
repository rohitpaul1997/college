<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>

<?php
session_start();
//echo $_SESSION['u_id'];
if(!empty($_SESSION["u_id"]))
{
  $admin=$_SESSION['u_id'];
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
    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <!--log form-->
      <div class="login">
        <h1>Admin arina</h1>
        <form method="post" action="">
            <p><label style="color:black;"><b>Entry of new book</b></label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="stock.php"><input type="button" name="commit" value="enter"></a><p>
            <p><label style="color:black;"><b>View Issued books  details</b></label>
            <a href="issuedbook.php"><input type="button" name="commit" value="enter"></a></p>
            <p><label style="color:black;"><b>Available Book list</b></label>
            <a href="avail.php"><input type="button" name="commit" value="Enter"></a></p>
            <p><label style="color:black;"><b>View student list</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="studentlist.php"><input type="button" name="commit" value="Enter"></a></p>
            <p><label style="color:black;"><b>View Book request list</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="requestlist.php"><input type="button" name="commit" value="Enter"></a></p>
            <p><label style="color:black;"><b>Genarate fine</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="genfine.php"><input type="button" name="commit" value="Enter"></a></p>
        </form>
      </div>
      <!--end log form -->
    
</body>
</html>