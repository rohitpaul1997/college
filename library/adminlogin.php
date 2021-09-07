<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>

<?php
        //$message="";
        if(count($_POST)>0) {
        $ssql="SELECT * FROM admin WHERE UserName='" . $_POST["admin"] . "' and Password = '". $_POST["password"]."'";
        
            $result = mysqli_query($conn,$ssql);
        $count  = mysqli_num_rows($result);
        
            if($count==0) {
            echo  "<script>alert('Wrong email_id or password.')</script>";
            echo $message;
            } else {
                session_start();
                $admin=$_POST["admin"];
                $_SESSION['u_id']=$admin;
                //echo "okay";
                header("Location: admin.php");
            
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
    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <!--log form-->
      <div class="login">
        <h1>Admin login</h1>
        <form method="post" action="">
          <p><input type="text" name="admin" value="" placeholder="Username"></p>
          <p><input type="password" name="password" value="" placeholder="Password"></p>
          <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
      </div>
      <!--end log form -->
    
</body>
</html>