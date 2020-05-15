<?php
	// get data from edit-crop-validate.js
	$shname = &$_POST['shopchk'];
	// database connection set
	include('../inc/dbconnection.php');
	// check crop existance
	$chkshname = mysqli_query($conn, "SELECT shop_name FROM shops WHERE shop_name = '$shname'");
	$count = mysqli_num_rows($chkshname);
	if ($count!=0) {
		echo 1;
	}
	else{
		echo 0;
	} 

 ?>