<?php
	session_start();
	// including database
	if(isset($_POST['id'])) {
	$jentryid=$_POST['id'];
	include('../inc/dbconnection.php');

	// $checkpostexst=mysqli_query($conn, "SELECT * FROM ")
	
	$checkshare=mysqli_query($conn, "SELECT * FROM normal_posts WHERE jentry_id=$jentryid");
	$num_rows = mysqli_num_rows($checkshare);

	if($num_rows>0) {
    echo 0;
    // die();
  }
  else {

		$setnpost= mysqli_query($conn, "INSERT INTO normal_posts(created_date,jentry_id) VALUES(NOW(),'$jentryid')");
		if($setnpost){
			$updatejenpcol=mysqli_query($conn, "UPDATE journal_entries SET shared_as_np=1 WHERE jentry_id=$jentryid");
			if($updatejenpcol) {
				echo 1;
			}
			else {
				echo 0;
			}
		}
		else {
			echo 0;
		}
	}
	mysqli_close($conn);
}
?>