<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$positive = 0;
$negative = 0;
$zero = 0;

foreach ($arr as $number) {
    if (empty($number)) {
        $zero++;
    } else {
        if ($number > 0) {
            $positive++;
        } else {
            $negtive++;
        }
    }
}

$positive = $positive/count($arr);
printf("%.6f\n", $positive);
$negtive = $negtive/count($arr);
printf("%.6f\n", $negtive);
$zero = $zero/count($arr);
printf("%.6f\n", $zero);

fclose($handle);
?>
