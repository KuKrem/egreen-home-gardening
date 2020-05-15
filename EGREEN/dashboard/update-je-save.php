<?php 
	session_start();
  include('check-session-planter.php');
	// echo "works";
	// die();
  // database include
  include('../inc/dbconnection.php');
  // echo "kkkk";
 
  if(isset($_POST)){
    $gerno=$_POST['noofger'];
    $iswater=isset($_POST['water']) ? 1 : 0;
    $isferti=isset($_POST['fertilize']) ? 1 : 0;
    $desc=$_POST['description'];
    $jei = $_FILES['jentryimg']['name'];
    $journid=$_POST['journalid'];
    $jo_entry_id=$_POST['jentr'];
    // $jeid=$_POST['']
    $jephotopath="";
    $userid=$id;

    // echo $gerno."<br/>";
    // echo $iswater."<br/>";
    // echo $isferti."<br/>";
    // echo $desc."<br/>";
    // echo $jei."<br/>";
    // echo $joureid."<br/>";
    // die();


// ---------------------Journal entry image  ---------------------------------------------- 
  // uploading Journal entry image to the server if it exists
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
      $_SESSION['error'] = "Journal entry image is not an image.";
      header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
      // echo "Timeline entry image is not an image.";
      $uploadOk = 0;
      die();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, journal entry image already exist. Use different file name";
      header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
      // echo "ww";
      $uploadOk = 0;
      die();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, journal entry image was not uploaded.";
      header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
      // echo "ee";
      die();
    
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["jentryimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Journal entry image ". basename( $_FILES["jentryimg"]["name"]). " has been uploaded.";
        header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
        // echo "rr";

        $jephotopath="../images/jrnimg/".basename( $_FILES["jentryimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading journal entry image.";
        header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
        // echo "tt";
      }
    }

    $sendentry=mysqli_query($conn, "UPDATE journal_entries SET noofgermin='$gerno', is_watered='$iswater', is_fertilized='$isferti', je_descript='$desc', je_image='$jephotopath', last_updated=NOW() WHERE jentry_id='$jo_entry_id'");

    if(!$sendentry){
      $_SESSION['error'] = "Saving error. Please try again later.!";
      header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
      // echo "yy";
      }
      else {
        $_SESSION['success'] = "Journal entry has been updated successfully.!";
        header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
        // echo "uu";
      }
    }
    else {
      $sendentry=mysqli_query($conn, "UPDATE journal_entries SET noofgermin='$gerno', is_watered='$iswater', is_fertilized='$isferti', je_descript='$desc', last_updated=NOW() WHERE jentry_id='$jo_entry_id'");

      if(!$sendentry){
        $_SESSION['error'] = "Saving error. Please try again later.!";
        header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
        // echo "ii";
      }
      else {
        $_SESSION['success'] = "Journal entry has been updated successfully.!";
        header('Location: update-journal-entry.php?jeid='.$jo_entry_id);
        // echo "oo";
      }
    }
  	mysqli_close($conn);
	}
?>