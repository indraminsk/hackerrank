<?php
$_fp = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$settings = explode(" ", fgets($_fp));
$data = explode(" ", trim(fgets($_fp)));

$requests = array();
for($a_i = 0; $a_i < $settings[2]; $a_i++) {
    $a_temp = fgets($_fp);
    $requests[] = trim($a_temp);
}

function newIndex($index, $settings) {
    if ($index >= $settings[0]) {
        $index = $index - $settings[0];
        //var_dump([$index, $settings[0]]);
        
        if ($index >= $settings[0]) {
            $index = newIndex($index, $settings);
        }
    }
    
    return $index;
}

$updatedData = [];
foreach ($data as $pos => $element) {
    $newIndex = newIndex($pos + $settings[1], $settings);
    
    $updatedData[$newIndex] = $element;
}

ksort($updatedData);
foreach ($requests as $q) {
    printf("$updatedData[$q]\n");
}

fclose($_fp);
?>
