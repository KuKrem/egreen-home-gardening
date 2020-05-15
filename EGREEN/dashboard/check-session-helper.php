<?php
	// session_start();

	// if (!isset($_SESSION["id"])) { 
	if (!isset($_SESSION["id"])) { 
 		header("Location: ../login.php"); 
		exit;  
	} 
	else{
		if (($_SESSION["log"] == 2 || $_SESSION["log"] == 3 || $_SESSION["log"] == 4 || $_SESSION["log"] == 6 || $_SESSION["log"] == 7 || $_SESSION["log"] == 9 || $_SESSION["log"] == 12)) { 
		  header("Location: ../index.php");
		  exit;  
		} 
		else{
		  $curUser=$_SESSION["userfn"]." ".$_SESSION["userln"];
		}
	}
		
	$id=$_SESSION["id"];
	$rolid=$_SESSION["log"];
?>