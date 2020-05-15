<?php 
	session_start();
  include('check-session-instructor.php');

  // database include
  include('../inc/dbconnection.php');

  // if(isset($_POST['remvtleimg'])){
  if(isset($_POST['id'])){
    $tlenid=$_POST['id'];
    $photoname = $_POST['img'];
    // unlink($photoname);
    if (file_exists($photoname)) {
      unlink($photoname);
      $queryremimg=mysqli_query($conn, "UPDATE timeline_entries SET image='../images/tlimg/author-img1.jpg' WHERE tle_id=$tlenid");
      if($queryremimg){
        echo 1;
      }
      else {
        echo 0;
      }
    }
    // else {   
    //   echo 1;
    // }
    close_mysqli($conn);
  }
?>





    // if (unlink($photoname)) {
    //   $queryremimg=mysqli_query($conn, "UPDATE timeline_entries SET image='../images/tlimg/author-img1.jpg' WHERE tle_id=$tlenid");
    //   if($queryremimg){
    //     echo 1;
    //   }
    //   else {
    //     echo 0;
    //   }
      // $_SESSION['error']="Timeline image cannot be removed.!";
      // echo 0;
      // header('Location: update-tl-entry.php?tleid='.$timelnenid);
    }
    else {
      // $_SESSION['success']="Timeline image removed successfully.!";
      // echo ("Error deleting $photoname");
      // $queryremimg=mysqli_query($conn, "UPDATE timeline_entries SET image='../images/tlimg/author-img1.jpg' WHERE tle_id=$tlenid");
      // if($queryremimg){
      //   echo 1;
      // }
      // else {
        echo 0;
      }
      // header('Location: update-tl-entry.php?tleid='.$timelnenid);
    }
  // }
?>