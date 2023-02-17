<?php
echo "Hello submit page";
echo "<br>this is name ".$_POST['name'];
echo "<br>this is age ".$_POST['age'];
extract($_POST);
echo "<br>this is name ".$name;
echo "<br>this is age ".$age;
var_dump($_POST);
print_r($_POST);
?>