<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$summa = array_sum($arr);
printf("$summa\n");

fclose($handle);
?>
