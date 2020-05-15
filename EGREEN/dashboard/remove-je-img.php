<?php 
	session_start();
  include('check-session-planter.php');

  // database include
  include('../inc/dbconnection.php');

  // if(isset($_POST['remvtleimg'])){
  if(isset($_POST['id'])){
    $jentid=$_POST['id'];
    $photoname = $_POST['img'];
    // unlink($photoname);
    if (file_exists($photoname)) {
      unlink($photoname);
      $queryremimg=mysqli_query($conn, "UPDATE journal_entries SET je_image='../images/jrnimg/author-img1.jpg' WHERE jentry_id=$jentid");
      if($queryremimg){
        echo 1;
      }
      else {
        echo 0;
      }
    }
    close_mysqli($conn);
  }
?>