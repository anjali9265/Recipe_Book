<?php
include 'connection.php';

$sql="SELECT * from item";
$result=mysqli_query($connection,$sql);
    echo "
   <html>
   <head><title>User</title>
   </head>
   <body>
   <form method='POST' action='search.php'>
   <select multiple='multiple' class='image-picker show-html'>

   ";
            while($row=mysqli_fetch_array($result)){
  //echo "<img src=".$row['img']." width='100' height='125'/>";
   //echo"<input type='image' name='image[]' value='".$row['id']."' src=".$row['img']." />";
   //echo"  <option data-img-src=".$row['img']." value='".$row['id']."'>Cute Kitten 1</option>";
   echo "<br><input type='checkbox' name='d[]' value='".$row['id']."' >".$row['Item'];
   echo"<br/>";
 }
 echo"
  <input type='Submit' name='submit'>
   </form>
   </html>";

 ?>
