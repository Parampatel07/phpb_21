<?php
$f = fopen("temp.txt",'w');
$day = 10;
$month = 02;
$year = 2004;
// fprintf($f,"%02d-%02d-%04d",$day,$month,$year);
echo "content written succesfully";
$str = "      hello world ";
$str = ltrim($str);
echo "<br>";
echo "<pre>";
echo $str;
echo "</pre>";
?>
<!-- 10-02-2004 -->