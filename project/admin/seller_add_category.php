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
                                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter title for category" required>
                                                       </div>
                                                       <div class="form-group">
                                                            <label class="form-label">Enter Photo</label>
                                                            <div class="input-group">
                                                                 <input type="file" name="image" id="image" class="form-control">
                                                                 <label for="" id="image_label"></label>
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
                                                            <button type="submit" class="btn btn-primary" id="submit">Save Category</button>
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
                                                       <th class="wd-20p border-bottom-0">Operations </th>
                                                  </tr>
                                             </thead>
                                             <tbody id="mytable">
                                                  <tr style="display:none;">
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td class="d-flex">

                                                            <h2 class="mx-3">
                                                                 <a href="">
                                                                      <i class="fa fa-pencil-square" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-pencil-square" aria-label="fa fa-pencil-square"></i>
                                                                 </a>
                                                            </h2>
                                                            <h2>
                                                                 <a href="">
                                                                      <i class="fa fa-trash" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-trash" aria-label="fa fa-trash"></i>
                                                                 </a>
                                                            </h2>
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
     <script>
          $(document).ready(function() {
               console.log("Jquery Working...");
               var page = "ajax/get_seller_category.php";
               var tr = ``;
               var count = 1;
               var edit_id;

               $("body").on('click', '.btn_delete', function() {
                    console.log("btn clicked ");
                    var category_id = $(this).parent().parent().parent().attr("data-id");
                    var page = `ajax/delete_cateogry.php?category_id=${category_id}`;
                    if (confirm("Are you sure ?? ")) {
                         $(this).parent().parent().parent().hide(2000);
                         $.get(page, function(data, status) {
                              console.log(data);
                              if (data == 1) {
                                   alert("Category deleted successfully ");
                              }
                         });
                    }
               });
               $('body').on('click', ".btn_edit", function() {
                    console.log("edit button clicked ");
                    var title = $(this).parent().parent().parent().find("td").eq(1).text();
                    var status = $(this).parent().parent().parent().find("td").eq(3).text();
                    // var image = $(this).parent().parent().parent().find("td").eq(2).html();
                    edit_id = $(this).parent().parent().parent().attr("data-id");
                    // console.log(image.attr('src'));
                    $("#title").val(title);
                    if (status == "Live") {
                         $("input[name='status'][value='0']").prop("checked", true);
                    } else {
                         $("input[name='status'][value='1']").prop("checked", true);
                    }
                    $("#submit").text("Update Category");
                    $("#submit").attr("type", "button");
               });
               $.get(page, function(data, status) {
                    console.log(data);
                    console.log(status);
                    var my_data = JSON.parse(data);
                    console.log(my_data);
                    my_data.forEach(row => {
                         if (row['islive'] == 0) {
                              var status = "Live";
                         } else {
                              var status = "Not live";
                         }
                         tr += `<tr data-id="${row['id']}">
                         <td>${count++}</td>
                         <td>${row['title']}</td>
                         <td><img src="images/category/${row['photo']}" alt="" height="50px"></td>
                         <td>${status}</td>
                         <td class="d-flex">
                              <h2 class="mx-3">
                                        <i class="fa fa-pencil-square btn_edit" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-pencil-square" aria-label="fa fa-pencil-square"></i>
                                   </h2>
                                   <h2>
                                             <i class="fa fa-trash btn_delete" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-trash" aria-label="fa fa-trash"></i>
                                   </h2>
                               </td>     
                         </tr>`
                    });
                    $("#mytable").append(tr);

               });
               $("#submit").click(function() {
                    if ($("#submit").html() == "Update Category") {
                         var title = $("#title").val();
                         var status = parseInt($("input[name='status']:checked").val());
                         var page = "ajax/update_category.php";
                         var my_data = {
                              "title": title,
                              "status": status,
                              "id": edit_id
                         }
                         $.post(page, my_data, function(data, s) {
                              console.log(data);
                              if (data == 1) {
                                   alert("Category updated successfully ")
                                   var tr = $(`tr[data-id='${edit_id}']`);
                                   tr.find("td").eq(1).text(title);
                                   console.log("this is status ", status);
                                   if (status == 0) {
                                        tr.find("td").eq(3).text("Live");
                                   } else if (status == 1) {
                                        tr.find("td").eq(3).text("Not Live");
                                   }
                                   data = " ";
                                   if ($("#image").val() == " " || $("#image").val() == null) {
                                        $("#image_label").text("Please Select a file ");
                                   }
                              }
                         }).then(function() {
                              $("#submit").html("Save Category");
                              $("#submit").attr("type", "Submit");
                         });
                         $("#title").val(" ");
                         // $("#image").val(" ");
                         $("input[name='status']").prop("checked", false);

                         console.log($("#submit"));
                    }
               });
          });
     </script>
     <?php
     require_once("include/script.php");
     ?>