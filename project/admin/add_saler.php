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
                                   <h3 class="card-title">Add Saler </h3>
                              </div>
                              <div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
												<thead>
													<tr>
														<th class="wd-15p border-bottom-0">Full Name</th>
														<th class="wd-15p border-bottom-0">Title</th>
														<th class="wd-20p border-bottom-0">Email</th>
														<th class="wd-15p border-bottom-0">City</th>
														<th class="wd-10p border-bottom-0">Mobile</th>
														<th class="wd-10p border-bottom-0">Operations</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>b.Chloe@datatables.net</td>
														<td>
                                                                           <button class="btn btn-success">Accept</button>
                                                                           <button class="btn btn-danger">Reject</button>
                                                                      </td>
													</tr>
													<tr>
														<td>Bond</td>
														<td>Account Manager</td>
														<td>2012/02/21</td>
														<td>$543,654</td>
														<td>d.bond@datatables.net</td>
                                                                      <td>
                                                                           <button class="btn btn-success">Accept</button>
                                                                           <button class="btn btn-danger">Reject</button>
                                                                      </td>
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