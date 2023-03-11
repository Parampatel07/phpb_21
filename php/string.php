<?php 
    $amount = 12345;
    printf("%s",$amount);
    echo "<pre>";
    printf("<br/> %10s",$amount); //right justified
    printf("<br/> %-10s *",$amount); //left justified
    printf("<br/> %015s",$amount); //fill remaining space with 0
    printf("<br/>%'#15s",$amount); //fill remaining space with #
    echo "</pre>";

    $cars = array("Maruti","Honda","Kia","Audi","BMW");
    $carnames = join(" ",$cars);
    print "<br/> $carnames";
?>