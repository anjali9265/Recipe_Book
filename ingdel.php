<?php
include 'connection.php';
$item=$_POST["checkbox"];
foreach($item as $item1)
{
  $qu="DELETE FROM item WHERE id='$item1'";
 if (mysqli_query($connection, $qu)) {
    echo "<html>
    <head>
    <title>Admin</title>
    </head>
    <body>
      <a href='logout.php' style='float: right;'>Logout</a>
      <br><br>
      <br>Record deleted successfully
    <form action='adminhome.php'>
      <input type='Submit' name='submit'>
    </form>
    </body>
    </html>";

}
  else {
  echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
}

 ?>
