<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

$swapCount = 0;

for ($i = 0; $i < $n; $i++) {
    for ($j = ($i + 1); $j < $n; $j++) {
        if ($a[$i] > $a[$j]) {
            $k = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $k;
            
            $swapCount++;
        }
    }
}

$first = reset($a);
$last = end($a);

printf("Array is sorted in $swapCount swaps.\n");
printf("First Element: $first\n");
printf("Last Element: $last\n");

fclose($handle);
?>
