<?php
require_once 'Faker-master/src/autoload.php';

$data = Faker\Factory ::create();

echo $data->name;
echo "<br>";
echo $data->address;
echo "<br>";
echo $data->text;
echo "<br>";
echo $data->email;
?>