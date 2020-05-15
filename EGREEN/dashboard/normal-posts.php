<?php 
  session_start();
  include('check-session-all.php');

?>
<!doctype html>
<html class="no-js" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Normal Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="icon" type="image/ico" href="assets/images/icon/green-plant-vector.jpg"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/jquery-confirm.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  </head>

  <body>
    <input type="text" id="rolectch" value="<?php echo $rolid; ?>" hidden>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
      <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
      
      <!-- sidebar menu area start -->
      <div class="sidebar-menu">
        <div class="sidebar-header">
          <div class="logo">
            <a href="#"><img src="assets/images/icon/egreen-log.png" alt="logo"></a>
            <span class="btn btn-success">EGREEN</span>
          </div>
        </div>
            
        <div class="main-menu">
          <div class="menu-inner">
            <nav>
              <ul class="metismenu" id="menu">

                <!-- <li class="active"> -->
                  <li>
                    <a href="index.php">
                      <i class="ti-map-alt"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>

                  <li id="addcropmi">
                    <a href="add-crop.php">
                      <i class="ti-map-alt"></i>
                      <span>Add Crop</span>
                    </a>
                  </li>

                  <li id="addregionmi">
                    <a href="add-region.php">
                      <i class="ti-map-alt"></i>
                      <span>Add Region</span>
                    </a>
                  </li>

                  <li id="cretimelinemi">
                    <a href="create-timeline.php">
                      <i class="ti-map-alt"></i>
                      <span>Create Timeline</span>
                    </a>
                  </li>

                  <li id="mytimelinesmi">
                    <a href="my-timelines.php">
                      <i class="ti-map-alt"></i>
                      <span>My Timelines</span>
                    </a>
                  </li>

                  <li id="crejournalmi">
                    <a href="create-journal.php">
                      <i class="ti-map-alt"></i>
                      <span>Create Journal</span>
                    </a>
                  </li>

                  <li id="myjournalsmi">
                    <a href="my-journals.php">
                      <i class="ti-map-alt"></i>
                      <span>My Journals</span>
                    </a>
                  </li>

                  <li class="active">
                    <a href="normal-posts.php">
                      <i class="ti-map-alt"></i>
                      <span>Normal Posts</span>
                    </a>
                  </li>

                  <li>
                    <a href="ins-needy-posts.php">
                      <i class="ti-map-alt"></i>
                      <span>Instructions Needy Posts</span>
                    </a>
                  </li>

                  <li id="viewcropsmi">
                    <a href="view-crops.php">
                      <i class="ti-map-alt"></i>
                      <span>View Crops</span>
                    </a>
                  </li>

                  <li id="myshopmi">
                    <a href="my-shop.php">
                      <i class="ti-map-alt"></i>
                      <span>My Shop</span>
                    </a>
                  </li>

                <li id="creshopmi">
                  <a href="create-shop.php">
                    <i class="ti-map-alt"></i>
                    <span>Create Shop</span>
                  </a>
                </li>

                <li id="allusersmi">
                  <a href="users.php">
                    <i class="ti-map-alt"></i>
                    <span>All Users</span>
                  </a>
                </li>

                <li>
                  <a href="shops.php">
                    <i class="ti-map-alt"></i>
                    <span>Shops</span>
                  </a>
                </li>

                <li id="selectregmi">
                  <a href="select-region.php">
                    <i class="ti-map-alt"></i>
                    <span>Select Region</span>
                  </a>
                </li>

                <li>
                  <a href="helpers.php">
                    <i class="ti-map-alt"></i>
                    <span>Helpers</span>
                  </a>
                </li>

                <li id="ihelpermi">
                  <a href="ihelper.php">
                    <i class="ti-map-alt"></i>
                    <span>I Helper</span>
                  </a>
                </li>

                <li><a href="#">Item Closing</a></li>
                        
              </ul>
            </nav>
          </div>
        </div>
      </div>

        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
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
                            <li class="dropdown">
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
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Normal Posts</h4>
                    <ul class="breadcrumbs pull-left">
                      <li><a href="index.php">Dashboard</a></li>
                      <li><span>Home</span></li>
                    </ul>
                  </div>
                </div>
                    
                <div class="col-sm-6 clearfix">
                  <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                      <?php echo $curUser; ?>
                      <i class="fa fa-angle-down"></i>
                    </h4>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Message</a>
                      <a class="dropdown-item" href="#">Settings</a>
                      <a class="dropdown-item" href="../logout.php">Log Out</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- page title area end -->

<!-- -----------------------------post viewing area starts----------------------------- -->
                <div class="main-content-inner">
<!-- ----------------------------------first post starts---------------------------------- -->
                  <?php
                  include('../inc/dbconnection.php');                 
                 
                  $getnps=mysqli_query($conn, "SELECT N.np_id, N.created_date, E.jentry_id, E.je_descript, E.je_image, U.user_id, U.fname, U.lname FROM normal_posts N, journal_entries E, journals J, users U  WHERE E.jentry_id=N.jentry_id AND J.journal_id=E.journal_id AND U.user_id=J.user_id AND N.status=1 ORDER BY created_date DESC");                  

                  While($result=mysqli_fetch_array($getnps)) {
                  ?>
                  <div class="row" id="npdiv<?php echo $result['np_id']; ?>">
                    <div class="col-lg-8 offset-lg-2 mt-5">
                      <div class="card">
                        <div class="card-body">
                          <div class="media mb-5">
                            <img class="img-fluid mr-4" src="../images/user.png" width="80px" alt="image">
                            <div class="media-body">
                              <h4 class="mb-3"><?php echo $result['fname']." ".$result['lname']; ?></h4> 
                              <?php echo $result['created_date']; ?>
                            </div>
                          </div>
                          <!--  -->
<!-- ------------------------submission status display messaage------------------------ -->
                          <div class="row" id="status<?php echo $result['np_id']; ?>">
                            <div class="col-md-8 message">
                              <?php if (isset($_SESSION['success'])) { ?>
                                <div class="alert alert-success alert-dismissible fade show">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <?php
                                  echo $_SESSION['success'];
                                  unset($_SESSION['success']);
                                  ?>
                                </div>
                              <?php } ?>

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
                          <!--  -->
                          <div class="media">
                            <img class="img-fluid mr-4" src="<?php echo $result['je_image']; ?>" width="600px" alt="">
                          </div>
                          <div class="media-body">
                            <br><h4 class="mb-3">Description</h4>
                            <?php echo $result['je_descript']; ?>
                          </div>
                        </div>
                      </div>
                      <div>

                        <!-- commenting on posts starts -->
                        <form action="add-npc-save.php" method="post" id="cmntform<?php echo $result['np_id']; ?>" name="cmntfm" enctype="multipart/form-data">

                          <input class="form-control" type="hidden" id="npoid<?php echo $result['np_id']; ?>" name="nponm" value="<?php echo $result['np_id']; ?>">

                          <input class="form-control" type="hidden" id="userid<?php echo $result['np_id']; ?>" name="user" value="<?php echo $id; ?>">

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Comment</span>
                            </div>
                            <textarea class="form-control" name="cmnt" id="cmntid<?php echo $result['np_id']; ?>" aria-label="Comment"></textarea>
                          </div>
                        
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="cmntimg" id="cmntimgid<?php echo $result['np_id']; ?>" set-to="blah<?php echo $result['np_id']; ?>">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>                       
                          </div>

                          <!-- show selected image starts -->
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">                              
                              <img id="blah<?php echo $result['np_id']; ?>" src="#" alt="Your image" width=200px />
                            </div>                                                  
                          </div>
                          <!-- show selected image ends -->

                          <a style="display:none;" id="removeImage<?php echo $result['np_id']; ?>" href="#">Remove Image</a>

                          <button type="button" class="btn btn-info btn-lg btn-block" id="cmntadd<?php echo $result['np_id']; ?>" name="cmntsubmit<?php echo $result['np_id']; ?>">Submit</button>
                        </form>
                        <!-- commenting on posts ends -->

                        <!-- comment form supportive jquery starts -->
                        <script>
                          $(document).ready(function(){

                            function readURL(input) {
                              if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                var div_id  = $(input).attr('set-to');
                                reader.onload = function (e) {
                                  $('#'+div_id).attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]);
                              }
                            }

                             $("#cmntimgid<?php echo $result['np_id']; ?>").change(function() {
                               readURL(this);
                               $("#removeImage<?php echo $result['np_id']; ?>").toggle(); // show remove link
                             });

                             $("#removeImage<?php echo $result['np_id']; ?>").click(function(e) {
                               e.preventDefault(); // prevent default action of link
                               $('#blah<?php echo $result['np_id']; ?>').attr('src', ""); //clear image src
                               $("#cmntimgid<?php echo $result['np_id']; ?>").val(""); // clear image input value
                               $("#removeImage<?php echo $result['np_id']; ?>").toggle(); // hide remove link.
                             });


                            $("#cmntimgid<?php echo $result['np_id']; ?>").change(function(){
                                readURL(this);
                            });                     

                            $("#cmntadd<?php echo $result['np_id']; ?>").click(function(){
                              // alert("jjj");
                              // reset code
                              // var npostid="npoid<?php echo $result['np_id']; ?>";
                              var npostid=$('#npoid<?php echo $result['np_id']; ?>').val();
                              var comentid=$('#cmntid<?php echo $result['np_id']; ?>').val();
                              var comentimg=$('#cmntimgid<?php echo $result['np_id']; ?>').val();
                              var imgsizetle = (comentimg != '' || comentimg != '') ? $('#cmntimgid<?php echo $result['np_id']; ?>')[0].files[0].size : 0;

                              var user=$('#userid<?php echo $result['np_id']; ?>').val();

                              // function for check journal entry images file type
                              function validateFileType(value) {
                                var idxDot = value.lastIndexOf(".") + 1;
                                var extFile = value.substr(idxDot, value.length).toLowerCase();
                                console.log(extFile);
                                if (extFile == "jpg" || extFile == "jpeg" || extFile == "png" || extFile == "gif") {
                                  return true;
                                } else {
                                    return false;
                                }
                              }

                              // validating journal entry image
                              function validateCmntImg() {
                                var imgsizetle = (comentimg != '' || comentimg != '') ? $('#cmntimgid<?php echo $result['np_id']; ?>')[0].files[0].size : 0;
                                
                                if(comentimg != null && comentimg != ''){
                                  if(!validateFileType(comentimg)){
                                    alert('Allowed file types are jpeg,jpg,png and gif');
                                    return false;
                                  }
                                  else if(validateFileType(comentimg) && imgsizetle > 2097152){
                                    alert('Max file size is 2Mb.');
                                    return false;
                                  }
                                  else {
                                    return true;
                                  }
                                }
                                else {
                                  return true;
                                }
                              }

                              if(comentid.length<5){
                                alert("Comment too short minimum length 5");
                                return false;
                              }
                              else if (comentid.length>300){
                                alert("Comment too short maximum length 300");
                                return false;
                              }
                              else if(validateCmntImg()){
                                $('#cmntform<?php echo $result['np_id']; ?>').submit();
                              }

                              // var a = npostid.val();
                              // var b = 
                              // alert(npostid+" "+comentid+" "+comentimg+" "+user);

                              // alert(npostid.val()+" "+comentid.val()+" "+comentimg.val()+" "+user.val());
                              
                            });
                          });
                          
                        </script>
                        <!-- comment form supportive jquery ends -->
                        

                        <!-- affected area starts -->                                            

                        <button type="button" name="comments" value="<?php echo $result['np_id'];?>" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modal-<?php echo $result['np_id'];?>">
                          <?php
                            $getnocomm=mysqli_query($conn, "SELECT * FROM np_replies WHERE np_id=$result[np_id]");
                            $num = mysqli_num_rows($getnocomm);
                            // $num=mysqli_query($conn,$getnocomm);
                            // While($result4=mysqli_fetch_array($getnocomm)) {
                            //  $num=$result4['']
                          ?>   
                          All comments - <?php echo $num; ?>
                        </button>

                          <div class="modal fade bd-example-modal-lg" id="modal-<?php echo $result['np_id'];?>">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">                              
                                <div class="modal-header">
                                  <h5 class="modal-title">All comments</h5>
                                  <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                  </button>                                            
                                </div>

                                <div class="modal-body">
                                  <div>               
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Profile Image</th>
                                          <th>Name</th>
                                          <th>Comment</th>
                                          <th>Image</th>
                                        </tr>
                                      </thead>
                                      <tbody>

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
                                      </tbody>                                                
                                    </table>
                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>           
                                </div>          
                              </div>          
                              <!-- /.modal-content -->

                            </div>        
                            <!-- /.modal-dialog -->

                          </div>                        
                        
                        <!-- affected area ends -->
                      </div>
                    </div>
                  </div>
                  <?php } ?>
<!-- ----------------------------------first post ends---------------------------------- -->
   
                </div>
<!-- -----------------------------post viewing area ends----------------------------- -->
        </div>
          <!-- main content area end -->
        
          <!-- footer area start-->
          <footer>
            <div class="footer-area">
              <p>© Copyright 2019. All right reserved. System by <a href="../../EGREEN/">EGREEN</a>.</p>
            </div>
          </footer>
          <!-- footer area end-->
        </div>
        
        <!-- page container area end -->
        <!-- offset area start -->
        <div class="offset-area">
          <div class="offset-close"><i class="ti-close"></i></div>
          <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <!-- <script src="assets/js/vendor/jquery-2.2.4.min.js"></script> -->
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/hidemenuitem.js"></script>
    <script src="assets/js/jquery-confirm.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>