<?php
var_dump($_POST);
extract($_POST);
$count=0;
$flash=0;
if($color == 0)
{
     $myBgColor="red";
}
elseif($color == 1)
{
     $myBgColor="Blue";
}
else
{
     $myBgColor="Green";
}
if($text_color==0)
{
     $myTextColor = "white";
}
else
{
     $myTextColor=  "Black";
}
if($loop == 0)
{
     echo "<table border='2' width='50%' cellpadding='10px' bgcolor=".$myBgColor." style='color:".$myTextColor.";'>";
     while($flash < $row)
     {
          echo "<tr>";
          $count=0;
          while($count < $colum)
          {
               echo "<td>" . $text ."</td>";
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
     echo "<table border='2' width='50%' cellpadding='10px' bgcolor=".$myBgColor." style='color:".$myTextColor.";'>";
     for($flash=0;$flash <$row ;$flash++)
     {
          echo "<tr>";
          for($count=0;$count<$colum;$count++)
          {
               echo "<td>".$text."</td>";
          }
          echo "</tr>";
     }
     echo "</table>";
}
else
{
     echo "<table border='2' width='50%' cellpadding='10px' bgcolor=".$myBgColor." style='color:".$myTextColor.";'>";
     echo "<tr>";
     do
     {
          echo "<tr>";
          do
          {
               echo "<td>".$text."</td>";
               $count++;
          }while($count < $colum);
          echo "</tr>";
          $count=0;
          $flash++;
     }while($flash < $row);
     echo "</table>";
}
?>