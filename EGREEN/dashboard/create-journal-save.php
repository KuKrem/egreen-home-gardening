<?php 
	session_start();
	include('check-session-planter.php');
	// echo "works";
	// die();
	// database connection
	include('../inc/dbconnection.php');
	if(isset($_POST)){
		$jouname=$_POST['jname'];
		$numgermi=$_POST['numofg'];
		$userid=$id;
		$crpid=$_POST['cropnm'];
		$regid=$_POST['reginame'];

		// echo $jouname;
		// echo $numgermi;
		// echo $userid;
		// echo $crpid;
		// echo $regid;
		// die();

		$insertjour=mysqli_query($conn, "INSERT INTO journals(journal_name, start_date, noofgermi, user_id, crop_id, region_id) VALUES('$jouname',NOW(),'$numgermi','$userid','$crpid','$regid')");
		if(!$insertjour){
			$_SESSION['error'] = "Journal couldn't be started.";
      header('Location: create-journal.php');
			// echo "not going";
		}
		else {
			$_SESSION['success'] = "Region has been started successfully.!";
	    header('Location: create-journal.php');
			// echo "okay";
		}
		mysqli_close($conn);
	}
?>