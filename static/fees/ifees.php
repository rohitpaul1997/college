<?php

?>

<html>
<head>
<title>Dynamic Form</title>
<script language="javascript">
var i = 0;
function changeIt()
{
var s="<br><br><select name=stream[]><option value=MCA>MCA</option><option value=BCA>BCA</option><option value=BTECH>BTECH</option></select>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"0 size=7>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"1 size=7>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"2 size=7>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"3 size=7>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"4 size=7>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"5 size=7>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"6 size=7>";
s=s+"&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="+i+"7 size=7>";

my_div.innerHTML = my_div.innerHTML +s;
i++;
}
</script>
</head>
<body>
<form action=# method=post>
<input type="button" value="+" onClick="changeIt()">
<!--div id="my_div"></div-->
<table border=0>
<tr>
<td id="my_div">
</td>
</tr>
</table>
<input type=submit value="ok" name="submit_stream">
</form>
<?php 
	if(isset($_POST['submit_stream']))
	{
		include 'mysql_connect.php';
		$sem_details=array(array());
		
		$sem_name=$_POST['stream'];
		$stream_count=count($sem_name);
		for($i=0;$i<$stream_count;$i++)
		{
				$sem_details[$i][0]=$sem_name[$i];
				for($j=0;$j<8;$j++)
				{
					$sem_details[$i][$j+1]=$_POST[$i.$j];
				}
		}
		foreach($sem_details as $amt ) 
		{	
			$count_sem=0;
			for($i=1;$i<=8;$i++)
			{
				if( $amt[$i]>0)
					$count_sem++;
			}
			$sql = "INSERT INTO semester_fees(streamID, sem_1_fees,sem_2_fees,sem_3_fees,sem_4_fees,sem_5_fees,sem_6_fees,";
			$sql=$sql."sem_7_fees,sem_8_fees,no_of_sems,inst_id) VALUES ('". $amt[0]."',". $amt[1] .",".$amt[2].",".$amt[3]."," ;
			$sql=$sql. $amt[4].",". $amt[5] .",".$amt[6].",".$amt[7].",".$amt[8].",". $count_sem.",10001)"; 
			//echo $amt[0]."-".$amt[1];
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully in institute";
			}
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}
		//print_r($sem_details);
		

	

	$conn->close();
	}
?>
</body>
</html>