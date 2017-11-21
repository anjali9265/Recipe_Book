<?php
include 'connection.php';
$un=$_POST['uname'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
if($pass1!=$pass2){
  echo"
  <SCRIPT>
    alert('Your passwords doesnt match!')
    window.location.href='addadmin.html';
    </SCRIPT>";

}
else{
//$pass1=md5($pass1);
$q1="INSERT INTO `admin` (`uname`, `password`) VALUES ('$un', '$pass1')";
if (mysqli_query($connection, $q1)) {
   echo "New record created successfully";
}
 else {
 echo "Error: " . $q1 . "<br>" . mysqli_error($connection);
}
}
?>
