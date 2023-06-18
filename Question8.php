<?php
//Write a PHP program to return the sum of digits of an integer number.

function sumOfDigits($num) {
    $str = strval($num);
    $sum = 0;

    for($i = 0; $i < strlen($str); $i++) {
        if(is_numeric($str[$i])) {
            $sum += $str[$i];
        }
    }

    return $sum;
}

echo sumOfDigits(12345) . "\n"; 
echo sumOfDigits(880) ;

?>
