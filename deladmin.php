<?php
include 'connection.php';
$name=$_POST['deluname'];
$qu="DELETE FROM `admin` WHERE `uname` LIKE '$name'";
if(mysqli_query($connection,$qu))
 echo "Admin user ".$name." deleted successfully";

?>
