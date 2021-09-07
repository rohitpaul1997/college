<?php    ///connection to database...here my database name is 'college',  change it
include 'mysql_connect.php';
?>
<?php
session_start();
//echo $_SESSION['u_id'];
if(!empty($_SESSION["u_id"]))
{
  $regno=$_SESSION['u_id'];

  $sql = "SELECT * from student where reg_no='" . $regno ."'";


$result = mysqli_query($conn,$sql);
  $count  = mysqli_num_rows($result);
  
	if($count==0) {
    $message = "Invalid Username or Password!";
    echo $message;
	} else {
       // $message="hello";
        //echo $message;
        $row = $result->fetch_assoc();
	}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Student data show</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      }
      h1 {
      margin: 0;
      font-weight: 400;
      }
      h3 {
      margin: 12px 0;
      color: #8ebf42;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
      }
      form {
      width: 100%;
      padding: 20px;
      }
      fieldset {
      border: none;
      border-top: 1px solid #8ebf42;
      }
      .account-details, .personal-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .account-details >div, .personal-details >div >div {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      }
      .account-details >div, .personal-details >div, input, label {
      width: 100%;
      }
      label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
      }
      input {
      padding: 5px;
      vertical-align: middle;
      }
      .checkbox {
      margin-bottom: 10px;
      }
      select, .children, .gender, .bdate-block {
      width: calc(100% + 26px);
      padding: 5px 0;
      }
      select {
      background: transparent;
      }
      .gender input {
      width: auto;
      } 
      .gender label {
      padding: 0 5px 0 0;
      } 
      .bdate-block {
      display: flex;
      justify-content: space-between;
      }
      .birthdate select.day {
      width: 35px;
      }
      .birthdate select.mounth {
      width: calc(100% - 94px);
      }
      .birthdate input {
      width: 38px;
      vertical-align: unset;
      }
      .checkbox input, .children input {
      width: auto;
      margin: -2px 10px 0 0;
      }
      .checkbox a {
      color: #8ebf42;
      }
      .checkbox a:hover {
      color: #82b534;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #8ebf42; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #82b534;
      }
      @media (min-width: 568px) {
      .account-details >div, .personal-details >div {
      width: 50%;
      }
      label {
      width: 40%;
      }
      input {
      width: 60%;
      }
      select, .children, .gender, .bdate-block {
      width: calc(60% + 16px);
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
    <form action="#"  method="POST">
      <h1>Edit details</h1>
      <fieldset>
        <legend>
          <h3>Account Details</h3>
        </legend>
        <div  class="account-details">
          <div><label>Email*</label><input type="text" name="email" readonly value=<?php echo $row["email"]; ?> required></div>
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Personal Details</h3>
        </legend>
        <div  class="personal-details">
          <div>
            <div><label>Name*</label><input type="text" name="name" readonly value=<?php echo $row["stdname"]; ?>></div>
            <div><label>Phone*</label><input type="text" name="phone" readonly value=<?php echo $row["contact_no"]; ?> required></div>
            <div><label>address</label><input type="text" name="address" readonly value=<?php echo $row["address"]; ?> required></div>
          </div>
          <div>
            <div>
              <label>Gender*</label>
              <div class="gender">
                <input type="radio" value=Male  <?php echo ($row["gender"]=='Male')?'checked':'' ?> disabled   id="male" name="gender" required/>
                <label for="male" class="radio">Male</label>
                <input type="radio" value="Female" <?php echo ($row["gender"]=='Female')?'checked':'' ?> disabled id="female" name="gender" required/>
                <label for="female" class="radio">Female</label>
              </div>
            </div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Academic Details</h3>
        </legend>
        <div  class="account-details">
          <div><label>institute name:</label><input type="text" name="institute" readonly value=<?php echo $row["institute_name"]; ?> required></div>
          <div><label>Stream:</label><input type="text" name="institute" readonly value=<?php echo $row["stream"]; ?> required></div>
          <div><label>Registration number:</label><input type="text" name="registration_no" readonly value=<?php echo $row["reg_no"]; ?> required></div>
          <div><label>roll number:</label><input type="text" name="roll_no" value=<?php echo $row["roll_no"]; ?> required></div>
        </div>
      </fieldset>
      <a href="sedit.php" ><button type="button" value=REGISTER name="reg1">Update Profile</button></a>
      &nbsp;
      <a href="transaction.php" ><button type="button" value=REGISTER name="reg1">Pay fees</button></a>
      <a href="reciepts.php" ><button type="button" value=REGISTER name="reg1">Reciepts</button></a>
    </form>
    </div> 
  </body>
</html>