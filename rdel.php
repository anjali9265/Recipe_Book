<?php
include 'connection.php';
echo '<link rel="stylesheet" href="assets/css/style.css">';
echo"<body background='http://localhost/recipe_book/photos/bg.jpg'>";
$item=$_POST["checkbox"];
foreach ($item as $item1) {
$qu="DELETE FROM `rec` WHERE rid='$item1'";
$sql="DELETE FROM `relation` WHERE rid='$item1'";
$query="DELETE FROM `artigos` WHERE id='$item1'";
 mysqli_query($connection, $query);
 mysqli_query($connection, $sql);
 if (mysqli_query($connection, $qu))
 {
    echo "<html>
    <head>
    <title>Admin</title>
    </head>
    <body>
      <a href='logout.php' style='float: right;'>Logout</a>
      <br><br>
      <div class='head_title text-center'>
          <h4>Record deleted successfully</h4></div>
<br><br><a href='adminhome.php' class='btn btn-primary'>Back</a>

    </form>
    </body>
    </html>";

}
  else {
  echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
}
 ?>

