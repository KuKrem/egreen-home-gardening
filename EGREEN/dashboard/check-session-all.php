<?php
	// session_start();

	// if (!isset($_SESSION["id"])) { 
	if (!isset($_SESSION["id"])) { 
 		header("Location: ../login.php"); 
		exit;  
	}
	else{
	  $curUser=$_SESSION["userfn"]." ".$_SESSION["userln"];
	}
		
	$id=$_SESSION["id"];
	$rolid=$_SESSION["log"];
?>