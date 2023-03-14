<?php
require_once("include/css.php");
?>
</head>

<body class="sticky-header">
     <main class="main-wrapper">
          <div class="container my-5">
               <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6">
                         <div class="axil-order-summery order-checkout-summery">
                              <h5 class="title mb--20">Login to eTrade</h5>
                              <div class="summery-table-wrap">
                                   <form action="" method="post">
                                        <div class="">
                                             <label class="form-label">Enter your Email</label>
                                             <input class="form-control border " type="email" name="email" id="email" placeholder="Enter your email" required>
                                        </div>
                                        <div class=" mt-3">
                                             <label class="form-label">Enter your Password</label>
                                             <input class="form-control border " type="password" name="password" id="password" placeholder="Enter your password" required>
                                        </div>
                                        <div class="text-end">
                                             <a href="forgot_password.php">Forgot Password?</a>
                                        </div>
                                        <div class="d-grid mt-5">
                                        <input type="submit" class="mt-3 btn" value="Login in" name="" id="">
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </main>
     <?php
     require_once("include/script.php");
     ?>