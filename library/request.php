<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $bnm=$_POST["bname"];
    $isbn=$_POST["isbn"];
    $auth=$_POST["author"];
    $ed=$_POST["edition"];
    $roll=$_POST["roll"];


    


    // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   $sql = "INSERT INTO tblauthors(roll ,ISBN,  bname,	author,	edition) 
                  VALUES ('" . $roll . "','" . $isbn ."','" . $bnm."','" . $auth ."','" . $ed."')" ;

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
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="main.php">student login</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    <!--log form-->
    <div class="login">
        <h1>Register your account</h1>
        <form method="post" action="#">
          <p><input type="text" name="bname" value="" placeholder="book name"></p>
          <p><input type="text" name="author" value="" placeholder="Author"></p>
          <p><input type="text" name="edition" value="" placeholder="editon"></p>
          <p><input type="text" name="isbn" value="" placeholder="ISBN"></p>
          <p><input type="text" name="roll" value="" placeholder="roll"></p>
          <p class="submit"><input type="submit" name="commit" value="request"></p>
        </form>
      </div>

          
</body>
</html>