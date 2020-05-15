<?php 
	session_start();
	include('check-session-shopkeeper.php');

	// echo "works<br/>";
	if(isset($_POST)){
		include('../inc/dbconnection.php');
		$shid=$_POST['shop'];
		$crop=$_POST['cropnm'];
		$nature=$_POST['itmnature'];
		$method=$_POST['sellmethod'];
		$itmimg=$_FILES['shpitmimg']['name'];

		// echo $shid."<br/>";
		// echo $crop."<br/>";
		// echo $nature."<br/>";
		// echo $method."<br/>";
		// echo $itmimg."<br/>";

		// die();

	// ---------------------Item image  ---------------------------------------------- 
  // uploading timeline image to the server
  if($itmimg != '') {
    $target_dir = "../images/itemimg/";
    $target_file = $target_dir . basename($_FILES["shpitmimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["shpitmimg"]["tmp_name"]);
    
    if($check !== false) {
      // $_SESSION['error'] = "Instructor certificate is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $_SESSION['error'] = "Item image is not an image.";
      header('Location: my-shop.php');
      $uploadOk = 0;
      die();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, item image already exist. Use different file name";
      header('Location: my-shop.php');
      $uploadOk = 0;
      die();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, item image was not uploaded.";
      header('Location: my-shop.php');
      die();
    
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["shpitmimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Item Image ". basename( $_FILES["shpitmimg"]["name"]). " has been uploaded.";
        header('Location: my-shop.php');

        $shpitmphotopath="../images/itemimg/".basename( $_FILES["shpitmimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading item image.";
        header('Location: my-shop.php'); 
      }
    }
  }
  else {
    $shpitmphotopath="../images/itemimg/author-img1.jpg";
  }
// ---------------------Timeline image upload---------------------------------------------- 

	// send data to the database
		$saveitem=mysqli_query($conn, "INSERT INTO shop_item(si_image, si_sell_meth, crop_id, in_id, shop_id) VALUES('$shpitmphotopath','$method','$crop','$nature','$shid')");
   
	  //  check whether query executed or not
	  if(!$saveitem){
	    $_SESSION['error'] = "Saving error. Please try again later.!";
      // echo mysql_error();
	    header('Location: my-shop.php');
	    }
	    else {
	      $_SESSION['success'] = "Item has been added successfully.!";
	      header('Location: my-shop.php');
	    }

 		// close database connection
  	mysqli_close($conn);
	}
?>