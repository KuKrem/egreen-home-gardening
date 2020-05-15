<?php 
	session_start();

	include('check-session-helper.php');
	include('../inc/dbconnection.php');	
	// echo "works";
	if(isset($_POST)) {
		$userid=$id;
		$regid=$_POST['selectreg'];

		// echo $userid;
		// echo $regid;

		$setreghelp=mysqli_query($conn, "UPDATE users SET region_id=$regid WHERE user_id=$userid");
		if(!$setreghelp) {
			$_SESSION['error'] = "Region couldn't be set.";
      header('Location: select-region.php');
		}
		else {
			$_SESSION['success'] = "Region has been submitted successfully.!";
	    header('Location: select-region.php');
		}
		mysqli_close($conn);
	}
?>