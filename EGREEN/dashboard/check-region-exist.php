<?php
	// get data from edit-crop-validate.js
	$rname = &$_POST['regchk'];
	// database connection set
	include('../inc/dbconnection.php');
	// check crop existance
	$chkreginame = mysqli_query($conn, "SELECT town FROM regions WHERE town = '$rname'");
	$count = mysqli_num_rows($chkreginame);
	if ($count!=0) {
		echo 1;
	}
	else{
		echo 0;
	} 

 ?>