<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$S);

try {
    $r = 0 % $S;
    printf("$S\n");
} catch (DivisionByZeroError $e) {
    printf("Bad String\n");
}

fclose($handle);
?>
