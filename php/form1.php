<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Form 1 </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

     <div class="container">
          <div class="row">
               <div class="col-12">
                    <div class="card">
                         <div class="card-header">
                              Form 1
                         </div>
                         <div class="card-body">
                              <form action="" method="post">
                                   <input type="number" name="mobilenumber" placeholder="mobile number" class="form-control mt-3">
                                   <?php
                                   if (isset($_POST['submit']) == true) {
                                        $submit = true;
                                        // echo "form submitted";
                                        if (strlen($_POST['mobilenumber']) != 10) {
                                   ?>
                                             <span class="text-danger">
                                                  <?php echo  "mobile number must be in 10 digit*";
                                                  $submit = false; ?>
                                             </span>
                                   <?php

                                        }
                                   }
                                   ?>
                                   <input type="number" name="subject1" class="form-control mt-3" placeholder="subject 1">
                                   <?php
                                   if (isset($_POST['submit']) == true) {
                                        // echo "form submitted";
                                        if (strlen($_POST['subject1']) >= 0  && strlen($_POST['subject1']) <= 100) {
                                   ?>
                                             <span class="text-danger">
                                                  <?php echo  "marks must be between 0 to 100*";
                                                  $submit = false;
                                                  ?>
                                             </span>
                                   <?php

                                        }
                                   }
                                   ?>
                                   <input type="number" name="subject2" class="form-control mt-3" placeholder="subject 2" min="0" max="100">
                                   <input type="number" name="subject3" class="form-control mt-3" placeholder="subject 3" min="0" max="100">
                                   <input type="submit" name="submit" class="btn btn-primary mt-3" value="save">
                                   <input type="reset" class="btn btn-primary mt-3" value="reset">
                              </form>
                              <?php
                              if (isset($_POST['submit']) == true) {
                                   if ($submit != false) {
                              ?>
                                        <table width="50%" border="2" class="table table-striped">
                                             <tr>
                                                  <td>Mobile number</td>
                                                  <td>Pass/fail</td>
                                                  <td>grade</td>
                                             </tr>
                                             <tr>
                                                  <td>
                                                       <?php echo $_POST['mobilenumber'] ?>
                                                  </td>
                                                  <td>
                                                       <?php
                                                       if ($_POST['subject1'] > 40 && $_POST['subject2'] > 40 && $_POST['subject3'] > 40) {
                                                            echo "pass";
                                                       } else {
                                                            echo "fail";
                                                       }
                                                       ?>
                                                  </td>
                                                  <td></td>
                                             </tr>
                                        </table>
                              <?php
                                   }
                              }
                              ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>