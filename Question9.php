<?php
//Write a PHP program to reverse any string. (Don't use "strrev" function.)

function reverse($str) {
    $reversed = "";

    for($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

// Test the function
echo reverse("Aya Akram") ;


?>
