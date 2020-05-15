<?php 
  session_start();
  include('check-session-all.php');
  include('../inc/dbconnection.php');
  // include('check-session-planter.php');
  // $rolid=$_SESSION["log"];
 ?>
<!doctype html>
<html class="no-js" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EGREEN Dashboard</title>
    <link rel="icon" type="image/ico" href="assets/images/icon/green-plant-vector.jpg"/>
    <!-- <link rel="icon" type="image/ico" href="images/images.png" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>    
  </head>

  <body>
    <input type="text" id="rolectch" value="<?php echo $rolid; ?>" hidden>
    <!-- <p hidden id="rolectch"></p> -->
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
                  <li class="active">
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
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Dashboard</span></li>
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
          <!-- sales report area start -->
          <div class="sales-report-area mt-5 mb-5">

            <div class="row mt-5 mb-5" id="adminhead">
              <div class="col-12">
                <div class="card" style="background-color:greenyellow">
                  <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                      <h4 class="header-title mb-0">Administrator Area</h4>                              
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- iframe area starts -->
            <div class="row mt-5 mb-5" id="admin1">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                      <h4 class="header-title mb-0">Number of Users in each Role ID</h4>                     
                    </div>
                    <div class="market-status-table mt-4">
                      <div class="table-responsive">
                        <iframe src="charts/chart5.php" height="370" width="900" frameBorder="0"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- iframe area ends -->

            <!-- div row area 1 for administrator -->
            <div class="row" id="check1">
              <div class="col-md-4">
                <div class="single-report mb-xs-30">
                  <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">All Journals</h4>
                      <?php
                        $getnojns="SELECT * FROM journals WHERE status=1";
                        $number=mysqli_query($conn, $getnojns);
                        $num=mysqli_num_rows($number);
                        // echo $number;
                        // die();
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Active</h4>
                      <?php
                        $getnojns="SELECT * FROM journals WHERE is_closed=0";
                        $number=mysqli_query($conn, $getnojns);
                        $num=mysqli_num_rows($number);
                        // echo $number;
                        // die();
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Closed</h4>
                      <?php
                        $getnojns="SELECT * FROM journals WHERE is_closed=1";
                        $number=mysqli_query($conn, $getnojns);
                        $num=mysqli_num_rows($number);
                        // echo $number;
                        // die();
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>                    
                  </div>
                  <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                </div>
              </div>

              <div class="col-md-4">
                <div class="single-report mb-xs-30">
                  <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa fa-calendar"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">All Timelines</h4>
                      <?php
                        $getnojns="SELECT * FROM timelines WHERE status=1";
                        $number=mysqli_query($conn, $getnojns);
                        $num=mysqli_num_rows($number);
                        // echo $number;
                        // die();
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>                                     
                  </div>
                  <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                </div>                
                <p> </p>
                <div class="single-report mb-xs-30">
                  <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa fa-pagelines"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">All Crops</h4>
                      <?php
                        $getnocrops="SELECT * FROM crops WHERE status=1";
                        $number=mysqli_query($conn, $getnocrops);
                        $num=mysqli_num_rows($number);
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>                                     
                  </div>
                  <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                </div>
              </div>

              <div class="col-md-4">
                <div class="single-report">
                  <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">All Users</h4>
                      <?php
                        $getnojns="SELECT * FROM users WHERE status=1";
                        $number=mysqli_query($conn, $getnojns);
                        $num=mysqli_num_rows($number);
                        // echo $number;
                        // die();
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Approved</h4>
                      <?php
                        $getnojns="SELECT * FROM users WHERE is_approved=1";
                        $number=mysqli_query($conn, $getnojns);
                        $num=mysqli_num_rows($number);
                        // echo $number;
                        // die();
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Pending</h4>
                      <?php
                        $getnojns="SELECT * FROM users WHERE is_approved=0";
                        $number=mysqli_query($conn, $getnojns);
                        $num=mysqli_num_rows($number);
                        // echo $number;
                        // die();
                      ?>
                      <p><?php echo $num; ?></p>
                    </div>                    
                  </div>
                  <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                </div>
              </div>
            </div>
            <!-- div row area 1 for administrator -->
            
            <div class="card-body" id="checknew1"></div>           

            <!-- div row area 2 for administrator -->
            <div class="row" id="checknew2">
              <div class="col-md-4">
                <div class="single-report mb-xs-30">                        
                  <div class="adjust1 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Instructor Structure</h4>                    </div>
                  </div>
                  <iframe src="charts/chart7.php" height="240" frameBorder="0"></iframe>
                </div>
              </div>

              <div class="col-md-4">
                <div class="single-report mb-xs-30">
                  <div class="adjust1 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Shopkeeper Structure</h4>
                    </div>
                  </div>
                  <iframe src="charts/chart8.php" height="240" frameBorder="0"></iframe>
                </div>
              </div>

              <div class="col-md-4">
                <div class="single-report">
                  <div class="adjust1 mb-3">
                    <div class="s-report-title d-flex justify-content-between">
                      <h4 class="header-title mb-0">Helper Structure</h4>
                    </div>
                  </div>
                  <iframe src="charts/chart9.php" height="240" frameBorder="0"></iframe>
                </div>
              </div>
            </div>
            <!-- div row area 2 for administrator -->
          </div>
          <!-- sales report area end -->
        
        <!--  -->
        <!--  -->

          <!-- sales report area start -->
          <div class="sales-report-area mt-5 mb-5">

            <div class="row mt-5 mb-5" id="planterhead">
              <div class="col-12">
                  <div class="card" style="background-color:greenyellow">
                      <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                              <h4 class="header-title mb-0">Planter Area</h4>
                              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- div row area 1 for administrator -->
                  <div class="row" id="check2">                    
                    <!-- <div class="col-md-4">
                      <div class="single-report mb-xs-30">                        
                        <div class="s-report-inner pr--20 pt--30 mb-3">

                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales1" height="100"></canvas>
                      </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                      <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin Dash</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                              <h2>$ 4567809,987</h2>
                              <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales2" height="100"></canvas>
                      </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                      <div class="single-report">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-eur"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Euthorium</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales3" height="100"></canvas>
                      </div>
                    </div> -->
                  </div>
                  <!-- div row area 1 -->
                </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">

                  <div class="row mt-5 mb-5" id="instructorhead">
                    <div class="col-12">
                        <div class="card" style="background-color:greenyellow">
                            <div class="card-body">
                  <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Instructor Area</h4>
                                    
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                  <!-- div row area 1 for administrator -->
                  <div class="row" id="check3">


                    
                    <!-- <div class="col-md-4">
                      <div class="single-report mb-xs-30">

                        
                        <div class="s-report-inner pr--20 pt--30 mb-3">

                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales1" height="100"></canvas>
                      </div>
                    </div> -->

                   <!--  <div class="col-md-4">
                      <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin Dash</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                              <h2>$ 4567809,987</h2>
                              <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales2" height="100"></canvas>
                      </div>
                    </div> -->

                   <!--  <div class="col-md-4">
                      <div class="single-report">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-eur"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Euthorium</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales3" height="100"></canvas>
                      </div>
                    </div> -->
                  </div>
                  <!-- div row area 1 -->
                </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">

                  <div class="row mt-5 mb-5" id="shopkeeperhead">
                    <div class="col-12">
                        <div class="card" style="background-color:greenyellow">
                            <div class="card-body">
                  <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Shopkeeper Area</h4>
                                    
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                  <!-- div row area 1 for administrator -->
                  
                  <div class="row" id="check4">


                    
                <!--     <div class="col-md-4">
                      <div class="single-report mb-xs-30">

                        
                        <div class="s-report-inner pr--20 pt--30 mb-3">

                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales1" height="100"></canvas>
                      </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                      <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin Dash</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                              <h2>$ 4567809,987</h2>
                              <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales2" height="100"></canvas>
                      </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                      <div class="single-report">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-eur"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Euthorium</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales3" height="100"></canvas>
                      </div>
                    </div>
                  </div> -->
                  <!-- div row area 1 -->
                <!-- </div> -->
                <!-- sales report area end -->
              </div>

                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">

                  <div class="row mt-5 mb-5" id="helperhead">
                    <div class="col-12">
                      <div class="card" style="background-color:greenyellow">
                        <div class="card-body">
                          <div class="d-sm-flex justify-content-between align-items-center">
                            <h4 class="header-title mb-0">Helper Area</h4>                                    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- div row area 1 for administrator -->
                  <!-- <div class="row" id="check5">

                    
                    <div class="col-md-4">
                      <div class="single-report mb-xs-30">

                        
                        <div class="s-report-inner pr--20 pt--30 mb-3">

                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales1" height="100"></canvas>
                      </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                      <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-btc"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin Dash</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                              <h2>$ 4567809,987</h2>
                              <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales2" height="100"></canvas>
                      </div>
                    </div> -->
<!-- 
                    <div class="col-md-4">
                      <div class="single-report">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                          <div class="icon"><i class="fa fa-eur"></i></div>
                          <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Euthorium</h4>
                            <p>24 H</p>
                          </div>
                          <div class="d-flex justify-content-between pb-2">
                            <h2>$ 4567809,987</h2>
                            <span>- 45.87</span>
                          </div>
                        </div>
                        <canvas id="coin_sales3" height="100"></canvas>
                      </div>
                    </div> -->
                  </div>
                  <!-- div row area 1 -->
                </div>
                <!-- sales report area end -->

                <!-- overview area start -->
                <!-- <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Overview</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Coin Distribution</h4>
                                <div id="coin_distribution"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- overview area end -->

                <!-- market value area start -->
                <!-- <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Market Value And Trends</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                        <table class="dbkit-table">
                                            <tr class="heading-td">
                                                <td class="mv-icon">Logo</td>
                                                <td class="coin-name">Coin Name</td>
                                                <td class="buy">Buy</td>
                                                <td class="sell">Sells</td>
                                                <td class="trends">Trends</td>
                                                <td class="attachments">Attachments</td>
                                                <td class="stats-chart">Stats</td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon/market-value/icon1.png" alt="icon">
                                                </td>
                                                <td class="coin-name">Dashcoin</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart"></canvas>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon">
                                                    <div class="mv-icon"><img src="assets/images/icon/market-value/icon2.png" alt="icon"></div>
                                                </td>
                                                <td class="coin-name">LiteCoin</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-down-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart2"></canvas>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon">
                                                    <div class="mv-icon"><img src="assets/images/icon/market-value/icon3.png" alt="icon"></div>
                                                </td>
                                                <td class="coin-name">Euthorium</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart3"></canvas>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon">
                                                    <div class="mv-icon"><img src="assets/images/icon/market-value/icon4.png" alt="icon"></div>
                                                </td>
                                                <td class="coin-name">Bitcoindash</td>
                                                <td class="buy">30% <img src="assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart4"></canvas>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- market value area end -->

                <!-- row area start -->
                <!-- <div class="row">
                     Live Crypto Price area start -->
                    <!-- <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Live Crypto Price</h4>
                                <div class="cripto-live mt-5">
                                    <ul>
                                        <li>
                                            <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$876909.00</span></li>
                                        <li>
                                            <div class="icon l">l</div> Litecoin<span><i class="fa fa-long-arrow-up"></i>$29780.00</span></li>
                                        <li>
                                            <div class="icon d">d</div> Dashcoin<span><i class="fa fa-long-arrow-up"></i>$13276.00</span></li>
                                        <li>
                                            <div class="icon b">b</div> Bitcoindash<span><i class="fa fa-long-arrow-down"></i>$5684.890</span></li>
                                        <li>
                                            <div class="icon e">e</div> Euthorium<span><i class="fa fa-long-arrow-down"></i>$3890.98</span></li>
                                        <li>
                                            <div class="icon t">b</div> Tcoin<span><i class="fa fa-long-arrow-up"></i>$750.789</span></li>
                                        <li>
                                            <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$325.037</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Live Crypto Price area end -->
                    <!-- trading history area start -->
                   <!--  <div class="col-lg-8 mt-sm-30 mt-xs-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Trading History</h4>
                                    <div class="trd-history-tabs">
                                        <ul class="nav" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div class="trad-history mt-4">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <tr class="heading-td">
                                                        <td>Trading ID</td>
                                                        <td>Time</td>
                                                        <td>Status</td>
                                                        <td>Amount</td>
                                                        <td>Last Trade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78211</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$758.90</td>
                                                        <td>$05245.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>782782</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$77878.90</td>
                                                        <td>$7778.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$0945.090</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <tr class="heading-td">
                                                        <td>Trading ID</td>
                                                        <td>Time</td>
                                                        <td>Status</td>
                                                        <td>Amount</td>
                                                        <td>Last Trade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8964978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$445.90</td>
                                                        <td>$094545.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>89675978</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$78.90</td>
                                                        <td>$074852945.090</td>
                                                    </tr>
                                                    <tr>
                                                        <td>78527878</td>
                                                        <td>4.00 AM</td>
                                                        <td>Pending</td>
                                                        <td>$0768.90</td>
                                                        <td>$65465.090</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                  <!-- trading history area end  -->
                </div>
                <!-- row area end -->

                <!-- <div class="row mt-5">
                     latest news area start -->
                    <!-- <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Latest News</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- latest news area end -->
                    <!-- exchange area start -->
                    <!-- <div class="col-xl-6 mt-md-30 mt-xs-30 mt-sm-30">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Exchange</h4>
                                <div class="exhcange-rate mt-5">
                                    <form action="#">
                                        <div class="input-form">
                                            <input type="text" value="0.76834">
                                            <span>BTC</span>
                                        </div>
                                        <div class="exchange-devider">To</div>
                                        <div class="input-form">
                                            <input type="text" value="5689.846">
                                            <span>USD</span>
                                        </div>
                                        <div class="exchange-btn">
                                            <button type="submit">Exchange Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- exchange area end -->
                <!-- </div> --> 
                <!-- row area start-->
            <!-- </div> -->

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
    <script src="assets/js/reportshow.js"></script>
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