<?php
require_once("include/css.php");
?>
</head>

<body class="sticky-header">
     <?php
     require_once("include/navbar.php");
     ?>
     <main class="main-wrapper">
          <!-- Start Breadcrumb Area  -->
          <div class="axil-breadcrumb-area">
               <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-8">
                              <div class="inner">
                                   <h1 class="title">Explore All Products</h1>
                              </div>
                         </div>
                         <div class="col-lg-6 col-md-4">
                              <div class="inner">
                                   <div class="bradcrumb-thumb">
                                        <img src="theme/assets/images/product/electric/product-04.png" alt="Image">
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- End Breadcrumb Area  -->
          <!-- Start Shop Area  -->
          <div class="axil-shop-area axil-section-gap bg-color-white">
               <div class="container">
                    <div class="row row--15">
                         <div class="col-xl-3 col-lg-4 col-sm-6">
                              <div class="axil-product product-style-one has-color-pick mt--40">
                                   <div class="thumbnail">
                                        <a href="view_product.php">
                                             <img src="theme/assets/images/product/electric/product-01.png" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                             <div class="product-badget">20% OFF</div>
                                        </div>
                                        <div class="product-hover-action">
                                             <ul class="cart-action">
                                                  <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                                  <li class="select-option"><a href="cart.php">Add to Cart</a></li>
                                                  <li class="quickview"><a href="view_product.php"><i class="far fa-eye"></i></a></li>
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="product-content">
                                        <div class="inner">
                                             <h5 class="title"><a href="view_product.php">3D™ wireless headset</a></h5>
                                             <div class="product-price-variant">
                                                  <span class="price current-price">$30</span>
                                                  <span class="price old-price">$30</span>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <!-- End Single Product  -->
                    </div>
               </div>
               <!-- End .container -->
          </div>
          <!-- End Shop Area  -->
          <!-- Start Axil Newsletter Area  -->
          <div class="axil-newsletter-area axil-section-gap pt--0">
               <div class="container">
                    <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                         <div class="newsletter-content">
                              <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                              <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                              <div class="input-group newsletter-form">
                                   <div class="position-relative newsletter-inner mb--15">
                                        <input placeholder="example@gmail.com" type="text">
                                   </div>
                                   <button type="submit" class="axil-btn mb--15">Subscribe</button>
                              </div>
                         </div>
                    </div>
               </div>
               <!-- End .container -->
          </div>
          <!-- End Axil Newsletter Area  -->
     </main>
     <?php
     require_once("include/footer.php");
     require_once("include/script.php");
     ?>