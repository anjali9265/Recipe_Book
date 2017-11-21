<?php
include 'connection.php';

$id=$_POST['d'];
$rid=$_POST["a"];
echo "<body>
     <a href='logout.php' style='float: right;'>Logout</a>
    <br><br><br>";

foreach($id as $value)
{
$qu="INSERT INTO `relation` (`rid`, `ingid`) VALUES ('$rid', '$value'); ";
if (mysqli_query($connection, $qu)) {
   echo "";
}
 else {
 echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
}
echo "New record created successfully<br>
     <form action='adminhome.php'>
     <input type='submit' name='Back'>
    </form>
      </body> ";
?>
