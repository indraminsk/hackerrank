<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

if (in_array($N, range(2, 20))) {
    for ($i = 1; $i <= 10; $i++) {
        $result = $N * $i;
        printf("$N x $i = $result\n");
    }
} else {
    printf("N is not in range\n");
}

fclose($handle);
?>
