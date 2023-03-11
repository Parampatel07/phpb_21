<?php 
    //maths related library functions 
    $num1 = rand(10,99);
    $num2 = rand(10,99);
    $num3 = rand(10,99);
    echo "<br/> num1 = $num1, num2=$num2, num3=$num3";

    $difference = $num1 - $num2;
    echo "<br/> difference between $num1 and $num2 =  $difference";
    echo "<br/> absolute difference between $num1 and $num2 =  " . abs($difference);

    $numbers = array(rand(10,99),rand(10,99),rand(10,99),rand(10,99),rand(10,99));
    print_r($numbers);

    echo "<br/> minimum from array " . min($numbers);
    echo "<br/> maximum from array " . max($numbers);

    $amount = 123.456789;
    echo "<br/> Original amount $amount";
    echo "<br/> ceil of amount " . ceil($amount);
    echo "<br/> floor of amount " . floor($amount);
    echo "<br/> round of amount " . round($amount,2);

    echo "<br/> power of 2 ^ 8 " . pow(2,8);
?>