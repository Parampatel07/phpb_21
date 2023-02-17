<?php
// echo "this is submit bmi page";
// bmi = weight / meter * meter 
var_dump($_POST);
extract($_POST);
$foot_inch = 12 * $height_foot ;
echo "this is foot to inch ".$foot_inch;
$total_inch = $foot_inch + $height_inch;
echo "<br>this is total inch ".$total_inch;
$meter = $total_inch / 39.37;
echo "<br>this is meter ".$meter;
$bmi = $weight / ($meter * $meter);
echo "<br>this is bmi ".$bmi;

?>