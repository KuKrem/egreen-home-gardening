<?php 
  // $dbhost = 'localhost';
 	// $dbuser = 'root';
 	// $dbpass = 'WcmrjjaRxQyuLwK5';
 	// $dbname = 'egreen-new';

 	// $connection = mysqli_connect('localhost','root', '','smart_fitness');
 	$conn = mysqli_connect("localhost","root","WcmrjjaRxQyuLwK5","egreen-new");
	echo mysqli_error($conn); 

 	// Cheking the connection
 	if (mysqli_connect_errno()) {
 		die('Database connect failed' . mysqli_connect_err());
 	} else {
 	// echo "success";
 	}
?>