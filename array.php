<?php
//1st method
$names = array("Paras","aniket","fardin");
print_r($names);
var_dump($names);
//2nd method
$cars[0]="gtr";
$cars[3]="bmw";
$cars[11]="Omni";
var_dump($cars);

//example of associative array 
$person = array("name"=>"Param","surname"=>"Patel","age"=>19,"gender"=>True);
var_dump($person);
echo $person['name']."<br>";
echo $names[2];
echo "<br>";

foreach($person as $value)
{
     echo $value."<br>";
}
echo "<br>";
echo "<br>";
foreach($person as $key=>$value)
{
     echo "this is key ".$key." this is value ".$value."<br>";
}
?>