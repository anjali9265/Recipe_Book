<?php
session_start();
echo "Hi ".$_SESSION["login_user"];
if(!empty($_SESSION["login_user"])){
echo"<html>
<head>
<title>Admin</title>
</head>
<body>
  <a href='logout.php' style='float: right;'>Logout</a>
  <br><br>
  <br>
<form method='POST' action='del.php'>
  <select name='temp'>
    <option value='ingredients'>Ingredients</option>
    <option value='Recipe'>Recipe</option>
  </select>
  <input type='Submit' name='submit'>
</html>";
}
?>
