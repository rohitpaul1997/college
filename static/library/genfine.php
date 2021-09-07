<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="stylecss.css">


</head>
<body>
    <!--navbar-->
    <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <!--log form-->
      <div class="login">
        <h1>Enter the book in stock</h1>
        <form method="post" action="finee.php">
          <p><input type="text" name="roll" value="" placeholder="Roll"></p>
          <p class="submit"><input type="submit" name="commit" value="register"></p>
          
        </form>
      </div>
      
      <!--end log form -->
    
</body>
</html>