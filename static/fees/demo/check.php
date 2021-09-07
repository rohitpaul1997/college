<html>
<body>
<?php 
session_start();
if(!is_null($_SESSION['u_id']))
{
	$name=$_SESSION['u_id'];
}
else
{
	$name="";
}
echo "login as<h3>". $name ."</h3>";
	
?>


</body>
</html>
