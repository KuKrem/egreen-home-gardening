<?php
	// get data from edit-crop-validate.js
	$crpname = &$_POST['cropchk'];
	// database connection set
	include('../inc/dbconnection.php');
	// check crop existance
	$chkcrpname = mysqli_query($conn, "SELECT cropname FROM crops WHERE cropname = '$crpname'");
	$count = mysqli_num_rows($chkcrpname);
	if ($count!=0) {
		echo 1;
	}
	else{
		echo 0;
	} 

 ?>