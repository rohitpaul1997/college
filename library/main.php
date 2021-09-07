<?php    ///connection to database...here my database name is 'college',  change it
include 'sql_connect.php';
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>

    <link rel="stylesheet" href="stylecss.css">

</head>
<body>
    <!--navbar-->
    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="adminlogin.php">admin</a></li>
        <li><a href="studentreg.php">User registration</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <!--log form-->
      <div class="login">
        <h1>Users Arena</h1>
        <form method="post" action="booklist.php">
            <label style="color:black;"><b>Search Book by Catagory</b></label>
            <p>
                  <select name="cat" id="cat">
                      <option value="Operating System">Operating System</option>
                      <option value="DBMS">DBMS</option>
                      <option value="Networking">Networking</option>
                      <option value="C">C Programming</option>
                    <option value="Java Programming">Java Programming</option>
                    <option value="C++">C++ Programming</option>
                    <option value="Physics">Physics</option>
	
                  </select>
            <p class="submit"><a href="showsstock.php"><input type="submit" name="commit" value="enter"></a><p>
        </form>
      </div>
      <!--end log form -->
    
</body>
</html>