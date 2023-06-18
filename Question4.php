<?php
//Write a PHP program to check the largest number among three given numbers.

function largestNumber($num1, $num2, $num3) {

    if($num1 >= $num2 && $num1 >= $num3) {
        return "The largest number is $num1.";
    } else if($num2 >= $num1 && $num2 >= $num3) {
        return "The largest number is $num2.";
    } else {
        return "The largest number is $num3.";
    }
}

// Test the function
echo largestNumber(100, 30, 10) . "\n"; 
echo largestNumber(-10, 40, 20) ;

?>
