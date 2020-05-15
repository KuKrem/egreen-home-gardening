<?php 
  session_start();
  include('check-session-instructor.php');
  // echo $id;
  // die();

?>
<!doctype html>
<html class="no-js" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Timelines</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico"> -->
    <link rel="icon" type="image/ico" href="assets/images/icon/green-plant-vector.jpg"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">    
    <!-- amchart css -->
    <!-- <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /> -->
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/export.css">
    <link rel="stylesheet" href="assets/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" href="assets/css/my-timelines.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
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

                  <li class="active" id="mytimelinesmi">
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

                  <li>
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
                    <h4 class="page-title pull-left">My Timelines</h4>
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

            <div class="main-content-inner">
              <div class="row">
                <div class="col-lg-6 col-ml-12">
                  <div class="row">

                    <!-- Textual inputs start -->
                    <div class="col-12 mt-5">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">My Timelines</h4>

                          <!-- Primary table start -->
                          <div class="data-tables datatable-primary">
                            <table id="dataTable2" class="text-center">
                              <thead class="text-capitalize bg-success">
                                <tr>
                                  <th>No</th>
                                  <th>Created on</th>
                                  <th>Crop</th>
                                  <th>View</th>
                                  <th>Add Entry</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>                              
                              <tbody>
                                <?php 
                                  include('../inc/dbconnection.php');
                                  $gettls = "SELECT timelines.*, crops.cropname FROM timelines INNER JOIN crops ON timelines.crop_id = crops.crop_id WHERE timelines.user_id=$id AND timelines.status=1";
                                  $tls = mysqli_query($conn,$gettls);
                                  foreach ($tls as $index => $timeline) {
                                ?>
                                <tr>
                                  <td><?php echo ++$index ?></td>
                                  <td><?php echo $timeline['created_on'] ?></td>
                                  <td><?php echo $timeline['cropname'] ?></td>

                                  <!-- view modal affected area -->
                                  <td>
                                    <button type="button" name="submit" value="<?php echo $timeline['timeline_id']; ?>" data-toggle="modal" data-target="#viewtls-<?php echo $timeline['timeline_id']; ?>">
                                        <i class="fa fa-newspaper-o"></i>
                                      </button>                             

                                    <!-- modal starts -->
                                    <div class="modal fade bd-example-modal-lg" id="viewtls-<?php echo $timeline['timeline_id']; ?>">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">                             
                                          <div class="modal-header">
                                            <h5 class="modal-title">Selected Timeline</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                              <span>&times;</span>
                                            </button>                                            
                                          </div>
                                          <?php 
                                            $a=$timeline['timeline_id'];
                                           ?>

                                        <div class="modal-body">
                                          <div>
                                         
                                            <table class="table-success">
                                              <thead>
                                                <tr>
                                                  <th class="fonttleth">Day Number</th>
                                                  <th class="fonttleth">Description</th>
                                                  <th class="fonttleth">Image</th>                                          
                                                </tr>
                                              </thead>
                                              <tbody>

                                                <?php
                                                // include('../inc/dbconnection.php');
                                                $tlentrs=mysqli_query($conn, "SELECT * FROM `timeline_entries` WHERE timeline_id=$a ORDER BY day_no ASC");
                                                While($result=mysqli_fetch_array($tlentrs)){
                                                  $dno=$result['day_no'];
                                                  $desc=$result['description'];
                                                  $img=$result['image'];
                                                ?>

                                                <tr>
                                                  <td><?php echo $dno;?></td>
                                                  <td><?php echo $desc;?></td>
                                                  <td><img src="<?php echo $img;?>" alt="" width=300px></td>
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
                                    <!-- modal ends -->

                                  </td>
                                  <!-- view modal affected area -->

                                  <td><a href="add-tl-entry.php?tlid=<?php echo $timeline['timeline_id'] ?>"><i class="fa fa-plus"></i></a></td>
                                  <td><a href=""><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                              <?php } ?>                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Primary table end -->
                  </div>
                </div>
              </div>
            </div>
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
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/responsive.bootstrap.min.js"></script>
    <script src="assets/js/hidemenuitem.js"></script>
    <script src="assets/js/my-tl-validate.js"></script>
    <script src="assets/js/hidemenuitem.js"></script>

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
