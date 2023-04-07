<?php
require_once("include/css.php");
?>
</head>

<body class="app sidebar-mini">i
     <?php
     require_once("include/navbar.php");
     ?>
     <!--app-content open-->
     <div class="app-content">
          <div class="side-app ">
               <!-- PAGE-HEADER -->
               <div class="row mt-4">
                    <div class="col-lg-12 col-md-12">
                         <div class="card">
                              <div class="card-header">
                                   <h3 class="card-title">View Saler </h3>
                              </div>
                              <div class="card-body">
                                   <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                             <thead>
                                                  <tr>
                                                       <th class="wd-15p border-bottom-0">User name</th>
                                                       <th class="wd-15p border-bottom-0">Bill date</th>
                                                       <th class="wd-20p border-bottom-0">Mobile number</th>
                                                       <th class="wd-20p border-bottom-0">City</th>
                                                       <th class="wd-20p border-bottom-0">Pay Mode</th>
                                                       <th class="wd-20p border-bottom-0">Payment Status</th>
                                                       <th class="wd-20p border-bottom-0">Order Status</th>
                                                       <th class="wd-20p border-bottom-0">Amount</th>
                                                       <th class="wd-20p border-bottom-0">Operation</th>

                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>Bella</td>
                                                       <td>Chloe</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td align="center"><h3><i class="fa fa-eye" data-bs-toggle="tooltip" title="" data-bs-original-title="View More" aria-label="fa fa-eye"></i></h3></td>
                                                  </tr>
                                                  <tr>
                                                       <td>Bella</td>
                                                       <td>Chloe</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td>System Developer</td>
                                                       <td align="center"><h3><i class="fa fa-eye" data-bs-toggle="tooltip" title="" data-bs-original-title="View More" aria-label="fa fa-eye"></i></h3></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>
     <?php
     require_once("include/script.php");
     ?>