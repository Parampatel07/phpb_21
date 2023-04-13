<?php
require_once("include/check_admin_login.php");
require_once("include/css.php");
?>
</head>

<body class="error-bg">
     <div class="login-img">
          <!-- GLOBAL-LOADER -->
          <div id="global-loader">
               <img src="theme/assets/images/loader.svg" class="loader-img" alt="Loader">
          </div>
          <div class="page">
               <div class="">
                    <!-- CONTAINER OPEN -->
                    <div class="col col-login mx-auto">
                         <div class="text-center">
                              <img src="theme/assets/images/brand/logo.png" class="header-brand-img" alt="">
                         </div>
                    </div>
                    <div class="container-login100">
                         <div class="row">
                              <div class="col-12 " style="width:450px;">
                                   <form class="card shadow-none" method="post" action="submit/admin_change_password.php">
                                        <div class="card-body">
                                             <div class="text-center">
                                                  <span class="login100-form-title">
                                                       Change Password
                                                  </span>
                                             </div>
                                             <?php
                                             require_once("include/message.php");
                                             ?>
                                             <div class="pt-3" id="forgot">
                                                  <div class="form-group">
                                                       <label class="form-label">Old Password</label>
                                                       <input class="form-control" placeholder="Enter current password" type="password" name="oldpassword" required>
                                                  </div>
                                                  <div class="form-group">
                                                       <label class="form-label">New Password</label>
                                                       <input class="form-control" placeholder="Enter new password" type="password" name="newpassword" required>
                                                  </div>
                                                  <div class="form-group">
                                                       <label class="form-label">Confirm Password</label>
                                                       <input class="form-control" placeholder="Enter New  password again" type="password" name="confirmpassword" required>
                                                  </div>
                                                  <div class="submit d-grid">
                                                       <button type="submit" class="btn btn-primary d-grid">Save Changes</button>
                                                  </div>
                                             </div>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
                    <!-- CONTAINER CLOSED -->
               </div>
          </div>
          <?php
          require_once("include/script.php");
          ?>

          </html>