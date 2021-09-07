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



$sql1 = "SELECT max(trnid) as maxtrn from traansaction";
$result1 = $conn->query($sql1);


if ($result1->num_rows > 0)
{
	
  // output data of each row
  while($row1 = $result1->fetch_assoc()) 
  {
    if($row1==TRUE)
    {
	  if ( $row1["maxtrn"]==null)
		  $TRNID=10001;
	  else
		$TRNID= $row1["maxtrn"] +1;
    }
  }
}
 
$sql2 = "SELECT max(sem) as maxsem from traansaction";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0)
{
	
  // output data of each row
  while($row2 = $result2->fetch_assoc()) 
  {
	  if ( $row2["maxsem"]==null)
		  $SEM=1;
	  else
		$SEM= $row2["maxsem"] +1;
	  
  }
}

if($SEM==1)
{
  $semm="sem_1_fees";
}
elseif($SEM==2)
{
  $semm="sem_2_fees";
}
elseif($SEM==3)
{
  $semm="sem_3_fees";
}
elseif($SEM==4)
{
  $semm="sem_4_fees";
}
elseif($SEM==5)
{
  $semm="sem_5_fees";
}
elseif($SEM==6)
{
  $semm="sem_6_fees";
}
elseif($SEM==7)
{
  $semm="sem_7_fees";
}
elseif($SEM==8)
{
  $semm="sem_8_fees";
}

$sql3 = "SELECT " . $semm. " from semester_fees where inst_id=" . $row["inst_id"] ;
$result3 = $conn->query($sql3);

$count1  = mysqli_num_rows($result3);
  
	if($count1==0) {
    $message = "Invalid Username or Password!";
    echo $message;
	} else {
       // $message="hello";
        //echo $message;
        $row3 = $result3->fetch_assoc();
  }
  $tot=0;
  function total()
  {
    $tot= $_POST["fees"]+$_POST["due"];
  }

?>



<!DOCTYPE html>
<html>
  <head>
    <title>transaction</title>
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
    <script language=javascript>
      function gettotal()
      {
        var f=document.ftot.fees.value;
        alert(f);
        var d=document.ftot.due.value;  
        var t=f+d;
        document.ftot.total.value=t;

      }
    </script>
  </head>
  <body>
    <div class="main-block">
    <form action="trans.php"  method="POST">
      <h1>TRANSACTION DETAILS</h1>
      <fieldset>
        <legend>
          <h3>Transaction  Details</h3>
        </legend>
        <div  class="account-details">
          <div><label>Transaction id:</label><input type="text" name="trnid" readonly value="<?php echo $TRNID; ?>"></div>
          <div><label>Date:</label><input type="text" name="date" readonly value="<?php echo date("Y.m.d"); ?>" ></div>
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Personal Details</h3>
        </legend>
        <div  class="account-details">
          <div><label>Name:</label><input type="text" name="name" readonly value="<?php echo $row["stdname"]; ?>"></div>
          <div><label>Reg:</label><input type="text" name="reg" value=<?php echo $row["reg_no"]; ?>></div>
          <div><label>Roll:</label><input type="text" name="roll" value=<?php echo $row["roll_no"]; ?>></div>
          <div><label>Academic session:</label><input type="text" name="sesson" value=<?php echo $row["sessionn"]; ?>></div>
          <div><label>Stream</label><input type="text" name="stream" value=<?php echo $row["stream"]; ?>></div>
         <div><label>Semester:</label><input type="text" name="sem" readonly value="<?php echo $SEM; ?>">
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Institute Details</h3>
        </legend>
        <div  class="personal-details">
          <div>
            <div><label>Name: </label><input type="text" name="iname" readonly value="<?php echo $row["institute_name"];?>"></div>
            <div><label>Institute id:</label><input type="text" name="iid" readonly value="<?php echo $row["inst_id"];?>"></div>

          </div>
          <div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Fees Details</h3>
        </legend>
        <div  class="account-details">
          <div><label>Fees:</label><input type="text" name="fees" readonly value="<?php echo $row3[$semm];?>"></div>
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Bank details Details</h3>
        </legend>
        <div  class="account-details">
        <div><label for="pmethod">Choose method of payement:</label>
              <select name="pmethod" id="pmethod">
                <option value="Net_banking">Net banking</option>
              </select></div>
              <div><label for="bank">Choose BANK:</label>
              <select name="bank" id="bank">
                <option value="SBI">STATE BANK OF INDIA</option>
                <option value="UBI">UNITED BANK OF INDIA</option>
                <option value="ICICI">ICICI</option>
              </select></div>     
          <div><label>Account Number:</label><input type="text" name="acc" value=""></div>     
        </div>
      </fieldset>
      <button type="submit" value=PAY name="pay">Pay</button>
    </form>
    </div> 
  </body>
</html>