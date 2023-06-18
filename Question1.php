<?php
//Write a PHP program to check whether the first two characters and last two characters of a give string are same.
function check($str) {
    if(strlen($str) < 2) {
        return "The string is too short!";
    }

    $firstTwoChars = substr($str, 0, 2);
    $lastTwoChars = substr($str, -2);

    if($firstTwoChars == $lastTwoChars) {
        return "First two characters and last two characters are the same.";
    } else {
        return "First two characters and last two characters are not the same.";
    }
}

echo check("abcab") . "\n"; 
echo check("abcde") . "\n"; 

?>