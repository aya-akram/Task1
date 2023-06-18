<?php
//Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal.

function nearestTo100($num1, $num2) {
    if($num1 == $num2) {
        return 0;
    }

    $x1 = abs($num1 - 100);
    $x2 = abs($num2 - 100);

    if($x1 < $x2) {
        return "The number $num1 is nearest to 100.";
    } else {
        return "The number $num2 is nearest to 100.";
    }
}

echo nearestTo100(89, 105) . "\n"; 
echo nearestTo100(20, 110) . "\n"; 
echo nearestTo100(100, 100) . "\n"; 

?>
