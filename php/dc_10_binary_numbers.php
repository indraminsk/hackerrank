<?php

$handle = fopen("php://stdin","r");

fscanf($handle,"%d",$n);

$binary = decbin($n);

$maxSequenceCount = 0;
$resultSequenceCount = 0;

for ($i = 0; $i < strlen($binary); $i++) {
    if ($binary[$i]) {
        $maxSequenceCount++;
        
        if ($maxSequenceCount > $resultSequenceCount) {
            $resultSequenceCount = $maxSequenceCount;
        }
    } else {        
        $maxSequenceCount = 0;
    }
}

printf("$resultSequenceCount\n");

fclose($handle);
?>
