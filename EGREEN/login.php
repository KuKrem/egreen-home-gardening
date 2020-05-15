<?php
	session_start();
	/*session_destroy();
	session_start();*/

	CRYPT_BLOWFISH or die ('No Blowfish found.');

	// MySQL server connects  
	require_once('inc/dbconnection.php');

	if (isset($_SESSION['id'])) {
    header('Location: dashboard/index.php');
    exit;
	}

	if(isset($_POST['login'])) {
    $user=$_POST['username'];
    $password=$_POST['password'];
    $custom='sdWe#%85656Kdcfhdne!3~(8*9))dfdfAA*@!';
    $encript_password=hash('sha256',$password.$custom);

		// Password salt method starts

    //This string tells crypt to use blowfish for 5 rounds.
    $Blowfish_Pre = '$2a$05$';
    $Blowfish_End = '$';

    // PHP code you need to register a user
    // Blowfish accepts these characters for salts.
    // $Allowed_Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
    // $Chars_Len = 63;

    // 18 would be secure as well.
    // $Salt_Length = 21;
    // $mysql_date = date( 'Y-m-d' );
    // $salt = "";
    // for($i=0; $i<$Salt_Length; $i++) {
    //   $salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
    // }
    // $bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;
    // $hashed_password = crypt($password, $bcrypt_salt);
    // Password salt method ends 
    
  	// query the table 
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$encript_password' AND status='1' AND is_approved=1 LIMIT 1";  
    $query_result = mysqli_query($conn,$sql);
    $num_of_rows = mysqli_num_rows($query_result);

    // new checking for saalt password starts
    $sql2="SELECT * FROM users WHERE username = '$user' AND status='1' AND is_approved=1 LIMIT 1";
    $query_result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_array($query_result2);
    // $num_of_rows2 = mysqli_num_rows($query_result2);
    $hashed_pass = crypt($password, $Blowfish_Pre . $row2['passwd_salt'] . $Blowfish_End);
    // new checking for saalt password ends

    if(($num_of_rows == 1) || ($hashed_pass==$row2['password'])) {  
    	// echo "rrrr";
    	// echo $hashed_pass."<br>";
    	// echo $row2['password'];
    	// die();
      if ($num_of_rows == 1) {
      	while($row=mysqli_fetch_array($query_result)){  
        $logtype=$row['role_id'];
          // valid user 
        	$_SESSION["id"] = $row['user_id'];
          $_SESSION["userfn"] = $row['fname'];
          $_SESSION["userln"] = $row['lname'];
          $_SESSION["log"] = $row['role_id'];
          // $_SESSION["success"] = "Success";

        $dtquery = "UPDATE users SET last_logged_date=NOW() WHERE user_id='$_SESSION[id]' LIMIT 1";
        $dtqueryres = mysqli_query($conn,$dtquery);

        if(!$dtqueryres) {
        	$_SESSION['error'] = "Cannot update last logged date.";
        	// die();
        	exit();
      	}

        mysqli_close($conn); 
          
        // redirect to the next page
        header("Location: dashboard/index.php");
        session_write_close();
      }
    } 
    if($hashed_pass==$row2['password']) {
    	// echo "rrrr";
    	// die();
    	$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$hashed_pass' AND status='1' AND is_approved=1 LIMIT 1";
    	$query_result = mysqli_query($conn,$sql);
    	while($row=mysqli_fetch_array($query_result)){  
        $logtype=$row['role_id'];
          // valid user 
        	$_SESSION["id"] = $row['user_id'];
          $_SESSION["userfn"] = $row['fname'];
          $_SESSION["userln"] = $row['lname'];
          $_SESSION["log"] = $row['role_id'];
          // $_SESSION["success"] = "Success";

        $dtquery = "UPDATE users SET last_logged_date=NOW() WHERE user_id='$_SESSION[id]' LIMIT 1";
        $dtqueryres = mysqli_query($conn,$dtquery);

        if(!$dtqueryres) {
        	$_SESSION['error'] = "Cannot update last logged date.";
        	// die();
        	exit();
      	}

        mysqli_close($conn); 
          
        // redirect to the next page
        header("Location: dashboard/index.php");
        session_write_close();
      }
    }
                 
    }
 	 	else {
  		$_SESSION['error'] = "Incorrect Username or Password";
  	} 
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" type="image/ico" href="dashboard/assets/images/icon/green-plant-vector.jpg"/>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="row">
			<div class="egreen">
				<div class="logo"><img src="images/egreen-log.png"></div>
				<div class="sitename">E GREEN</div>
			</div>
		</div>

<!-- ------------------------submission status display messaage------------------------ -->
    <div class="row message session">
      <div class="col-md-8 message">
        <?php if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
          </div>
        <?php } ?>
      </div>
    </div>
<!-- ------------------------submission status display messaage------------------------ -->
		
  	<div class="login-wrap">
			<div class="login-html">

				<form action="" method="post" name="loginform" id="loginform">
					<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
					<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
				
					<div class="login-form">
						<div class="sign-in-htm">
							<div class="group">
								<label for="user" class="label">Username</label>
								<input id="user" name="username" type="text" class="input">
							</div>
				
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input id="pass" name="password" type="password" class="input" data-type="password">
							</div>

							<div class="group">
								<input type="submit" name="login" class="button" value="Sign In">
							</div>
						
							<div class="form-group">
                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label>
              </div>
              
              <div id="register-link" class="text-left">
              	<span>Haven't account?</span>
                <a href="register.php" class="text-info">Register here...!</a> |               
                <a href="index.php" class="text-info">Site</a>
              </div>
							
							<div class="hr"></div>
						</div>
						
						<div class="for-pwd-htm">
							<div class="group">
								<label for="user" class="label">Username or Email</label>
								<input id="user" type="text" class="input">
							</div>
				
							<div class="group">
								<input type="submit" class="button" value="Reset Password">
							</div>
						
							<div class="hr"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>