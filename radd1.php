<?php
include 'connection.php';
echo '<link rel="stylesheet" href="assets/css/style.css">';
echo"<body background='http://localhost/recipe_book/photos/bg1.jpg'>";
$name=$_POST["txt"];
echo "<div class='head_title text-center'>
        <h4>".$name."</h4>";
$recipe=$_POST["txt1"];
$link=$_POST["txt2"];
$sq="SELECT * FROM rec";
$result1=mysqli_query($connection, $sq);
$count=mysqli_num_rows($result1);
$count++;
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);



     move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);

     $location="http://localhost/recipe_book/photos/" . basename( $_FILES["image"]["name"]);
$qu="INSERT INTO `rec` VALUES ('$count','$name','$recipe','$link','$location') ";
$query="INSERT INTO `artigos` VALUES ('$count','$name','0','0')";
if (mysqli_query($connection, $qu)) {
   echo "";
}
 else {
 echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
if (mysqli_query($connection, $query)) {
   echo "";
}
 else {
 echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
$sql="SELECT * from item";
$result=mysqli_query($connection,$sql);

    echo "
   <html>
   <head><title>Admin</title>
   </head>
   <body>
        <a href='logout.php' style='float: right;'>Logout</a>

   <form method='POST' action='relation.php'>
   ";
      echo"
  <input type='hidden' name='a' value='$count' >
  <h5>";

            while($row=mysqli_fetch_array($result)){
echo"</br>";
   echo "<input type='checkbox' name='d[]' value='".$row['id']."' >".$row['Item'];

 }

 echo"</h5></div>
  <input type='hidden' name='a' value=".$count.">
  <input type='submit' class='btn btn-primary'>
   </form>
   </html>";

 ?>

