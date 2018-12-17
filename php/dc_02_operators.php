<?php
$_fp = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$mealCost = fgets($_fp);
$tip = fgets($_fp);
$tax = fgets($_fp);

printf("The total meal cost is %d dollars.\n", round($mealCost * (1 + ($tip + $tax)/100)));

fclose($_fp);
?>
