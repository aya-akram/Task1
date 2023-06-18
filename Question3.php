<?php

function multiple($number) {

    if($number > 0 && ( ($number % 3 == 0) || ($number % 7 == 0))) {
        echo "$number is a multipl of 3 or 7";
    }else{
        "the number $number is not a multiple of 3 nor a multiple of 7.";
    }
   
}
echo multiple(21) . "\n";
echo multiple(49) . "\n";
echo multiple(74);


?>
