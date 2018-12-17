<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

$isOdd = ($N % 2) ? true : false;

if ($isOdd or (empty($isOdd) && in_array($N, range(6, 20)))) {
    print("Weird\n");
} else {
    print("Not Weird\n");
}

fclose($handle);
?>
