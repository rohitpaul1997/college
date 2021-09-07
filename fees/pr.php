<?php    ///connection to database...here my database name is 'test',  change it
include 'mysql_connect.php';
?>


<?php
require('fpdf182/fpdf.php');


session_start();
//echo $_SESSION['u_id'];
if(!empty($_SESSION["u_id"]))
{
  $sid=$_SESSION['u_id'];

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $trnid=$_POST["Transaction_id"];

    $sql ="SELECT * from traansaction where trnid='" . $trnid . "'";
    //echo $sql;
    $result1 = $conn->query($sql);

    $row1 = $result1->fetch_assoc();
    //echo $row1["sname"];
    $s=$row1["trnid"].$row1["trndate"].$row1["sname"].$row1["sroll"].$row1["sem"].$row1["stream"].$row1["fees"].$row1["iname"].$row1["session"].$row1["trntype"].$row1["bankname"].$row1["acc"];
    $trnid=$row1["trnid"];
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(30,10,$s);
    $pdf->Output();

  }
}

?>