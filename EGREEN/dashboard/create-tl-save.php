<?php 
	session_start();
	include('check-session-instructor.php');

	if(isset($_POST)){
		// setting database connection
		include('../inc/dbconnection.php');
		// get selected value from dropdown menu
		$croid=$_POST['selectcrop'];
		$userid=$id;

		$createtl=mysqli_query($conn, "INSERT INTO timelines(user_id, crop_id, created_on) VALUES('$userid','$croid', NOW())");
		if(!$createtl){
			$_SESSION['error'] = "Creating error. Please try again later.!";
		  header('Location: create-timeline.php');
		}
		else {
			$_SESSION['success'] = "Timeline has been created successfully.!";
			$last_id = mysqli_insert_id($conn);
		  $upcrptbl=mysqli_query($conn, "UPDATE crops SET timeline_id ='$last_id' WHERE crop_id = '$croid'");
		  if(!$upcrptbl){
		  	echo mysqli_error();
		  }
		  else {
		  	echo "ok";
		  }
		  header('Location: create-timeline.php');
		}
		mysqli_close($conn);
	}
?>