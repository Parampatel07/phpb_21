<?php
$stack = array("param","aniket","gautam","jay");
var_dump($stack);
$reversed_stack = array_reverse($stack);
echo "This is reversed array without preserve key ";
var_dump($reversed_stack);
echo "this is reversed array with preserve key ";
$reversed_preserve_stack = array_reverse($stack,true);
var_dump($reversed_preserve_stack);

$numbers=array(10,20,30,40,50);
echo "total of numbers is ".array_sum($numbers);

var_dump($stack);
$implode_string = implode(" , ",$stack);
echo "<br>";
echo $implode_string;

echo "<br>";
$names = "Hardik Paras Aniket Ruturaj Gautam Jay";
echo $names;
$explode_array = explode(" ",$names);
// $explode_array = explode(" ",$names,3);
var_dump($explode_array);


$search_array = array("first"=>"one","second"=>"two","thrid"=>"three");
var_dump($search_array);
if(array_key_exists('fourth',$search_array))
{
     echo "<br>second key is found";
}
else
{
     echo "<br> second key is not found";
}
$myarray=array("FirSt"=>"one","SECond"=>"two","ThirD"=>"three","firST"=>"four");
var_dump(array_change_key_case($myarray,CASE_UPPER));

echo "<br>";
echo array_search("jay",$stack);

?>