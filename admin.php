<?php
include 'connection.php';
$u=$_POST["uname"];
$p=md5($_POST["pass"]);
$p=$_POST["pass"];
$q1="SELECT * FROM `admin` WHERE `uname` LIKE '$u' AND `password` LIKE '$p'";
$result1=mysqli_query($connection, $q1);
if($result=mysqli_fetch_array($result1))
 { session_start();
  $_SESSION["login_user"]="$u";
   header("Location:adminhome.php");
   }
 else {
  echo "Invalid username or password";
 }

?>
