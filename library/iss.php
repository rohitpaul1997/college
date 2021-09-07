<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $isbn=$_POST["isbn"];
    $roll=$_POST["roll"];


    


    // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   $sql = "INSERT INTO tblissuedbookdetails(ISBNNumber,  Roll) 
                  VALUES ('" . $isbn . "','" . $roll ."')" ;

   if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record inserted.')</script>";
    //header("Location: main.php");
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

</head>
<body>
    <!--navbar-->
    <ul>
        <li><a class="active" href="admin.php">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    <!--log form-->
    <div class="login">
        <h1>ISSUE</h1>
        <form method="post" action="#">
          <p><input type="text" name="isbn" value="" placeholder="ISBN"></p>
          <p><input type="text" name="roll" value="" placeholder="roll"></p>
          <p class="submit"><input type="submit" name="commit" value="GRANT"></p>
        </form>
      </div>

          
</body>
</html>