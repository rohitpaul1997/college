<?php session_start(); ?>
<html>
<body>
<?php
if(isset($_POST['lgn']))
{
	$nm=$_POST['user'];
	
	if($nm=="admin")
	{
		$_SESSION['u_id']=$nm;
		header("Location: check.php");
	}
}	
 ?>
<form action="#" method="post">
<input type=text name=user>
<input type=submit name=lgn value=login>
</form>

</body>
</html>
