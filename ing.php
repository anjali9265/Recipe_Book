<?php
session_start();
if(!empty($_SESSION["login_user"])){

include 'connection.php';

if($_POST["temp"]=="ingredients")
{
 header("Location:iadd.php");

 }
else {
   header("Location:radd.php");
  }
}
 ?>
