<?php
date_default_timezone_set("asia/kolkata");
echo date("Z");
echo "<br>";
echo "current timestamp is ".time();
echo "<br>";
echo strtotime("last month");
echo "<br>";
echo mktime(5,37,60,2,10,2004);

echo "<br>";
echo "date from time stamp ";
echo "<br>";
echo date("d/m/Y",time());
?>