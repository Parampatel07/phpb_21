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
                                   <h3 class="card-title">Add New Product</h3>
                              </div>
                              <div class="card-body">
                                   <div class="card-pay">
                                        <div class="tab-content">
                                             <div class="row">
                                                  <div class="col-6">
                                                       <div class="form-group">
                                                            <label class="form-label">Enter title</label>
                                                            <input type="text" name="title" class="form-control" placeholder="Enter title for category">
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <div class="form-group">
                                                            <label class="form-label">Enter Photo</label>
                                                            <div class="input-group">
                                                                 <input type="file" name="image" class="form-control">
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="col-4">
                                                       <label for="" class="form-label">Select Category</label>
                                                       <select name="category" class="form-select">
                                                            <option value="0">Abc</option>
                                                            <option value="1">zxy</option>
                                                       </select>
                                                  </div>
                                                  <div class="col-4">
                                                       <div class="form-group">
                                                            <label class="form-label">Enter Stock</label>
                                                            <div class="input-group">
                                                                 <input type="number" name="stock" class="form-control" placeholder="Enter quantity of stock">
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="col-4">
                                                       <div class="form-group">
                                                            <label class="form-label">Enter Price</label>
                                                            <div class="input-group">
                                                                 <input type="number" name="price" class="form-control" placeholder="Enter price">
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <div class="form-group">
                                                            <label class="form-label">Enter Weight</label>
                                                            <div class="input-group">
                                                                 <input type="number" name="weight" class="form-control" placeholder="Enter Weight">
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
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
                                                  </div>
                                                  <div class="col-12">
                                                       <label for="" class="form-labe">
                                                            Enter product details
                                                       </label>
                                                       <textarea name="details" class="form-control" id="" cols="2" rows="2"></textarea>
                                                  </div>
                                             </div>
                                             <div class="tab-pane active show" id="tab20">
                                                  <div class="text-end mt-2">
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