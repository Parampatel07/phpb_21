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
                              <h5 class="title mb--20">Change Password</h5>
                              <div class="summery-table-wrap">
                                   <form action="" method="post">
                                        <div class="">
                                             <label class="form-label">Enter your Old password</label>
                                             <input class="form-control border " type="password" name="oldpassword" id="oldpassword" placeholder="Enter your oldpassword" required>
                                        </div>
                                        <div class=" mt-3">
                                             <label class="form-label">Enter New Password</label>
                                             <input class="form-control border " type="password" name="newpassword" id="newpassword" placeholder="Enter your newpassword" required>
                                        </div>
                                        <div class=" mt-3">
                                             <label class="form-label">Enter Confirm Password</label>
                                             <input class="form-control border " type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter your confirmpassword" required>
                                        </div>
                                        <div class="d-grid mt-5">
                                        <input type="submit" class="mt-3 btn" value="Save Changes" name="" id="">
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