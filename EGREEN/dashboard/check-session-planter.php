<?php
	if (!isset($_SESSION["id"])) { 
 		header("Location: ../login.php"); 
		exit;  
	} 
	else{
		// if($_SESSION["log"] == '3'){
		if (($_SESSION["log"] == 3) || ($_SESSION["log"] == 4) || ($_SESSION["log"] == 5) || ($_SESSION["log"] == 9) || ($_SESSION["log"] == 10) || ($_SESSION["log"] == 11) || ($_SESSION["log"] == 15)) {
			echo "Your haven't access to that page..!";
		  header("Location: index.php");
		  exit;  
		} 
		else{
		  $curUser=$_SESSION["userfn"]." ".$_SESSION["userln"];
		}
	}
		
	$id=$_SESSION["id"];
	$rolid=$_SESSION["log"];
?>