<?php 
	session_start();
  include('check-session-instructor.php');

  // database include
  include('../inc/dbconnection.php');
  // echo "kkkk";
 
  if(isset($_POST)){
    // echo "oooo";
  	// $tlid=$_GET['tlid'];
    $dno=$_POST['daynum'];
    $desc=$_POST['description'];
    $tli = $_FILES['tleimg']['name'];
    $timelnid=$_POST['tmlnid'];
    // $_SESSION['timelnid']=$_POST['tmlnid'];
    $tlentid=$_POST['tileid'];
    $tlephotopath="";
    $userid=$id;
    // echo $tli;
    // echo $timelnid;
    // die();

// ---------------------Timeline entry image  ---------------------------------------------- 
  // uploading timeline image to the server if it exists
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
      $_SESSION['error'] = "Timeline entry image is not an image.";
      // header('Location: add-tl-entry.php?tlid='.$_SESSION['timelnid']);
      echo "Timeline entry image is not an image.";
      $uploadOk = 0;
      die();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, timeline image already exist. Use different file name";
      // header('Location: add-tl-entry.php?tlid='.$timelnid);
      echo "ww";
      $uploadOk = 0;
      die();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, timeline image was not uploaded.";
      // header('Location: add-tl-entry.php?tlid='.$timelnid);
      echo "ee";
      die();
    
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["tleimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Timeline Image ". basename( $_FILES["tleimg"]["name"]). " has been uploaded.";
        header('Location: update-tl-entry.php?tleid='.$tlentid);
        // echo "rr";

        $tlephotopath="../images/tlimg/".basename( $_FILES["tleimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading timeline image.";
        header('Location: update-tl-entry.php?tleid='.$tlentid);
        // echo "tt";
      }
    }

    $sendentry=mysqli_query($conn, "UPDATE timeline_entries SET day_no='$dno', image='$tlephotopath', description='$desc', last_update=NOW() WHERE tle_id='$tlentid'");

    if(!$sendentry){
      $_SESSION['error'] = "Saving error. Please try again later.!";
      // header('Location: update-tl-entry.php?tlid='.$tlentryid);
      echo "yy";
      }
      else {
        $_SESSION['success'] = "Timeline entry has been updated successfully.!";
        header('Location: update-tl-entry.php?tleid='.$tlentid);
        // echo "uu";
      }
    }
    else {
      $sendentry=mysqli_query($conn, "UPDATE timeline_entries SET day_no='$dno', description='$desc', last_update=NOW() WHERE tle_id='$tlentid'");

      if(!$sendentry){
        $_SESSION['error'] = "Saving error. Please try again later.!";
        header('Location: update-tl-entry.php?tleid='.$tlentid);
        // echo "ii";
      }
      else {
        $_SESSION['success'] = "Timeline entry has been updated successfully.!";
        header('Location: update-tl-entry.php?tleid='.$tlentid);
        // echo "oo";
      }
    }
  	mysqli_close($conn);
	}
?>