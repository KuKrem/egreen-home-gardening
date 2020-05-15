<?php
	// getting district list for selected province
	$id=$_POST['proid'];
	include('../inc/dbconnection.php');
	$result = array();
	$find=mysqli_query($conn,"SELECT region_id,town FROM regions WHERE district_id='$id'");
	while($row=mysqli_fetch_array($find)){
		$result[]=$row;
	}
	$main = array('data'=>$result);
	echo json_encode($main);
 ?>