<?php
// Write a programe to print following pattern 
// 0, 1, 3, 6, 10, 15, 21, 28, 36, 45, 55 ... 1000
// 0  1  2  3   4  5  6

echo "0 , 1 ";
$num1 = 0;
$num2 = 1;
$count = 2 ;

$answer = $num2 + $count;
echo ", ".$answer;

for($count=3; $answer<990 ;$count++)
{    
     $answer = $answer + $count;
     echo ", ".$answer;
}
// $count++;
// $answer = $answer+$count;
// echo ", ".$answer;
// $count++;
// $answer=$answer+$count;
// echo ", ".$answer;
// $count++;
// $answer=$answer+$count;
// echo ", ".$answer;
?>