<?php
function get_addition($a,$b)
{
     return $a + $b ;
}
echo get_addition(10,20);
echo "<br>";
$password = password_hash('123123',PASSWORD_BCRYPT);
echo $password;
echo "<br>";
echo "this is response from passworf verify ".password_verify('123123',$password);
?>