<?php
include 'connection.php';
if($_POST["temp"]=="ingredients")
{
 header("Location:idel.html");

 }
else {
   header("Location:rdel.html");
  }
 ?>
