<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

foreach (array_reverse($arr) as $item) {
    printf(sprintf('%s ', $item));
}

printf("\n");

fclose($handle);
?>
