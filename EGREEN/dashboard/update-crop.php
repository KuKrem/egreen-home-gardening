<?php 
	session_start();
	include('check-session-admin.php');
 
  if(isset($_POST)){
    // database include
    include('../inc/dbconnection.php');
    $cname=$_POST['cropname'];
    $id=$_POST['cropid'];

    //  check whether crop name exists
    $chkcname="SELECT cropname FROM crops WHERE cropname = '$cname'";
  	$numrow = mysqli_query($conn,$chkcname);
  	if(mysqli_num_rows($numrow)>=1) {
	    $_SESSION['error'] = "Crop Already Exists. Please add new name.";
		  header('Location: edit-crop.php');
	  }
	  else {
	    $update=mysqli_query($conn,"UPDATE crops SET cropname='$cname' WHERE crop_id=$id");
	 
	    if(!$update){
	      $_SESSION['error'] = "Updating error. Please try again later.!";
	      header('Location: edit-crop.php');
	      // die();
	    }
	    else {
	      $_SESSION['success'] = "Crop has been updated successfully.!";
	      header('Location: view-crops.php');
	    }
  	}
  	mysqli_close($conn);
	}
?>