<?php    ///connection to database...here my database name is 'test',  change it
include 'mysql_connect.php';
?>




<html>
<head><title>Payed fees</title></head>
<body bgcolor=lightyellow>
<h2 align=center>Paied fees</h2>
<center>
<form action=payfees1.php method=post>

<label for="stream">Choose stream:</label>

<select name="stream" id="stream">
  <option value="it">IT</option>
  <option value="civil">civil</option>
  <option value="cs">cs</option>
  <option value="mca">mca</option>
</select>
<label for="month">Choose month:</label>
<select name="month" id="month">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
<button type="submit" value=REGISTER name="reg1">Payed fees</button>
</form>