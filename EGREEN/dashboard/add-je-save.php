<?php 
	session_start();
  include('check-session-planter.php');
	// echo "works";
	// die();
 
  if(isset($_POST)){
  	// $tlid=$_GET['tlid'];
    // database include
    include('../inc/dbconnection.php');
    $gerno=$_POST['noofger'];
    $iswater=isset($_POST['water']) ? 1 : 0;
    $isferti=isset($_POST['fertilize']) ? 1 : 0;
    $desc=$_POST['description'];
    $jei = $_FILES['jentryimg']['name'];
    $jourid=$_POST['jentr'];
    // $_SESSION['timelnid']=$_POST['tmlnid'];
    $jephotopath="";
    $userid=$id;

    // echo $gerno."<br/>";
    // echo $iswater."<br/>";
    // echo $isferti."<br/>";
    // echo $desc."<br/>";
    // echo $jei."<br/>";
    // echo $jourid."<br/>";

    // echo $timelnid;
    // die();

// ---------------------Journal entry image  ---------------------------------------------- 
  // uploading Journal entry image to the server
  if($jei != '') {
    $target_dir = "../images/jrnimg/";
    $target_file = $target_dir . basename($_FILES["jentryimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["jentryimg"]["tmp_name"]);
    
    if($check !== false) {
      // $_SESSION['error'] = "Instructor certificate is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $_SESSION['error'] = "Journal entry is not an image.";
      header('Location: add-journal-entry.php?jid='.$_SESSION['jourid']);
      $uploadOk = 0;
      die();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, journal entry image already exist. Use different file name";
      header('Location: add-journal-entry.php?jid='.$jourid);
      $uploadOk = 0;
      die();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, journal entry image was not uploaded.";
      header('Location: add-journal-entry.php?jid='.$jourid);
      die();
    
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["jentryimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Journal entry Image ". basename( $_FILES["jentryimg"]["name"]). " has been uploaded.";
        header('Location: add-journal-entry.php?jid='.$_SESSION['jourid']);

        $jephotopath="../images/jrnimg/".basename( $_FILES["jentryimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading journal entry image.";
        header('Location: add-journal-entry.php?jid='.$jourid); 
      }
    }
  }
  else {
    $jephotopath="../images/jrnimg/author-img1.jpg";
  }
// ---------------------Journal entry image upload---------------------------------------------- 

	// send data to the database
		$sendentry=mysqli_query($conn, "INSERT INTO journal_entries(created_at, noofgermin, is_watered, is_fertilized, je_descript, je_image, journal_id) VALUES(NOW(),'$gerno','$iswater','$isferti','$desc','$jephotopath','$jourid')");
   
	  //  check whether query executed or not
	  if(!$sendentry){
	    $_SESSION['error'] = "Saving error. Please try again later.!";
      // echo mysql_error();
	    header('Location: add-journal-entry.php?jid='.$jourid);
	    }
	    else {
	      $_SESSION['success'] = "Journal entry has been added successfully.!";
	      header('Location: add-journal-entry.php?jid='.$jourid);
	    }

 		// close database connection
  	mysqli_close($conn);
	}
?>