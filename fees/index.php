<?php
	define("TITLE", "StUDENT LOGIN | Fees Payment Portal");
	
	include('header.php');
?>



<!--<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>index</title>
</head>-->

<body style="background-color:white;">
	<!--<div>
		<header class="header">
			<h1>Fees Payment Portal </h1>
		</header>
	</div>-->
	<div class="bodyy">
		<form>
			<label><b>User Name
				</b>
			</label>
			<input type="text" name="Uname" id="Uname" placeholder="Username">
			<br><br>
			<label><b>Password
				</b>
			</label>
			<input type="Password" name="Pass" id="Pass" placeholder="Password">
			<br><br>
			<input type="button" name="log" id="log" value="Log In Here">
			<br><br>
			<input type="checkbox" id="check">
			<span>Remember me</span>
			<br><br>
			Forgot <a href="#">Password</a>
		</form>

	</div>
</body>

</html>