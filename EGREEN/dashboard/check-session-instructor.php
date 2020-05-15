<?php
	if (!isset($_SESSION["id"])) { 
 		header("Location: ../login.php"); 
		exit;  
	} 
	else{
		if ($_SESSION["log"] == 2 || $_SESSION["log"] == 4 || $_SESSION["log"] == 5 || $_SESSION["log"] == 7 || $_SESSION["log"] == 8 || $_SESSION["log"] == 11 || $_SESSION["log"] == 14) { 
		  header('Location: ../index.php');
		  exit;  
		} 
		else{
		  $curUser=$_SESSION["userfn"]." ".$_SESSION["userln"];
		  $id=$_SESSION["id"];
		}
	}
		
	$id=$_SESSION["id"];
	$rolid=$_SESSION["log"];
?>