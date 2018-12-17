<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
}

$first = -1 * ($n - 1)/2;
$center = ($n + 1)/2 - 1;

for ($i = $first; $i <= abs($first); $i++) {
    $diff = $diff + $a[$center + $i][$center + $i] - $a[$center - $i][$center + $i];
}

$diff = abs($diff);
printf("$diff\n");

fclose($handle);
?>
