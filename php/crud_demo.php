<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

     <div class="container mt-5">
          <div class="row">
               <div class="col-8 offset-2">
                    <div class="card mt-5 shadow">
                         <div class="card-header bg-danger text-white h3">Crud demo</div>
                         <div class="card-body">
                              <form action="">
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your name </label>
                                        <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Enter your Email </label>
                                        <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Select date of joining </label>
                                        <input type="date" name="doj" placeholder="Enter your doj" class="form-control" required>
                                   </div>
                                   <div class="form-group my-2">
                                        <label for="" class="form-label">Select Gender </label>
                                        <br>
                                        <input type="radio" class="form-radio" name="gender" value="0">Female</input>
                                        <input type="radio" class="form-radio" name="gender" value="1">Male</input>
                                   </div>
                                   <div class="text-end">
                                   <input type="submit" value="Submit " class="btn btn-success">
                                   <input type="reset" value="Clear all" class="btn btn-danger">
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-8 offset-2">
                    <div class="card mt-5 shadow">
                         <div class="card-header bg-primary text-white h3">View Data</div>
                         <div class="card-body">
                         </div>                              
                    </div>
               </div>
          </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>