<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "";

	  $vada =  $_POST['vada'];
	  	  $bread =  $_POST['bread'];
                $samosa =  $_POST['samosa'];
                $samosapav =  $_POST['samosapav'];

                $vadapav =  $_POST['vadapav'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 


if isset('submit'){



$sql = "INSERT INTO eatfood (vada,bread,samosa,vadapav,samosapav) VALUES ('$vada',' $bread ','$samosa',
'$vadapav','$samosapav')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$vada1 = $vada * (2 * $bread);
$samosa1 = $samosa * (2 * $bread);
$vadapav1 = $vada * $vadapav;
$samosapav1 = $samosa * $samosapav;



$num =  max($vadapav1, $samosapav1);
echo "Your Profit  is : ".$num;  


}
mysqli_close($conn);
?>



 <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter the number of Breads </label>
    <input type="text" class="form-control" id="" aria-describedby="" name="bread">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter the price of vadapav </label>
    <input type="text" class="form-control" id="" aria-describedby="" name="vadapav">
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Enter the number of Vadas </label>
    <input type="text" class="form-control" id="" aria-describedby="" name="vada">
  </div>


   <div class="form-group">
    <label for="exampleInputEmail1">Enter the number of Samosas </label>
    <input type="text" class="form-control" id="" aria-describedby="" name="samosa">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter the price of Samosaspav </label>
    <input type="text" class="form-control" id="" aria-describedby="" name="samosaspav">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>