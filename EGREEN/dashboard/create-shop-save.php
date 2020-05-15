<?php 
	session_start();
	include('check-session-shopkeeper.php');
	// echo "works";

	if(isset($_POST)) {
		include('../inc/dbconnection.php');
		$userid=$_POST['user'];
		$shopname=$_POST['shopname'];
		$shopaddrs=$_POST['shopaddrs'];
		$shoptele=$_POST['shoptele'];

		$checkshuser="SELECT * FROM shops WHERE user_id=$userid";
		$numusers=mysqli_query($conn,$checkshuser);
		if (mysqli_num_rows($numusers)>1) {
			
			// echo $num;
			$_SESSION['error']="Already you have created a shop.";
			header('location: create-shop.php');

		}
		else {
			// echo "can";
			$instshop=mysqli_query($conn, "INSERT INTO shops(user_id, shop_name, shop_address, telephone) VALUES('$userid','$shopname','$shopaddrs','$shoptele')");
			if(!$instshop){
				$_SESSION['error']="Something went wrong. Shop couldn't be created.";
				header('location: create-shop.php');
			}
			else {
				$_SESSION['success']="Shop has been created successfully.";
				header('location: create-shop.php');
			}
		}
		mysqli_close($conn);
	}
?>