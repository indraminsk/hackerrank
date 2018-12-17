<?php

$handle = fopen("php://stdin","r");

$a = explode(' ', trim(fgets($handle)));
$b = explode(' ', trim(fgets($handle)));

$totalAScore = 0;
$totalBScore = 0;

for ($i = 0; $i < count($a); $i++) {
    if ($a[$i] !== $b[$i]) {        
        if ($a[$i] > $b[$i]) {
            $totalAScore++;
        } else {
            $totalBScore++;
        }
    }
}

printf("$totalAScore $totalBScore\n");

fclose($handle);
?>
