<?php
$f = fopen("temp.txt",'w');
$day = 10;
$month = 02;
$year = 2004;
// fprintf($f,"%02d-%02d-%04d",$day,$month,$year);
echo "content written succesfully";
$str = "      hello world ";
$str = ltrim($str);
$name = "Param patel";

echo "<br>";
echo "<pre>";
echo $str;
echo "this is name $name";
echo "</pre>";
echo "<br>";
echo str_pad($name,20,"-",STR_PAD_BOTH);

echo "<br>";
echo str_replace("a","*",$name,$count);
echo "<br>";
echo $count;
echo "<br>";
echo str_repeat("-",20);
echo "<br>";
var_dump(str_split($name,2)) ;
$string1 = "aba"; //01100001 
$string2= "caa"; //01000001 01000001 01000001  
echo strcmp($string1,$string2);
if(strcmp($string1,$string2) == 0)
{
     echo "<br> both string are same ";
}
if(strcmp($string1,$string2) < 0)
{
     echo "<br>  string 1 is smaller ";
}
if(strcmp($string1,$string2) > 0 )
{
     echo "<br>  string 1 is greater ";
}

echo strpos($name,'r');
echo "<br>";
echo strlen($name);
?>
<!-- 10-02-2004 -->