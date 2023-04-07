<?php
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
                              <div class="col col-login mx-auto">
                                   <form class="card shadow-none" method="post">
                                        <div class="card-body">
                                             <div class="text-center">
                                                  <span class="login100-form-title">
                                                       Forgot Password
                                                  </span>
                                                  <p class="text-muted">Enter the email address registered on your account</p>
                                             </div>
                                             <div class="pt-3" id="forgot">
                                                  <div class="form-group">
                                                       <label class="form-label">E-Mail</label>
                                                       <input class="form-control" placeholder="Enter Your Email" type="email">
                                                  </div>
                                                  <div class="submit">
                                                       <a class="btn btn-primary d-grid" href="index.html">Submit</a>
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