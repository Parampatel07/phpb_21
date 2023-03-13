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
                              <h5 class="title mb--20">Forgot password</h5>
                              <p>Enter the email address you used when you joined and we’ll send you instructions to reset your password.</p>
                              <div class="summery-table-wrap">
                                   <form action="" method="post">
                                        <div class="">
                                             <label class="form-label">Enter your Email</label>
                                             <input class="form-control border " type="email" name="email" id="email" placeholder="Enter your email" required>
                                        </div>
                                        <div class="d-grid mt-5">
                                        <input type="submit" class="mt-3 btn" value="Send Mail" name="" id="">
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