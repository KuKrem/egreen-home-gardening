<?php
  session_start();

  if (isset($_SESSION['id'])) {
    header('Location: dashboard/index.php');
    exit;
  }
  // session_destroy();
  // session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.bt.css">
   

    <!-- Page title -->
    <title>Registration</title>
  </head>

  <body>
    <div class="row">
      <div class="egreen">
        <div class="logo"><img src="images/egreen-log.png"></div>
        <div class="sitename">E GREEN</div>
      </div>
    </div>

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
<!-- ------------------------submission status display messaage------------------------ -->

    <div class="container">
      <form class="form-horizontal" name="regform" id="regform1" method="post" action="register-save.php" enctype="multipart/form-data">
        
        <!-- displaying topic -->
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="col-md-1"></div>
            <h2>Register New User</h2>
            <hr>
          </div>
        </div>

<!-- --------------------------first name--------------------------------------- -->
        <div class="row">
          <!-- for first name lable -->
          <div class="col-md-3 field-label-responsive">
            <label for="firstname">First Name</label>
          </div>
          
          <!-- for first name icon and text box -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" title="First name required" data-placement="top">
              </div>
            </div>
          </div>
            
          <!-- for display error/valid message for first name -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtfname"></span>
            </div>
          </div>
        </div>
<!-- ----------------------------first name----------------------------------------- -->

<!-- ----------------------------last name------------------------------------------ -->
        <div class="row">
          <!-- fpr last name lable -->
          <div class="col-md-3 field-label-responsive">
            <label for="lastname">Last Name</label>
          </div>
            
          <!-- for last name icon and text box -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" title="Last name required" data-placement="top">
              </div>
            </div>
          </div>

          <!-- for display error/valid message for last name -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtlname"></span>
            </div>
          </div>
        </div>
<!-- ----------------------------last name------------------------------------------ -->

<!-- ----------------------------username-------------------------------------------- --> 
        <div class="row">
          <!-- fpr username lable -->
          <div class="col-md-3 field-label-responsive">
            <label for="username">Username</label>
          </div>

          <!-- for username icon and text box -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-at"></i></div>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" title="Username required" data-placement="top">
              </div>
            </div>
          </div>

          <!-- for display error/valid message for username -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtuname"></span>
            </div>
          </div>
        </div>
<!-- ----------------------------username-------------------------------------------- -->

<!-- ----------------------------password-------------------------------------------- -->
        <div class="row">
          <!-- for password lable -->
          <div class="col-md-3 field-label-responsive">
            <label for="password">Password</label>
          </div>

          <!-- for password icon and text box -->
          <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" title="Password required" data-placement="top">
              </div>
            </div>
          </div>

          <!-- for display error/valid message for password -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtpass"></span>
            </div>
          </div>
        </div>
<!-- ----------------------------password------------------------------------------- -->

<!-- -----------------------confirm password---------------------------------------- -->
        <div class="row">
          <!-- for confirm password lable -->
          <div class="col-md-3 field-label-responsive">
            <label for="conf-password">Confirm Password</label>
          </div>

          <!-- for password-confirmation icon and text box -->
          <div class="col-md-6" id="conpass">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-repeat"></i></div>
                <input type="password" name="password-confirmation" class="form-control" id="confpass" placeholder="Password" title="Confirm password required" data-placement="top">
              </div>
            </div>
          </div>

          <!-- for display error/valid message for password confirmation -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtconfpass"></span>
            </div>
          </div>
        </div>
<!-- -----------------------confirm password---------------------------------------- -->

<!-- ------------------------------------planter------------------------------------ -->
        <div class="row">
          <!-- lable for planter checkbox -->
          <div class="col-md-3 field-label-responsive">
            <label for="password">Select Role (Planter)</label>
          </div>

          <!-- checkbox for role planter -->
          <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-leaf"></i></div>
                <label class="customcheck">Planter
                  <input type="checkbox" name="user[]" value="1" id="chkPla" title="Select at least one role" data-placement="right">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
<!-- ------------------------------------planter------------------------------------ -->

<!-- --------------------------------instructor------------------------------ -->
        <div class="row">
          <!-- lable for instructor checkbox -->
          <div class="col-md-3 field-label-responsive">
            <label for="password">Select Role (Instructor)</label>
          </div>

          <!-- checkbox for role instructor -->
          <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-user-md"></i></div>
                <label class="customcheck">Instructor
                  <input type="checkbox" id="chkIns" name="user[]" value="2" title="Select at least one role" title="Select at least one role" data-placement="right">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>  
        </div>
  
        <div class="row" id="exIns">
          <!-- lable for instructor experience -->
          <div class="col-md-3 field-label-responsive">
            <label for="insworkexp">Experience</label>
          </div>

          <!-- textbox for instructor experince -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-line-chart"></i></div>
                <input type="text" name="insworkexp" class="form-control" id="insworkexp" placeholder="Number of years">
              </div>
            </div>
          </div>

          <!-- for display error/valid message for instructor experience -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtinsexp"></span>
            </div>
          </div>
        </div>

        <div class="row" id="certIns">
          <!-- lable for instructor certificate -->
          <div class="col-md-3 field-label-responsive">
            <label for="inscerti">Certificate</label>
          </div>

          <!-- for upload instructor certificate image -->
          <!-- <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-certificate"></i></div>
                <div class="custom-file">
                  <input type="file" id="inscertimg" name="inscertimg" title="Certificate required" data-placement="right">
                  <label class="custom-file-label" for="inscertimg">Choose file</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
              </div>
            </div>
          </div>
 -->
          <!--  -->
           <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-certificate"></i></div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inscertimg" name="inscertimg">
                  <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>

              </div>
            </div>
          </div>
          <!--  -->

          <!-- for display error/valid message for instructor certificate -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtinscert"></span>
            </div>
          </div>
        </div>
<!-- --------------------------------instructor------------------------------ -->

<!-- --------------------------------shopkeeper------------------------------ -->
        <div class="row">
          <!-- lable for shopkeeper checkbox -->
          <div class="col-md-3 field-label-responsive">
            <label for="password">Select Role (Shopkeeper)</label>
          </div>

          <!-- checkbox for role shopkeeper -->
          <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-balance-scale"></i></div>
                <label class="customcheck">Shopkeeper
                  <input type="checkbox" id="chkShop" name="user[]" value="3" title="Select at least one role" title="Select at least one role" data-placement="right">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="row" id="exShop">
          <!-- lable for shopkeeper experience -->
          <div class="col-md-3 field-label-responsive">
            <label for="showorkexp">Experience</label>
          </div>

          <!-- textbox for shopkeeper experince -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-line-chart"></i></div>
                <input type="text" name="showorkexp" class="form-control" id="showorkexp" placeholder="Number of years">
              </div>
            </div>
          </div>

          <!-- for display error/valid message for shopkeeper experience -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtshoexp"></span>
            </div>
          </div>
        </div>

        <div class="row" id="certShop">
          <!-- lable for shopkeeper certificate -->
          <div class="col-md-3 field-label-responsive">
            <label for="shocerti">Certificate</label>
          </div>

          <!-- for upload shopkeeper certificate image -->
          <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-certificate"></i></div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="shocertimg" name="shocertimg">
                  <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>

              </div>
            </div>
          </div>

          <!-- for display error/valid message for shopkeeper certificate -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txtshocert"></span>
            </div>
          </div>
        </div>
<!-- --------------------------------shopkeeper------------------------------ -->

<!-- ----------------------------------helper-------------------------------- -->

        <div class="row">
          <!-- lable for helper checkbox -->
          <div class="col-md-3 field-label-responsive">
            <label for="password">Select Role (Helper)</label>
          </div>

          <!-- checkbox for role helper -->
          <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-header"></i></div>
                <label class="customcheck">Helper
                  <input type="checkbox" id="chkHelp" name="user[]" value="4" title="Select at least one role" title="Select at least one role" data-placement="right">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="row" id="exHelp">
          <!-- lable for helper experience -->
          <div class="col-md-3 field-label-responsive">
            <label for="helpworkexp">Experience</label>
          </div>

          <!-- textbox for helper experince -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-line-chart"></i></div>
                <input type="text" name="helpworkexp" class="form-control" id="helpworkexp" placeholder="Number of years">
              </div>
            </div>
          </div>

          <!-- for display error/valid message for helper experience -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txthelpexp"></span>
            </div>
          </div>
        </div>

        <!-- lable for helper certificate -->
        <div class="row" id="certHelp">
          <div class="col-md-3 field-label-responsive">
            <label for="helpcerti">Certificate</label>
          </div>

          <!-- for upload helper certificate image -->
          <div class="col-md-6">
            <div class="form-group has-danger">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-certificate"></i></div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="helpcertimg" name="helpcertimg">
                  <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
              </div>
            </div>
          </div>

          <!-- for display error/valid message for helper certificate -->
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span id="txthelcert"></span>
            </div>
          </div>
        </div>
<!-- ----------------------------------helper-------------------------------- -->

        <!-- button for submitting entered data -->
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <button type="submit" form="regform" class="btn btn-info" name="regbutton" id="regbutton"><i class="fa fa-user-plus"></i> Register</button>
          </div>
        </div>
      </form>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div>
            <span>Already have account?</span>
            <button class="btn btn-info" name="login" id="login"><i class="fa fa-sign-in"></i> Login</button> |
            <a href="index.php" class="text-info">Site</a>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/regValidate.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.bt.min.js"></script>
</html>