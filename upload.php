<?php
 echo "<html>
 <TITLE>ADD ITEMS</TITLE>
 <H1>ADD ITEMS</H1>
 <FORM action='additems.php' method='post' enctype='multipart/form-data'>
 ITEM NAME:<INPUT TYPE='TEXT' name='name'><BR>
 RATE:<INPUT TYPE='INT' name='rate'><BR>
 SELECT IMAGE:<input type='file' name='image' id='image' ><br />
 <input type='submit' value='Upload'>
 </FORM>
 </HTML>";
 $server = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'api2';

 // Connect to Database
 $connection = mysqli_connect($server, $user, $pass,$db)
 or die ("Could not connect to server ... \n" . mysql_error ());
 $name=$_POST['name'];
 $rate=$_POST['rate'];
 $target_dir = "photos/";
 $target_file = $target_dir . basename($_FILES["image"]["name"]);
 move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);



			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);

			$location="http://localhost/api2/photos/" . basename( $_FILES["image"]["name"]);

			$save=mysqli_query($connection,"INSERT INTO location (rate,name,location) VALUES ('$rate','$name','$location')");
			//header("location:additems.html");
      echo "<script>
      window.alert('updated')
      window.location.href='additems.html';
      </script>";

?>
