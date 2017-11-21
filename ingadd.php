<?php
session_start();
echo "Hii ".$_SESSION["login_user"];

if(!empty($_SESSION["login_user"]))
{
include 'connection.php';
$item=$_POST["text"];
$sql="SELECT * FROM item";
$result=mysqli_query($connection, $sql);
$count=mysqli_num_rows($result);
$count++;
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);



     move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);

     $location="http://localhost/recipe_book/photos" . basename( $_FILES["image"]["name"]);
$qu="INSERT INTO `item` VALUES ('$count','$item','$location') ";
 if (mysqli_query($connection, $qu)) {
    echo"<body>
         <a href='logout.php' style='float: right;'>Logout</a>
        <br><br><br>
          New record created successfully<br>
         <form action='adminhome.php'>
         <input type='submit' name='Back'>
        </form>
          </body> ";
 }
  else {
  echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
}
 ?>
