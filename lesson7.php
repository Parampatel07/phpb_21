<?php
// Write a programe to print hollow half inverted pyramid 
$count = 0;
$space =0;
while($count<7)
{
     echo "*";
     $count++;
}
$count=4;
while($count>0)
{
     echo "<br>";
     echo "*";
     while($space<$count)
     {
          echo "&nbsp;&nbsp;";
          $space++;
     }
     echo "*";
     $space=0;
     $count--;
}
echo "<br>";
echo "*";
// echo "<br>";
// echo "*";
// while($space <3)
// {
//      echo "&nbsp;&nbsp;";
//      $space++;
// }
// echo "*";
// echo "<br>";
// echo "*";
// $space=0;
// while($space <2)
// {
//      echo "&nbsp;&nbsp;";
//      $space++;
// }
// echo "*";
?>