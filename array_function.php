<?php
$numbers = array(10,203,20,5,0,60,40,855,69,45,101,203.25,'param','aniket','paras','hardik','jay');
var_dump($numbers);
sort($numbers,SORT_STRING);
var_dump($numbers);

echo "total count of array number is ";
echo count($numbers);
echo "<br>size of array number is ";
echo sizeof($numbers);
echo "<br>";
$family = array("ram",'sita','luv');
list($father,$mother,$child) = $family;
echo "father = ".$father;
echo " mother = ".$mother;
echo " child = ".$child;

$merged_array = array_merge($numbers,$family);
var_dump($merged_array);
?>