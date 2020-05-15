<?php
  session_start();
  session_destroy();
  session_start();

  CRYPT_BLOWFISH or die ('No Blowfish found.');
    
  if(isset($_POST)){
    // database include
    include('inc/dbconnection.php');
    $getfinluserid=mysqli_query($conn, "SELECT * FROM users ORDER BY user_id DESC LIMIT 1");
    while($result=mysqli_fetch_array($getfinluserid)){
      $fuserid=$result['user_id'];
    }
    $userid=$fuserid+1;
    // echo $userid;
    // die();
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $uname=$_POST['username'];
    $pword=$_POST['password'];
    $cpword=$_POST['password-confirmation'];
    $iwe=$_POST['insworkexp'];
    $ici = $_FILES['inscertimg']['name'];
    $swe=$_POST['showorkexp'];
    $sci = $_FILES['shocertimg']['name'];
    $hwe=$_POST['helpworkexp'];
    $hci = $_FILES['helpcertimg']['name'];
    $insphotopath = "";
    $shophotopath = ""; 
    $helphotopath = "";
    $currDate=date("Y-m-d");
    $userimg="images/user.png";
    $approve = 0;
    $status = 1;
    // $custom ='sdWe#%85656Kdcfhdne!3~(8*9))dfdfAA*@!';
    // $encript_password = hash('sha256',$pword.$custom);

    // Password salt method starts

    //This string tells crypt to use blowfish for 5 rounds.
    $Blowfish_Pre = '$2a$05$';
    $Blowfish_End = '$';

    // PHP code you need to register a user
    // Blowfish accepts these characters for salts.
    $Allowed_Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
    $Chars_Len = 63;

    // 18 would be secure as well.
    $Salt_Length = 21;
    // $mysql_date = date( 'Y-m-d' );
    $salt = "";
    for($i=0; $i<$Salt_Length; $i++) {
      $salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
    }
    $bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;
    $hashed_password = crypt($pword, $bcrypt_salt);
    // Password salt method ends     

    if(!empty($_POST['user'])){
      // echo "fuv";
      // print_r($_POST['user']);
      foreach($_POST['user'] as $selected) {
        $item[]=$selected ;
      }
      if((in_array("1",$item)) && (in_array("2",$item)) && (in_array("3",$item)) && (in_array("4",$item))) {
        $roleID=16;
      }
      elseif ((in_array("1",$item)) && (in_array("2",$item)) && (in_array("3",$item))) {
        $roleID = 12;
      }
      elseif((in_array("1",$item)) && (in_array("2",$item)) && (in_array("4",$item))) {
        $roleID = 13;
      }
      elseif((in_array("1",$item)) && (in_array("3",$item)) && (in_array("4",$item))) {
        $roleID = 14;
      }
      elseif((in_array("2",$item)) && (in_array("3",$item)) && (in_array("4",$item))) {
        $roleID = 15;
      }
      elseif((in_array("1",$item)) && (in_array("2",$item))) {
        $roleID = 6;
      }
      elseif((in_array("1",$item)) && (in_array("3",$item))) {
        $roleID = 7;
      }
      elseif((in_array("1",$item)) && (in_array("4",$item))) {
        $roleID = 8;
      }
      elseif((in_array("2",$item)) && (in_array("3",$item))) {
        $roleID = 9;
      }
      elseif((in_array("2",$item)) && (in_array("4",$item))) {
        $roleID = 10;
      }
      elseif((in_array("3",$item)) && (in_array("4",$item))) {
        $roleID = 11;
      }
      elseif((in_array("1",$item))) {
        $roleID = 2;
      }
      elseif((in_array("2",$item))) {
        $roleID = 3;
      }
      elseif( (in_array("3",$item))) {
        $roleID = 4;
      }
      elseif((in_array("4",$item))) {
        $roleID = 5;
      }
    }


// ---------------------Instructor certificate---------------------------------------------- 
  // uploading instructor certificate to the server
  if($ici != '') {
    $target_dir = "images/inscert/";
    $target_file = $target_dir . basename($_FILES["inscertimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["inscertimg"]["tmp_name"]);
    
    if($check !== false) {
      // $_SESSION['error'] = "Instructor certificate is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $_SESSION['error'] = "Instructor certificate is not an image.";
      header('Location: register.php');
      $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, Instructor certificate file already exist. Use different file name";
      header('Location: register.php');
      $uploadOk = 0;
      die();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, Instructor certificate image was not uploaded.";
      header('Location: register.php');
      die();
    
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["inscertimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Instructor certificate ". basename( $_FILES["inscertimg"]["name"]). " has been uploaded.";
        header('Location: register.php');

        $insphotopath="images/inscert/".basename( $_FILES["inscertimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading Instructor certificate.";
        header('Location: register.php'); 
      }
    }
  }
// ---------------------Instructor certificate---------------------------------------------- 


// ---------------------Shopkeeper certificate----------------------------------------------
  // uploading shopkeeper certificate to the server
  if($sci != '') {
    $target_dir = "images/shocert/";
    $target_file = $target_dir . basename($_FILES["shocertimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["shocertimg"]["tmp_name"]);
    
    if($check !== false) {
      $_SESSION['success'] = "Shopkeeper certificate is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $_SESSION['error'] = "Shopkeeper certificate is not an image.";
      header('Location: register.php');
      $uploadOk = 0;
      // exit();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, Shopkeeper certificate file already exist. Use different file name";
      header('Location: register.php');
      $uploadOk = 0;
      die();
      // exit();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, Shopkeeper certificate image was not uploaded.";
      header('Location: register.php');
      die();
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["shocertimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Shopkeeper certificate ". basename( $_FILES["shocertimg"]["name"]). " has been uploaded.";
        header('Location: register.php');

        $shophotopath="images/shocert/".basename( $_FILES["shocertimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading Shopkeeper certificate.";
        header('Location: register.php'); 
      }
    }
  }
// ----------------------Shopkeeper certificate-----------------------------------------------


// -----------------------------Helper certificate----------------------------------------------
  // uploading shopkeeper certificate to the server
  if($hci != '') {
    $target_dir = "images/helcert/";
    $target_file = $target_dir . basename($_FILES["helpcertimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["helpcertimg"]["tmp_name"]);
    
    if($check !== false) {
      $_SESSION['success'] = "Helper certificate is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $_SESSION['error'] = "Helper certificate is not an image.";
      header('Location: register.php');
      $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error'] = "Sorry, Helper certificate file already exist. Use different file name";
      header('Location: register.php');
      $uploadOk = 0;
      die();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION['error'] = "Sorry, Helper certificate image was not uploaded.";
      header('Location: register.php');
    
    // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($_FILES["helpcertimg"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "Helper certificate ". basename( $_FILES["helpcertimg"]["name"]). " has been uploaded.";
        header('Location: register.php');

        $helphotopath="images/helcert/".basename( $_FILES["helpcertimg"]["name"]);
      } else {
        $_SESSION['error'] = "Sorry, there was an error uploading Helper certificate.";
        header('Location: register.php');
      }
    }
  }
// -----------------------------Helper certificate---------------------------------------------- 

  //  '$uname' this is the correct form for working to check existing username
  $chkuser="SELECT COUNT(*) FROM users WHERE username = $uname";
  if (mysqli_query($conn,$chkuser)>=1) {
    $_SESSION['error'] = "User Already Exists. Please use different username.";
    // echo "User Already Exists<br/>";
    header('Location: register.php');
    // exit();
    echo $uname;
    die();
  }
  else {
    echo "string";
    die();
    $insert=mysqli_query($conn,"INSERT INTO users(user_id,fname,lname,username,password,passwd_salt,profile_image,ins_experience,ins_certificate,shop_experience,shop_certificate,help_experience,help_certificate,role_id,status,is_approved) VALUES('$userid','$fname','$lname','$uname','$hashed_password','$salt','$userimg','$iwe','$insphotopath','$swe','$shophotopath','$hwe','$helphotopath','$roleID','$status','$approve')");
 
    if(!$insert){
      $_SESSION['error'] = "Saving error. Please try again later.!";
      // $_SESSION['error'] = "Error";
      // echo "Error".mysqli_error($conn);
      // die("data insertion failed");
      header('Location: register.php');
      // die();
    }
    else {
      $_SESSION['success'] = "User has been registered successfully.!";
      header('Location: register.php');
    }
  }
  mysqli_close($conn);
}
?>