<?php

$handle = fopen ("php://stdin","r");

$arr = array();
for($arr_i = 0; $arr_i < 6; $arr_i++) {
   $arr_temp = fgets($handle);
   $arr[] = explode(" ",$arr_temp);
  array_walk($arr[$arr_i],'intval');
}

$max = null;
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        $sum = $arr[$i][$j]
            + $arr[$i - 1][$j - 1] + $arr[$i - 1][$j] + $arr[$i - 1][$j + 1]
            + $arr[$i + 1][$j - 1] + $arr[$i + 1][$j] + $arr[$i + 1][$j + 1];
        
        if (is_null($max) || ($sum > $max)) {
            $max = $sum;
        }
    }
}

printf("$max\n");

fclose($handle);
?>
