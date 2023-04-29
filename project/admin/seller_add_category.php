<?php
session_start();
require_once("include/css.php");
?>
</head>

<body class="app sidebar-mini">
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
                                   <h3 class="card-title">Add New Category</h3>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-12">
                                             <?php
                                             require_once("include/message.php");
                                             ?>
                                        </div>
                                   </div>
                                   <div class="card-pay">
                                        <div class="tab-content">
                                             <form action="submit/insert_category.php" method="post" enctype="multipart/form-data">
                                                  <div class="tab-pane active show" id="tab20">
                                                       <div class="form-group">
                                                            <label class="form-label">Enter title</label>
                                                            <input type="text" name="title" class="form-control" placeholder="Enter title for category" required>
                                                       </div>
                                                       <div class="form-group">
                                                            <label class="form-label">Enter Photo</label>
                                                            <div class="input-group">
                                                                 <input type="file" name="image" class="form-control" required>
                                                            </div>
                                                       </div>
                                                       <div class="row">
                                                            <div class="col-sm-8 mt-3">
                                                                 <label class="form-label">Select Status</label>
                                                                 <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="radio" name="status" value="0" id="inlineRadioDefault" checked>
                                                                      <label class="form-check-label" for="inlineRadioDefault">Live</label>
                                                                 </div>
                                                                 <div class="form-check form-check-inline">
                                                                      <input class="form-check-input" type="radio" name="status" value="1" id="inlineRadioChecked">
                                                                      <label class="form-check-label" for="inlineRadioChecked">Not Live</label>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Save Category</button>
                                                            <button type="reset" class="btn btn-danger">Clear all</button>
                                                       </div>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-12 col-md-12">
                         <div class="card">
                              <div class="card-header">
                                   <h3 class="card-title">View Category</h3>
                              </div>
                              <div class="card-body">
                                   <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                             <thead>
                                                  <tr>
                                                       <th class="wd-15p border-bottom-0">Sr no</th>
                                                       <th class="wd-15p border-bottom-0">Title</th>
                                                       <th class="wd-20p border-bottom-0">Image</th>
                                                       <th class="wd-20p border-bottom-0">Status </th>
                                                  </tr>
                                             </thead>
                                             <tbody id="mytable">
                                                  <tr style="display: none;">
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
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
     <script>
          $(document).ready(function() {
               console.log("Jquery Working...");
               var page = "ajax/get_seller_category.php";
               var tr = ``;
               var count=1;
               $.get(page, function(data, status) {
                    console.log(data);
                    console.log(status);
                    var my_data = JSON.parse(data);
                    console.log(my_data);
                    my_data.forEach(row => {
                         if(row['islive']==0)
                         {
                              var status = "Live";
                         }
                         else
                         {
                              var status = "Not live";
                         }
                         tr += `<tr>
                         <td>${count++}</td>
                         <td>${row['title']}</td>
                         <td><img src="images/category/${row['photo']}" alt="" height="50px"></td>
                         <td> ${status} </td>
                         </tr>`
                    });
                    $("#mytable").append(tr);

               });

          });
     </script>
     <?php
     require_once("include/script.php");
     ?>