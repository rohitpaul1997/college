<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
   
        $isbn=$_POST["isbn"];
        $catagory=$_POST["catagory"];
        $bname=$_POST["bname"];
        $bnumber=$_POST["number"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
            
            
    
            // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO tblbooks(BookName , Category, Author,edition, ISBNNumber,	bnumber) 
                        VALUES ('" .$bname . "','" . $catagory ."','" . $author ."','" . $edition ."','" . $isbn ."','" . $bnumber ."')" ;
    
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
        <form method="post" action="#">
          <p><input type="text" name="isbn" value="" placeholder="ISBN NUMBER"></p>
          <p><input type="text" name="catagory" value="" placeholder="catagory"></p>
          <p><input type="text" name="bname" value="" placeholder="book name"></p>
          <p><input type="text" name="author" value="" placeholder="author"></p>
          <p><input type="text" name="edition" value="" placeholder="edition"></p>
          <p><input type="text" name="number" value="" placeholder="Number of books"></p>
          <p class="submit"><input type="submit" name="commit" value="register"></p>
          
        </form>
      </div>
      
      <!--end log form -->
    
</body>
</html>