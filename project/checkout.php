<?php
require_once("include/css.php");
?>
</head>

<body class="sticky-header">
     <?php
     require_once("include/navbar.php");
     ?>
     <main class="main-wrapper">
          <!-- Start Checkout Area  -->
          <div class="axil-checkout-area axil-section-gap">
               <div class="container">
                    <form action="#">
                         <div class="row">
                              <div class="col-lg-6">
                                   <div class="axil-checkout-notice">
                                        <div class="axil-toggle-box">
                                             <div class="toggle-bar"><i class="fas fa-user"></i> Returning customer? <a href="login.php" class="toggle-btn">Click here to login </a>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="axil-checkout-billing">
                                        <h4 class="title mb--40">Billing details</h4>
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  <div class="form-group">
                                                       <label>First Name <span>*</span></label>
                                                       <input type="text" id="first-name" placeholder="Adam">
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <div class="form-group">
                                                       <label>Last Name <span>*</span></label>
                                                       <input type="text" id="last-name" placeholder="John">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                             <label>Company Name</label>
                                             <input type="text" id="company-name">
                                        </div>
                                        <div class="form-group">
                                             <label>Country/ Region <span>*</span></label>
                                             <select id="Region">
                                                  <option value="3">Australia</option>
                                                  <option value="4">England</option>
                                                  <option value="6">New Zealand</option>
                                                  <option value="5">Switzerland</option>
                                                  <option value="1">United Kindom (UK)</option>
                                                  <option value="2">United States (USA)</option>
                                             </select>
                                        </div>
                                        <div class="form-group">
                                             <label>Street Address <span>*</span></label>
                                             <input type="text" id="address1" class="mb--15" placeholder="House number and street name">
                                             <input type="text" id="address2" placeholder="Apartment, suite, unit, etc. (optonal)">
                                        </div>
                                        <div class="form-group">
                                             <label>Town/ City <span>*</span></label>
                                             <input type="text" id="town">
                                        </div>
                                        <div class="form-group">
                                             <label>Country</label>
                                             <input type="text" id="country">
                                        </div>
                                        <div class="form-group">
                                             <label>Phone <span>*</span></label>
                                             <input type="tel" id="phone">
                                        </div>
                                        <div class="form-group">
                                             <label>Email Address <span>*</span></label>
                                             <input type="email" id="email">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6">
                                   <div class="axil-order-summery order-checkout-summery">
                                        <h5 class="title mb--20">Your Order</h5>
                                        <div class="summery-table-wrap">
                                             <table class="table summery-table">
                                                  <thead>
                                                       <tr>
                                                            <th>Product</th>
                                                            <th>Subtotal</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr class="order-product">
                                                            <td>Commodo Blown Lamp <span class="quantity">x1</span></td>
                                                            <td>$117.00</td>
                                                       </tr>
                                                       <tr class="order-product">
                                                            <td>Commodo Blown Lamp <span class="quantity">x1</span></td>
                                                            <td>$198.00</td>
                                                       </tr>
                                                       <tr class="order-total">
                                                            <td>Total</td>
                                                            <td class="order-total-amount">$323.00</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <div class="order-payment-method">
                                             <div class="single-payment">
                                                  <div class="input-group">
                                                       <input type="radio" id="radio4" name="payment">
                                                       <label for="radio4">Direct bank transfer</label>
                                                  </div>
                                                  <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                             </div>
                                             <div class="single-payment">
                                                  <div class="input-group">
                                                       <input type="radio" id="radio5" name="payment">
                                                       <label for="radio5">Cash on delivery</label>
                                                  </div>
                                                  <p>Pay with cash upon delivery.</p>
                                             </div>
                                             <div class="single-payment">
                                                  <div class="input-group justify-content-between align-items-center">
                                                       <input type="radio" id="radio6" name="payment" checked>
                                                       <label for="radio6">Paypal</label>
                                                       <img src="assets/images/others/payment.png" alt="Paypal payment">
                                                  </div>
                                                  <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                             </div>
                                        </div>
                                        <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</button>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
          <!-- End Checkout Area  -->
     </main>
     <?php
     require_once("include/footer.php");
     require_once("include/script.php");
     ?>