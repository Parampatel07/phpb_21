<?php
require_once("include/connection.php");
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
                                                       <th class="wd-15p border-bottom-0">Sr no</th>
                                                       <th class="wd-15p border-bottom-0">User email</th>
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
                                                  <?php
                                                  $sql = "select b.*,u.email as user_email from bill b , users u where u.id =b.usersid";
                                                  $stat = $db->prepare($sql);
                                                  $stat->setFetchMode(PDO::FETCH_ASSOC);
                                                  $stat->execute();
                                                  $data = $stat->fetchAll();
                                                  // var_dump($data);
                                                  $count=1;
                                                  foreach ($data as $value) {
                                                  ?>
                                                       <tr>
                                                            
                                                            <td><?php echo$count++ ?></td>
                                                            <td><?php echo $value['user_email'] ?></td>
                                                            <td><?php echo date("d-m-Y",strtotime($value['billdate']));?></td>
                                                            <td><?php echo $value['mobile']?></td>
                                                            <td><?php echo $value['city']?></td>
                                                            <td><?php 
                                                            if($value['paymentmode'] == 1 )
                                                            {
                                                                 echo "COD";
                                                            }
                                                            else
                                                            {
                                                                 echo "Online";
                                                            }
                                                            ?></td>
                                                            <td align="center">
                                                                 <?php
                                                            if($value['paymentstatus']==1)
                                                            {
                                                                 echo "<h4><span class='badge bg-success  me-1 mb-1 mt-1'>Paid</span></h4>";
                                                            }
                                                            else
                                                            {
                                                                 echo "<h4><span class='badge bg-danger  me-1 mb-1 mt-1'>UnPaid</span></h4>";
                                                            }
                                                                 ?>
                                                            </td>
                                                            <td><?php 
                                                                 if($value['orderstatus']==1)
                                                                      echo "Confirmed";
                                                                 else if($value['orderstatus']==2)
                                                                      echo "Dispatched";
                                                                 else if($value['orderstatus']==3)
                                                                      echo "Delivered";
                                                                 else if($value['orderstatus']==4)
                                                                      echo "Cancel";
                                                                 else if($value['orderstatus']==5)
                                                                      echo "Return";
                                                            ?></td>
                                                            <td><?php echo $value['amount']?></td>
                                                            <td align="center">
                                                                 <h3><i class="fa fa-eye" data-bs-toggle="tooltip" title="" data-bs-original-title="View More" aria-label="fa fa-eye"></i></h3>
                                                            </td>
                                                       </tr>
                                                  <?php
                                                  }
                                                  ?>
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