<html>

<head><title>User</title>


  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

  <script src="image-picker/image-picker.min.js"></script>

  <link rel="stylesheet" type="text/css" href="image-picker/image-picker.css">

  <script type="text/javascript">


$(function() {
$("select").imagepicker();
});
</script>
</head>
<body backgroung="http://localhost/recipe_book/photos/milk.jpg/assets/images/bg.jpg">
<form method='POST' action='search.php'>

<?php
include 'connection.php';
$sql="SELECT * from item";
$result=mysqli_query($connection,$sql);
echo'  <select multiple="multiple" class="image-picker show-html" name="d[]" >';
            while($row=mysqli_fetch_array($result)){
  echo "<option data-img-src=".$row['img']."  value='".$row['id']."' ></option>";



   echo"<br/></div>";
 }
 echo"
 </select>
  <input type='Submit' name='submit'>
   </form>
   </html>";

 ?>
