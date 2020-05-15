<?php 
	session_start();
	include('check-session-admin.php');
 
  if(isset($_POST)){
    // database include
    include('../inc/dbconnection.php');
    $cname=$_POST['cropname'];

    //  check whether crop name exists
    $chkcname="SELECT cropname FROM crops WHERE cropname = '$cname'";
  	$numrow = mysqli_query($conn,$chkcname);
  	if(mysqli_num_rows($numrow)>=1) {
	    $_SESSION['error'] = "Crop Already Exists. Please add new name.";
		  header('Location: add-crop.php');
	  }
	  else {
	    $insert=mysqli_query($conn,"INSERT INTO crops(cropname) VALUES('$cname')");
	 
	    //  check whether query executed or not
	    if(!$insert){
	      $_SESSION['error'] = "Saving error. Please try again later.!";
	      // header('Location: add-crop.php');
	      echo mysqli_error();
	    }
	    else {
	      $_SESSION['success'] = "Crop has been added successfully.!";
	      header('Location: add-crop.php');
	    }
  	}
  	// close database connection
  	mysqli_close($conn);
	}
?>