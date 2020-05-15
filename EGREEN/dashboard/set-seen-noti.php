<?php
	// get data from edit-crop-validate.js
	$joid =$_POST['id'];
	$numb =$_POST['num'];
	// database connection set
	include('../inc/dbconnection.php');
	// check crop existance

	// if($Submit){
	for($i=0;$i<$numb;$i++){
		$sql1="UPDATE notifications SET seen=1 WHERE journal_id=$joid";
		$result4=mysqli_query($conn, $sql1);
	}
	// }

	// $setseen = mysqli_query($conn, "UPDATE cropname FROM crops WHERE cropname = '$crpname'");
	// $count = mysqli_num_rows($chkcrpname);
	if ($result4) {
		echo 1;
	}
	else{
		echo 0;
	} 

 ?>