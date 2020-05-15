<?php
	session_start();

	if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
	}
 if(isset($_POST)){
    echo "elsnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
    // $fname=$_POST['firstname'];
    // echo $fname;
    // echo ($_POST);
    
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="logout.php">Logout</a>

</body>
</html>