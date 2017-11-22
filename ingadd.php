<?php
session_start();
//echo "Hii ".$_SESSION["login_user"];
echo '<link rel="stylesheet" href="assets/css/style.css">';
echo"<body background='http://localhost/recipe_book/photos/bg.jpg'>";
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



    // move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);

     $location="http://localhost/recipe_book/photos" . basename( $_FILES["image"]["name"]);
$qu="INSERT INTO `item` VALUES ('$count','$item','$location') ";
 if (mysqli_query($connection, $qu)) {
    echo"<body>
         <a href='logout.php' style='float: right;'>Logout</a>
        <br><div class='head_title text-center'>
            <br><br><h4>New record created successfully</h4></div>
        <br><br><a href='adminhome.php' class='btn btn-primary'>Back</a>
          <br>
        </form>
          </body> ";
 }
  else {
  echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
}
 ?>

