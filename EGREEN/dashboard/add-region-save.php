<?php 
	session_start();
	include('check-session-admin.php');
	// echo "works";
	// die();
	// database connection
	include('../inc/dbconnection.php');
	if(isset($_POST)){
		$reg_name=$_POST['regname'];
		
		// $prov_dist = explode("|", $_POST['prolist']);
		// echo "Price range is ", $bits[0], " - ", $bits[1];  
		// $proid = $prov_dist[0];
		// $disid = $prov_dist[1];
		$disid=$_POST['dislist'];
		$proid=$_POST['prolist'];
		// echo $reg_name;
		// echo $proid;
		// echo $disid;
		// die();


		$insertreg=mysqli_query($conn, "INSERT INTO regions(town, district_id, province_id) VALUES('$reg_name','$disid','$proid')");
		if(!$insertreg){
			$_SESSION['error'] = "Region couldn't be added.";
      header('Location: add-region.php');
			// echo "not going";
		}
		else {
			$_SESSION['success'] = "Region has been added successfully.!";
	    header('Location: add-region.php');
			// echo "okay";
		}
		mysqli_close($conn);
	}
?>