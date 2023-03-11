<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Table Generator</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
     <div class="container">
          <div class="row">
               <div class="col-12">
                    <h1 align="center">
                         Table generator
                    </h1>
                    <hr>
                    <form action="submit/submit_table.php" method="post">
                         <table class="table table-bordered table-striped">
                              <tr>
                                   <td>
                                        Enter number of Colums
                                   </td>
                                   <td>
                                        <input type="number" name="colum" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                        Enter number of Rows
                                   </td>
                                   <td>
                                        <input type="number" name="row" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                        Select loop
                                   </td>
                                   <td>
                                        <input type="radio" value="0" class="m-2" name="loop" id="loop" checked>While
                                        <input type="radio" value="1" class="m-2" name="loop" id="loop">For
                                        <input type="radio" value="2" class="m-2" name="loop" id="loop">Do while
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                        Enter text for table
                                   </td>
                                   <td>
                                        <input type="text" name="text">
                                   </td>
                              </tr>
                              <tr>
                                   <td>Select color </td>
                                   <td>
                                        <select name="color" id="">
                                             <option value="0">Red</option>
                                             <option value="1">Blue</option>
                                             <option value="2">Green</option>
                                        </select>
                                        <!-- <input type="color" name="" id=""> -->
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                        Select text color
                                   </td>
                                   <td>
                                        <select name="text_color" id="">
                                             <option value="0">White</option>
                                             <option value="1">Black</option>
                                        </select>
                                   </td>
                              </tr>
                              <tr>
                                   <td colspan="2" align="center">
                                        <input type="submit" value="Generate table" class="btn btn-success">
                                        <input type="reset" value="Reset" class="btn btn-danger">
                                   </td>
                              </tr>
                         </table>
                    </form>
               </div>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>