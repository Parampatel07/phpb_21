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
                                   <h3 class="card-title">Bill Details </h3>
                              </div>
                              <div class="card-body pb-2">
                                   <?php
                                   try {
                                        $sql = "Select * from bill where id = ?";
                                        $stat = $db->prepare($sql);
                                        $stat->bindparam(1, $_REQUEST['id']);
                                        $stat->setFetchMode(PDO::FETCH_ASSOC);
                                        $stat->execute();
                                        $table = $stat->fetch();
                                        // var_dump($table);
                                   } catch (PDOException $error) {
                                        LogError($error);
                                   }
                                   ?>
                                   <table class="table table-bordered table-striped">
                                        <tr>
                                             <td>
                                                  <b>Full Name </b>
                                             </td>
                                             <td colspan="2">
                                                  <?php echo $table['fullname']; ?>
                                             </td>
                                             <td>
                                                  <b>Bill date </b>
                                             </td>
                                             <td colspan="2">
                                                  <?php echo date("d-m-Y",strtotime( $table['billdate'])) ?>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td width='20%'>
                                                  <b>Address 1 </b>
                                             </td>
                                             <td colspan="2">
                                                  <?php
                                                  echo $table['address1']
                                                  ?>
                                             </td>

                                             <td width='20%'>
                                                  <b>Address 2 </b>
                                             </td>
                                             <td colspan="2">
                                                  <?php
                                                  echo $table['address2']
                                                  ?>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td>
                                                  <b>Mobile </b>
                                             </td>
                                             <td>
                                                  <?php
                                                  echo $table['mobile']
                                                  ?>
                                             </td>
                                             <td>
                                                  <b>City </b>
                                             </td>
                                             <td>
                                                  <?php
                                                  echo $table['city']
                                                  ?>
                                             </td>
                                             <td>
                                                  <b>Pincode </b>
                                             </td>
                                             <td>
                                                  <?php
                                                  echo $table['pincode']
                                                  ?>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td>
                                                  <b>Payment mode </b>
                                             </td>
                                             <td>
                                                  <?php if ($table['paymentmode'] == 1) {
                                                       echo "Cash on Deilvery";
                                                  } else {
                                                       echo "Online transfer";
                                                  } ?>
                                             </td>
                                             <td>
                                                  <b>Order status </b>
                                             </td>
                                             <td>
                                                  <?php if ($table['orderstatus'] == 1) {
                                                       echo "Confirmed";
                                                  } else if ($table['orderstatus'] == 2) {
                                                       echo "Dispatched";
                                                  } else if ($table['orderstatus'] == 3) {
                                                       echo "DELIVERED";
                                                  } else if ($table['orderstatus'] == 4) {
                                                       echo "Cancel";
                                                  } else {
                                                       echo "Return";
                                                  }
                                                  ?>
                                             </td>
                                             <td>
                                                  <b>Payment status </b>
                                             </td>
                                             <td>
                                                  <?php if ($table['paymentstatus'] == 1) {
                                                       echo "Paid";
                                                  } else {
                                                       echo "Unpaid";
                                                  }
                                                  ?>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td>
                                                  <b>Amount </b>
                                             </td>
                                             <td colspan="2">
                                                  <?php
                                                  echo $table['amount']
                                                  ?>
                                             </td>
                                             <td>
                                                  <b>Remarks </b>
                                             </td>
                                             <td colspan="2">
                                             <?php
                                                  echo $table['remarks'];
                                                  ?>
                                             </td>
                                        </tr>
                                   </table>
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