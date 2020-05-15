<?php 
 $day = date('Y-m-d');
 // echo $day."<br/>";
 // $day2 = "2019-03-01";
 // $diff = date_diff($day);
 // echo $diff;

 	$timein = date("Y-m-d H:i:s");
	$timeout = date("Y-m-d 20:00:00");
	$totaltime = $timein->diff($timeout);
	echo $totaltime;
 ?>

// ---------------------Timeline image upload---------------------------------------------- 

	// send data to the database
		// $sendentry=mysqli_query($conn, "UPDATE timeline_entries SET day_no='$dno', image='$tlephotopath', description='$desc', NOW() WHERE tle_id='$tlentid'");

      // INSERT INTO timeline_entries(day_no, image, description, last_update, timeline_id) VALUES('$dno','$tlephotopath','$desc',NOW(),'$timelnid')");
   
	  //  check whether query executed or not
	  // if(!$sendentry){
	  //   $_SESSION['error'] = "Saving error. Please try again later.!";
	    // header('Location: update-tl-entry.php?tlid='.$tlentryid);
     //  echo "yy";
	    // }
	    // else {
	    //   $_SESSION['success'] = "Timeline entry has been updated successfully.!";
	      // header('Location: add-tl-entry.php?tlid='.$timelnid);
        // echo "uu";
	    // }

 		// close database connection



 		<!-- ------------notification area starts------------ -->
                                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <!-- <li id="full-view"><i class="ti-fullscreen"></i></li> -->
                            <!-- <li id="full-view-exit"><i class="ti-zoom-out"></i></li> -->
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li> -->
                        </ul>
                    </div>
              <!-- ------------notification area ends------------ -->



 <!-- <div class="box-body"> -->
                                      <a href="" data-toggle="modal" data-target="#modal-ss"><?php echo $result['journal_name']; ?></a>

                                      <!-- <button type="button" name="submit" value="<?php ?>" class="btn btn-flat btn-outline-success mb-3" data-toggle="modal" data-target="#modal-<?php ?>">
                                        <?php echo $result['journal_name']; ?>
                                      </button> -->
                                    <!-- </div>      -->
                                    <!-- <?php echo $result['journal_name']; ?> --


$npostid=$_POST['nponm<?php echo $result['np_id']; ?>'];

    $npostcmt=$_POST['cmnt<?php echo $result['np_id']; ?>'];
    $npostimg=$_POST['cmntimg<?php echo $result['np_id']; ?>'];

    ===============================================================================

    function getRoleandShowDiv() {
        var role=(value:<?php echo $rolid; ?>;);
        alert("hhh");
    }

    <!-- value:<?php echo $rolid; ?>
    alert(role);
 -->
    getRoleandShowDiv();


    =========================

    <?php if($unseen_notif<0){ echo 0; } else { echo $unseen_notif; }?>

    =================================================================

    <?php
                                        $postreps="SELECT U.fname, U.lname, U.profile_image, R.npr_description, R.npr_image FROM users U, normal_posts P, np_replies R WHERE R.user_id=U.user_id AND R.np_id=P.np_id AND P.np_id=$result[np_id]";  
                                        $modalqry = mysqli_query($conn, $postreps);
                                        
                                        if (!$modalqry) {
                                          die ('SQL Error: ' . mysqli_error($conn));
                                        }
            
                                        while ($result = mysqli_fetch_array($modalqry)) {
                                          $userimg=$result['profile_image'];
                                          $usernm=$result['fname']." ".$result['lname'];
                                          $comm=$result['npr_description'];
                                          $img=$result['npr_image'];
                                        ?>

                                        <tr>
                                          <td><img src="../<?php echo $userimg;?>" alt="" width=80px></td>
                                          <td><?php echo $usernm;?></td>
                                          <td><?php echo $comm;?></td>
                                          <td><img src="<?php echo $img;?>" alt="--" width=200px></td>
                                        </tr>
                                        <?php } ?>  


data-id="<?php echo $timeline['timeline_id']; ?>"


<a href="javascript:void(0);" data-href="getContent.php?id=1" class="openPopup">About Us</a>


<a href="#" data-toggle="modal" data-target="#viewtls" data-id="<?php echo $timeline['timeline_id']; ?>"><i class="fa fa-newspaper-o"></i></a>


data: [{        
        type: "column",
        dataPoints: [
        { x: 10, y: 171 },
        { x: 20, y: 155},
        { x: 30, y: 150 },
        { x: 40, y: 165 },
        { x: 50, y: 195 },
        { x: 60, y: 168 },
        { x: 70, y: 128 },
        { x: 80, y: 134 },
        { x: 90, y: 114}
        ]
      },
      {        
        type: "column",
        dataPoints: [
        { x: 10, y: 71 },
        { x: 20, y: 55},
        { x: 30, y: 50 },
        { x: 40, y: 65 },
        { x: 50, y: 95 },
        { x: 60, y: 68 },
        { x: 70, y: 28 },
        { x: 80, y: 34 },
        { x: 90, y: 14}
        ]
      }        
      ]