<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d %d",$n,$k);

$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

$first = array_slice($a, 0, $k);
$second = array_slice($a, $k);

$rotated = array_merge($second, $first);

foreach ($rotated as $element) {
    printf("$element ");
}

fclose($handle);
?>
