<?php
session_start();
require_once("admin/include/connection.php");
require_once("include/css.php");
?>
</head>

<body class="sticky-header">
     <?php
     require_once("include/navbar.php");
     ?>
     <main class="main-wrapper">
          <div class="axil-breadcrumb-area">
               <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-6 col-md-8">
                              <div class="inner">
                                   <h1 class="title">Our Categories</h1>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- Start Best Sellers Product Area  -->
          <div class="axil-best-seller-product-area bg-color-white axil-section-gap pb--0">
               <div class="container">
                    <div class="product-area pb--50">
                         <div class="new-arrivals-product-activation-2 slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide product-slide-mobile">
                              <?php
                              $sql = "Select id,title,photo from category where isdeleted = 0 and saleseman_id = ? and islive = 0";
                              $data = [$_REQUEST['id']];
                              $table = FetchRow($sql, $data);
                              // var_dump($table);
                              foreach ($table as $value) {
                              ?>
                                   <div class="slick-single-layout">
                                        <div class="axil-product product-style-six">
                                             <div class="thumbnail">
                                                  <a href="product.php?id=<?php echo $value['id']; ?>">
                                                       <img style="height:204px;width:300px;" data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="admin/images/category/<?php echo $value['photo']; ?>" class="img-fluid" alt="Product Images">
                                                  </a>
                                             </div>
                                             <div class="product-content">
                                                  <div class="inner">
                                                       <h5 class="title"><a href="single-product-7.html" class="h5"><?php echo $value['title'] ?><span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h5>
                                                       <div class="product-hover-action">
                                                            <ul class="cart-action">
                                                                 <li class="select-option"><a href="product.php?id=<?php echo $value['id']; ?>">View Product</a></li>
                                                            </ul>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              <?php
                              }
                              ?>
                              <!-- End .slick-single-layout -->
                         </div>
                    </div>
               </div>
          </div>
          <!-- End  Best Sellers Product Area  -->
     </main>
     <?php
     require_once("include/footer.php");
     require_once("include/script.php");
     ?>