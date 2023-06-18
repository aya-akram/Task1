<?php
//Write a PHP program to count the number of occurrences of any digit in a string.

function countNumbers($str) {
    $counts = array();

    for($i = 0; $i <= 9; $i++) {
        $counts[$i] = 0;
    }

    for($i = 0; $i < strlen($str); $i++) {
        if(is_numeric($str[$i])) {
            $counts[$str[$i]]++;
        }
    }
    return $counts;
}

$counts = countNumbers("Aya12345Akram6789019");
foreach($counts as $digit => $count) {
    echo "Digit $digit: $count occurrences\n";
}

?>
