<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

function addition($a, $b) {
    $count = strlen($a);
    $result = null;
    $increment = 0;
    
    for ($i = ($count - 1); $i >= 0 ; $i--) {
        if (isset($b[$i])) {
            $current = $increment + $a[$i] + $b[$i];
            
            if ($current > 9) {
                $increment = 1;
                $current = (string)$current;
                
                $result = (is_null($result)) ?
                    $current[strlen($current) - 1] :
                    $current[strlen($current) - 1] . $result;
            } else {
                $result = (is_null($result)) ? $current : $current . $result;
                $increment = 0;
            }
        } else {
           $result = (is_null($result)) ? ($a[$i] + $increment) : ($a[$i] + $increment) . $result;
        }
    }
    
    if ($increment) {
        $result = $increment . $result;
    }
    
    return $result; 
}

$summa = 0;
foreach ($arr as $number) {
    $numuber = trim($number);
    
    if (empty($summa)) {
        $summa = $number;
        continue;
    }
    
    $summa = (strlen($summa) >= strlen($number)) ? addition($summa, $number) : addition($number, $summa);
}

printf($summa);

fclose($handle);
?>
