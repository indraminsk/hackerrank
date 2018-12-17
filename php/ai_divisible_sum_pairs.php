<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d %d",$n,$k);

$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

$pairCount = 0;
for ($i = 0; $i < ($n - 1); $i++) {
  for ($j = ($i + 1); $j < $n; $j++) {
    if (empty(($a[$i] + $a[$j]) % $k)) {
      $pairCount++;
    }
  }
}

printf("$pairCount\n");

fclose($handle);
?>
