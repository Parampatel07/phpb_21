<?php
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
                                   <h3 class="card-title">Add New Category</h3>
                              </div>
                              <div class="card-body">
                                   <div class="card-pay">
                                        <div class="tab-content">
                                             <div class="tab-pane active show" id="tab20">
                                                  <div class="form-group">
                                                       <label class="form-label">Enter title</label>
                                                       <input type="text" name="title" class="form-control" placeholder="Enter title for category">
                                                  </div>
                                                  <div class="form-group">
                                                       <label class="form-label">Enter Photo</label>
                                                       <div class="input-group">
                                                            <input type="file" name="image" class="form-control">
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-sm-8 mt-3">
                                                            <label class="form-label">Select Status</label>
                                                            <div class="form-check form-check-inline">
                                                                 <input class="form-check-input" type="radio" name="status" value="0" id="inlineRadioDefault">
                                                                 <label class="form-check-label" for="inlineRadioDefault">Live</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                 <input class="form-check-input" type="radio" name="status" value="1" id="inlineRadioChecked" checked="">
                                                                 <label class="form-check-label" for="inlineRadioChecked">Not Live</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                                 <div class="text-end">
                                                 <a href="#" class="btn  btn-lg btn-primary">Confirm</a>
                                                 </div>
                                             </div>
                                        </div>
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