<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);

for ($i = 1; $i <= $n; $i++) {
    for ($k = $n; $k >= ($i + 1) ; $k--) {
        echo ' ';
    }
    
    for ($j = 0; $j < $i; $j++) {
        printf('#');
    }
    
    printf("\n");
}

fclose($handle);
?>
