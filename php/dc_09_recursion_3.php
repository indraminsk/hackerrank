<?php
$_fp = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$number = fgets($_fp);

function factorial($number) {
    return ($number) ? $number * factorial($number - 1) : 1;
}

if (in_array($number, range(2, 12))) {
    $maginNumber = factorial($number);
    printf("$maginNumber\r");    
}

fclose($_fp);
?>
