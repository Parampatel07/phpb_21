<?php
// Write a programe to findout how many days a month has 
$month = 0;
if($month<=12 && $month>=1)
{
     if($month==1 || $month==3 ||$month==5 || $month==7 || $month==8 || $month==10 || $month==12)
     {
          echo "This month has 31 days";
     }
     else if($month == 2)
     {
          echo "This month has 28/29 days";
     }
     else
     {
          echo "This month has 30 days";
     }
}
else
{
     echo "Invalid input";
}
?>