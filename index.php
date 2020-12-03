<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "";

	  $total_serv =  $_POST['total_serv'];
	  	  $load =  $_POST['load'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 


if isset('submit'){



$sql = "INSERT INTO server (total_serv,load) VALUES ('$total_serv',' $load ')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


setInterval(count(){ 
    //this code runs every second 
}, 5000);


count(){
$vars ='total_serv';

if ($vars < '50%') {
	$vars1 =$vars /2 ;
	echo $vars1 "is running";
}
else{
	$vars2 = 2 * $vars + 1 ;

}
echo $vars2 "is running";
}





}
mysqli_close($conn);
?>



 <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter number of servers</label>
    <input type="text" class="form-control" id="" aria-describedby="">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>