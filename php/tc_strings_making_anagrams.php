<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%s",$a);
fscanf($handle,"%s",$b);

$a = preg_split('//', trim($a), -1, PREG_SPLIT_NO_EMPTY);
$b = preg_split('//', trim($b), -1, PREG_SPLIT_NO_EMPTY);

sort($a);
sort($b);

$diffAB = array_diff($a, $b);
$diffBA = array_diff($b, $a);

$commonAB = array_intersect($a, $b);
$commonBA = array_intersect($b, $a);

$frqCAB = array_count_values($commonAB);
$frqCBA = array_count_values($commonBA);

$deletingCount = count($diffAB) + count($diffBA);

foreach ($frqCAB as $letter => $count) {
    if ($count != $frqCBA[$letter]) {
        $deletingCount = $deletingCount + abs($count - $frqCBA[$letter]);
    }
}

printf("$deletingCount\n");

fclose($handle);
?>
