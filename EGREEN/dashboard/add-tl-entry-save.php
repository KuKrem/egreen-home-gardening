<?php 
	session_start();
  include('check-session-instructor.php');
 
  if(isset($_POST)){
  	// $tlid=$_GET['tlid'];
    // database include
    include('../inc/dbconnection.php');
    $dno=$_POST['daynum'];
    $desc=$_POST['description'];
    $tli = $_FILES['tleimg']['name'];
    $timelnid=$_POST['tmlnid'];
    // $_SESSION['timelnid']=$_POST['tmlnid'];
    $tlephotopath="";
    $userid=$id;
    // echo $timelnid;
    // die();

// ---------------------Timeline image  ---------------------------------------------- 
  // uploading timeline image to the server
  if($tli != '') {
    $target_dir = "../images/tlimg/";
    $target_file = $target_dir . basename($_FILES["tleimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["tleimg"]["tmp_name"]);
    
    if($check !== false) {
      // $_SESSION['error'] = "Instructor certificate is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $_SESSION['error'] = "Timeline image is not an image.";
      header('Location: add-tl-entry.php?tlid='.$_SESSION['timelnid']);
      $uploadOk = 0;
      die();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, timeline image already exist. Use different file name";
      header('Location: add-tl-entry.php?tlid='.$timelnid);
      $uploadOk = 0;
      die();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, timeline image was not uploaded.";
      header('Location: add-tl-entry.php?tlid='.$timelnid);
      die();
    
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["tleimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Timeline Image ". basename( $_FILES["tleimg"]["name"]). " has been uploaded.";
        header('Location: add-tl-entry.php?tlid='.$_SESSION['timelnid']);

        $tlephotopath="../images/tlimg/".basename( $_FILES["tleimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading timeline image.";
        header('Location: add-tl-entry.php?tlid='.$timelnid); 
      }
    }
  }
  else {
    $tlephotopath="../images/tlimg/author-img1.jpg";
  }
// ---------------------Timeline image upload---------------------------------------------- 

	// send data to the database
		$sendentry=mysqli_query($conn, "INSERT INTO timeline_entries(day_no, image, description, created_at, timeline_id) VALUES('$dno','$tlephotopath','$desc',NOW(),'$timelnid')");
   
	  //  check whether query executed or not
	  if(!$sendentry){
	    $_SESSION['error'] = "Saving error. Please try again later.!";
      // echo mysql_error();
	    header('Location: add-tl-entry.php?tlid='.$timelnid);
	    }
	    else {
	      $_SESSION['success'] = "Timeline entry has been added successfully.!";
	      header('Location: add-tl-entry.php?tlid='.$timelnid);
	    }

 		// close database connection
  	mysqli_close($conn);
	}
?>