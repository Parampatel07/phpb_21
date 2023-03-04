<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bmi Calc</title>
     <style>
          .mydiv {
               width: 70%;
               margin-left: 200px;
          }

          table {
               background-color: #93BFCF;
          }
     </style>
</head>

<body>
     <h1>
          Example of Bmi Calc.
     </h1>
     <hr>
     <form action="submit/submit_bmi.php" method="post">
          <div class="mydiv">
               <table width="60%" align="center">
                    <tr>
                         <td>Enter your weight</td>
                         <td>
                              <input type="number" name="weight" id="weight" required>
                         </td>
                    </tr>

                    <tr>
                         <td>Enter your Height in foot</td>
                         <td>
                              <input type="number" name="height_foot" id="height_foot" required>
                         </td>
                    </tr>
                    <tr>
                         <td>Enter your Height in inch</td>
                         <td>
                              <input type="number" name="height_inch" id="height_inch" required>
                         </td>
                    </tr>
                    <tr>
                         <td align="right">
                              <input type="submit" name="mysubmit" value="Submit">
                         </td>
                         <td>
                         <input type="reset" />
                         </td>
                    </tr>
                    <tr>
                         <td>Your bmi is :</td>
                         <td><?php 
                         if(isset($_GET['bmi']) == true)
                         {
                              echo $_GET['bmi'];
                         }
                         else
                         {
                              echo "your answer here";
                         }
                         ?></td>
                    </tr>
               </table>
          </div>
     </form>
</body>

</html>