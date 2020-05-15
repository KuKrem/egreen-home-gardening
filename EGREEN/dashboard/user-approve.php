<?php
	session_start();
	include('check-session-admin.php');
 	include('../inc/dbconnection.php');
 	$user=$_GET['uid'];
 	$approve=mysqli_query($conn, "UPDATE users SET is_approved = 1 WHERE user_id='$user'");
 	if(!$approve){
 		$_SESSION['error'] = "User cannot be approved.!";
		header('location: users.php');
 		die('Error');
 	}
 	else {
 		$_SESSION['success'] = "User has been approved successfully.!";
 		header('location: users.php');
 	}
 	mysqli_close($conn);
?>