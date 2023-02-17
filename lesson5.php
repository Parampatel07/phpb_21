<?php
// Findout largest office outof given 3 offices 
// || - athva
// && - ane
$height1 = 80;
$height2 = 80;
$height3 = 80;
$width1 = 80;
$width2 = 80;
$width3 = 80;
$office1 = $height1 * $width1;
$office2 = $height2 * $width2;
$office3 = $height3 * $width3;
if($office1== $office2 && $office2==$office3)
{
     echo "All are same ";
}
else
{
          if($office1 > $office2)
          {
               if($office1 > $office3)
               {
                    echo "Office 1 is Largest";
               }
               else
               {
                    echo "Office 3 is largest";
               }
          }
          else if($office2 > $office3)
          {
               echo "Office 2 is largest";
          }
          else
          {
               echo "Office 3 is largest";
          }
}

?>