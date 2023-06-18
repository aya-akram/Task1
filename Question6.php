<?php
//Write a PHP program to find the larger value from two positive integer values that is in the range 20-30 inclusive or return 0 if neither is in that range.

function largerInRange($num1, $num2) {
    
    $x1 = ($num1 >= 20 && $num1 <= 30);
    $x2 = ($num2 >= 20 && $num2 <= 30);
    if($x1 && $x2) {
        return ($num1 >= $num2) ? $num1 : $num2;
     }
      else {
        return 0;
    }
}

echo largerInRange(23, 28) . "\n";
echo largerInRange(13, 30) . "\n"; 
echo largerInRange(22, 25) . "\n"; 

?>
