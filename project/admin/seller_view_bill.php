<?php
session_start();
require_once("include/connection.php");
require_once("include/css.php");
?>
</head>

<body class="app sidebar-mini">i
     <?php
     require_once("include/seller_navbar.php");
     ?>
     <!--app-content open-->
     <div class="app-content">
          <div class="side-app">
               <!-- PAGE-HEADER -->
               <div class="row">
                    <div class="col-lg-12 col-md-12">
                         <div class="card">
                              <div class="card-header">
                                   <h3 class="card-title">View bill</h3>
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
                                                  <?php
                                                  $sql = "Select * from bill";
                                                  $stat = $db->prepare($sql);
                                                  $stat->setFetchMode(PDO::FETCH_ASSOC);
                                                  $stat->execute();
                                                  $table = $stat->fetchAll();
                                                  // var_dump($table);
                                                  foreach ($table as $row) {
                                                  ?>
                                                       <tr>
                                                            <td><?php echo $row['fullname'] ?></td>
                                                            <td><?php echo date("d-m-Y", strtotime($row['billdate'])) ?></td>
                                                            <td><?php echo $row['mobile'] ?></td>
                                                            <td><?php echo $row['city'] ?></td>
                                                            <td><?php if ($row['paymentmode'] == 1) {
                                                                      echo "Cash on Deilvery";
                                                                 } else {
                                                                      echo "Online transfer";
                                                                 } ?></td>
                                                            <td><?php if ($row['paymentstatus'] == 1) {
                                                                      echo "Paid";
                                                                 } else {
                                                                      echo "Unpaid";
                                                                 }
                                                                 ?></td>
                                                            <td><?php if ($row['orderstatus'] == 1) {
                                                                      echo "Confirmed";
                                                                 } else if ($row['orderstatus'] == 2) {
                                                                      echo "Dispatched";
                                                                 } else if ($row['orderstatus'] == 3) {
                                                                      echo "DELIVERED";
                                                                 } else if ($row['orderstatus'] == 4) {
                                                                      echo "Cancel";
                                                                 } else {
                                                                      echo "Return";
                                                                 }
                                                                 ?></td>
                                                            <td><?php echo $row['amount'] ?></td>
                                                            <td align="center">
                                                                 <a href="seller_view_full_bill.php?id=<?php
                                                                                                         echo $row['id'];
                                                                                                         ?>">
                                                                      <h3><i class="fa fa-eye" data-bs-toggle="tooltip" title="" data-bs-original-title="View More" aria-label="fa fa-eye"></i></h3>
                                                                 </a>
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