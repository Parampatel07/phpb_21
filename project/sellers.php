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
                                   <h1 class="title">Sellers</h1>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="axil-most-sold-product axil-section-gap pb--0">
               <div class="container">
                    <div class="product-area pb--50">
                         <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 row--15">
                              <?php
                              try {
                                   $sql = "Select id,fullname,title from salesman where isdeleted = 1";
                                   $stat = $db->prepare($sql);
                                   $stat->setFetchMode(PDO::FETCH_ASSOC);
                                   $stat->execute();
                                   $table = $stat->fetchAll();
                                   // var_dump($table);
                              } catch (PDOException $error) {
                                   LogError($error);
                              }
                              foreach ($table as $row) {
                              ?>
                                   <div class="col">
                                        <div class="axil-product-list product-list-style-2">
                                             <div class="product-content">
                                                  <h6 class="product-title"><a href="category.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'] ?> </a></h6>
                                                  <div class="product-price-variant">
                                                       <span class="price current-price"><?php echo $row['fullname'] ?></span><span class="verified-icon"><i class="fas fa-badge-check"></i></span>
                                                  </div>
                                                  <div class="product-cart">
                                                       <a href="category.php?id=<?php echo $row['id']; ?>" class="cart-btn">View Category</a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              <?php
                              }
                              ?>

                         </div>
                    </div>
               </div>
          </div>
     </main>
     <?php
     require_once("include/footer.php");
     require_once("include/script.php");
     ?>