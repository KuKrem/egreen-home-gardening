<?php 
	session_start();
	include('check-session-all.php');
	// echo "works<br>";

	if(isset($_POST)){
		include('../inc/dbconnection.php');
		$norpoid=$_POST['nponm'];
		$userid=$_POST['user'];
		$comment=$_POST['cmnt'];
		$cmimag=$_FILES['cmntimg']['name'];
		$key="npdiv".$norpoid;

		// $_SESSION['error'] = "Comment image is not an image.";
		// echo $key;
		// die();
		// echo '<script type="text/javascript">alert("Comment added successfully!");</script>';
		// header('refresh: url=2; normal-posts.php#'.$key);

		// die();
		// echo $norpoid."<br>";
		// echo $userid."<br>";
		// echo $comment."<br>";
		// echo $cmimag."<br>";

		// uploading comment image if it exists starts
		if($cmimag != ''){
			$target_dir = "../images/npcimg/";
	    $target_file = $target_dir . basename($_FILES["cmntimg"]["name"]);
	    $uploadOk = 1;
	    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
	    // Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES["cmntimg"]["tmp_name"]);
    
	    if($check !== false) {
	      // $_SESSION['error'] = "Instructor certificate is an image - " . $check["mime"] . ".";
	      $uploadOk = 1;
	    } 
	    else {
	      // $_SESSION['error'] = "Comment image is not an image.";
	      echo '<script type="text/javascript">alert("Comment image is not an image!");</script>';
	      header('refresh: url=2; normal-posts.php#'.$key);
	      $uploadOk = 0;
	      die();
	    }

	    // Check if file already exists
	    // if (file_exists($target_file)) {
	      // $_SESSION['error'] = "Sorry, image already exist. Use different file name";
	      // header('Location: add-journal-entry.php?jid='.$jourid);
	    //   echo '<script type="text/javascript">alert("Sorry, image already exist. Use different file name!");</script>';
	    //   header('refresh: url=2; normal-posts.php#'.$key);
	    //   $uploadOk = 0;
	    //   die();
	    // }

	    // Check if $uploadOk is set to 0 by an error
	    if ($uploadOk == 0) {
	      // $_SESSION['error'] = "Sorry, journal entry image was not uploaded.";
	      // header('Location: add-journal-entry.php?jid='.$jourid);
	      echo '<script type="text/javascript">alert("Sorry, image was not uploaded.!");</script>';
	      header('refresh: url=2; normal-posts.php#'.$key);
	      die();
	    
	    // if everything is ok, try to upload file
	    } 
    	else {
	      if (move_uploaded_file($_FILES["cmntimg"]["tmp_name"], $target_file)) {
	        // $_SESSION['success'] = "Journal entry Image ". basename( $_FILES["cmntimg"]["name"]). " has been uploaded.";
	        // header('Location: add-journal-entry.php?jid='.$_SESSION['jourid']);
	        echo '<script type="text/javascript">alert("Image ". basename( $_FILES["cmntimg"]["name"]). " has been uploaded..!");</script>';
	        header('refresh: url=2; normal-posts.php#'.$key);

	        $npcphotopath="../images/npcimg/".basename( $_FILES["cmntimg"]["name"]);

	        // send data to the database
					$sendcomm=mysqli_query($conn, "INSERT INTO np_replies(npr_description, npr_image, np_id, user_id) VALUES('$comment','$npcphotopath','$norpoid','$userid')");
   
				  //  check whether query executed or not
				  if(!$sendcomm){
				    // $_SESSION['error'] = "Saving error. Please try again later.!";
			      // echo mysql_error();
			      echo '<script type="text/javascript">alert("Saving error. Please try again later.");</script>';
				    header('refresh: url=2; normal-posts.php#'.$key);
				    }
				    else {
				      // $_SESSION['success'] = "Journal entry has been added successfully.!";
				      // header('Location: add-journal-entry.php?jid='.$jourid);
				      echo '<script type="text/javascript">alert("Comment has been added successfully.");</script>';
				      header('refresh: url=2; normal-posts.php#'.$key);
				    }
	      	} else {
	        // $_SESSION['error'] = "Sorry, there was an error uploading image.";
	        // header('Location: add-journal-entry.php?jid='.$jourid);
	        echo '<script type="text/javascript">alert("Sorry, there was an error uploading image.");</script>';
	        header('refresh: url=2; normal-posts.php#'.$key);
	      }
    	}
		}
		else {
			// send data to the database
			$sendcomm=mysqli_query($conn, "INSERT INTO np_replies(npr_description, np_id, user_id) VALUES('$comment','$norpoid','$userid')");
   
		  //  check whether query executed or not
		  if(!$sendcomm){
		    // $_SESSION['error'] = "Saving error. Please try again later.!";
	      // echo mysql_error();
	      echo '<script type="text/javascript">alert("uuSaving error. Please try again later.");</script>';
		    header('refresh: url=2; normal-posts.php#'.$key);
		  }
	    else {
	      // $_SESSION['success'] = "Journal entry has been added successfully.!";
	      // header('Location: add-journal-entry.php?jid='.$jourid);
	      echo '<script type="text/javascript">alert("Comment has been added successfully.");</script>';
	      header('refresh: url=2; normal-posts.php#'.$key);
	    }
		}
		// uploading comment image if it exists ends		

 		// close database connection
  	mysqli_close($conn);
	}
?>