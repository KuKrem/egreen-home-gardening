<?php
  session_start();
  include('check-session-shopkeeper.php');
?>
<!doctype html>
<html class="no-js" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Shop</title>
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
    <link rel="stylesheet" href="assets/css/my-shop.css">
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

                  <li class="active" id="myshopmi">
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
                    <h4 class="page-title pull-left">My Shop</h4>
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

<!-- --------------------------my shop details starts-------------------------- -->
            <div class="main-content-inner">
              <div class="row">
                <div class="col-lg-6 col-ml-12">
                  <div class="row">

                    <!-- Textual inputs start -->
                    <div class="col-12 mt-5">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">Your shop's details</h4>

<!-- ------------------------submission status display messaage------------------------ -->
                          <div class="row">
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
<!-- ------------------------submission status display messaage-------------------------- -->

                          <!-- Primary table start -->
                          <div class="data-tables datatable-primary">
                            <table id="dataTabl" class="text-center table">
                              <thead class="text-capitalize bg-success">
                                <tr>
                                  <th>Name</th>
                                  <th>Address</th>
                                  <th>Telephone</th>
                                  <th>Is closed</th>
                                  <th>Edit</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  include('../inc/dbconnection.php');
                                  $getmyshop=mysqli_query($conn, "SELECT * FROM shops WHERE user_id=$id AND status=1 LIMIT 1");
                                  while($result=mysqli_fetch_array($getmyshop)){
                                ?>
                                <tr>
                                  <td><?php echo $result['shop_name']; ?></td>
                                  <td><?php echo $result['shop_address']; ?></td>
                                  <td><?php echo $result['telephone']; ?></td>
                                  <td><?php if($result['is_closed']==0){echo "No";}else{echo "Yes";} ?></td>
                                  <td><i class="fa fa-pencil-square-o"></i></td>
                                </tr>                                
                                <?php
                                $shp_id=$result['shop_id'];
                                 } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-danger btn-lg btn-block">Close your shop</button>
                    </div>
                    <!-- Primary table end -->

                    <!-- Add journal entry form starts -->
                    <div class="col-lg-6 col-ml-12">
                      <div class="row">
                        <!-- Textual inputs start -->
                          <div class="col-12 mt-5">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="header-title">Update shop items</h4>
                                <form id="additemfrmid" name="additem" action="add-item-save.php" method="post" enctype="multipart/form-data">
                                  <!-- <p class="text-muted font-14 mb-4">Created<code>Date</code> and <code>Time</code> automatically will be added by the system for you.</p> -->

                                  <p>In this version you can publish only crops that supported by the system</p>

                                  <input class="form-control" type="text" id="shopid" name="shop" value="<?php echo $shp_id; ?>" hidden>

                                  <div class="form-group">
                                    <label class="col-form-label">Select crop</label>
                                    <select class="form-control" id="cropid" name="cropnm">
                                      <option value="0">Select Crop</option>
                                      <?php 
                                        $getcrops=mysqli_query($conn, "SELECT * FROM crops WHERE status=1");
                                        while($result2=mysqli_fetch_array($getcrops)){
                                      ?>
                                      <option value="<?php echo $result2['crop_id'] ?>"><?php echo $result2['cropname'] ?></option>
                                      <?php } ?>                                      
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-form-label">Select type</label>
                                    <select class="form-control" id="itmnatid" name="itmnature">
                                      <option value="0">Select item nature</option>
                                      <?php 
                                        $getitmnaturs=mysqli_query($conn, "SELECT * FROM item_nature");
                                        while($result3=mysqli_fetch_array($getitmnaturs)){
                                      ?>
                                      <option value="<?php echo $result3['in_id'] ?>"><?php echo $result3['item_nature'] ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Unit price/Selling method</label>
                                    <input class="form-control" type="text" id="sellmethodid" name="sellmethod" placeholder="Rs30.00/pckt / Rs10.00/branch">
                                  </div>

                                  <div class="col-md-3 col-lg-6">
                                    <div class="form-control-feedback">
                                      <span id="txtsellmet"></span>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Upload an image</label>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">Upload an image</span>
                                      </div>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="shpitmimgid" name="shpitmimg">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="contain">
                                    <div class="alert"></div>
                                    <div id="img_contain">
                                      <img id="blah" align='middle' src="assets/images/author/author-img1.jpg" alt="your image" title=''/>
                                    </div>

                                    <!--input type='file' id="imgInp" /--->
                                    <!-- <div class="input-group"> 
                                      <div class="custom-file">
                                        <input type="file" id="inputGroupFile01" class="imgInp custom-file-input" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                      </div>
                                    </div> -->
                                  </div>



                                  <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="additem" id="additemid">Add</button>
                                </form>    
                              </div>
                            </div>
                          </div>
                          <!-- Textual inputs end -->
                        </div>
                      </div>
                    <!--  -->

                    <!-- Textual inputs start -->
                    <div class="col-12 mt-5">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">Shop items summary</h4>

                          <!-- Primary table start -->
                          <div class="data-tables datatable-primary">
                            <table id="dataTable2" class="text-center">
                              <thead class="text-capitalize bg-success">
                                <tr>
                                  <th>No</th>
                                  <th>Crop</th>
                                  <th>Type</th>
                                  <th>Price</th>
                                  <th>Image</th>
                                  <th>Is available</th>
                                  <th>Edit</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                  $getitems="SELECT I.si_id, I.si_image, I.si_sell_meth, I.availability, N.item_nature, C.cropname FROM shop_item I, shops S, users U, item_nature N, crops C WHERE I.shop_id=S.shop_id AND S.user_id=U.user_id AND I.crop_id=C.crop_id AND I.in_id=N.in_id AND U.user_id=1 AND S.shop_id=1";
                                  $items=mysqli_query($conn, $getitems);
                                  foreach ($items as $index => $item) {                        
                                 ?>
                                <tr>
                                  <td><?php echo ++$index;?></td>
                                  <td><?php echo $item['cropname'];?></td>
                                  <td><?php echo $item['item_nature'];?></td>
                                  <td><?php echo $item['si_sell_meth'];?></td>
                                  <th><img src="<?php echo $item['si_image'];?>" alt="-" width=100px></th>
                                  <td><?php if($item['availability']==1){echo "Yes";}else{echo "No";} ?></td>
                                  <td><a href="edit-item.php?itid=<?php echo $item['si_id'];?>"><i class="fa fa-pencil-square-o"></i></a></td>
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
    <script src="assets/js/my-shop-validate.js"></script>
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