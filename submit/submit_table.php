<?php
var_dump($_POST);
extract($_POST);
$count=0;
$flash=0;
if($loop == 0)
{
     echo "<table border='2' width='50%' cellpadding='10px' >";
     while($flash < $row)
     {
          echo "<tr>";
          $count=0;
          while($count < $colum)
          {
               echo "<td></td>";
               $count++;
          }
          // echo "<td></td>";
          // echo "<td></td>";
          echo "</tr>";
          $flash++;
     }
     echo "</table>";
     // echo "<tr>";
     // while($count < $colum)
     // {
     //      echo "<td></td>";
     //      $count++;
     // }
     // // echo "<td></td>";
     // // echo "<td></td>";
     // echo "</tr>";

     // echo "<tr>";
     // $count=0;
     // while($count < $colum)
     // {
     //      echo "<td></td>";
     //      $count++;
     // }
     // // echo "<td></td>";
     // // echo "<td></td>";
     // echo "</tr>";
     // echo "<tr>";
     // $count=0;
     // while($count < $colum)
     // {
     //      echo "<td></td>";
     //      $count++;
     // }
     // // echo "<td></td>";
     // // echo "<td></td>";
     // echo "</tr>";
}
else if($loop == 1)
{
     echo "<table border='2' width='50%' cellpadding='10px'>";
     for($flash=0;$flash <$row ;$flash++)
     {
          echo "<tr>";
          for($count=0;$count<$colum;$count++)
          {
               echo "<td></td>";
          }
          echo "</tr>";
     }
     echo "</table>";
}
else
{
echo "<table border='2' cellpadding='10px' width='50%' align='center'>";
echo "<tr>";
do
{
     echo "<tr>";
     do
     {
          echo "<td></td>";
          $count++;
     }while($count < $colum);
     echo "</tr>";
     $count=0;
     $flash++;
}while($flash < $row);
echo "</table>";
}
?>