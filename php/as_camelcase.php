<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%s",$s);

$parsedData = preg_split('/([A-Z])/', $s, -1, PREG_SPLIT_DELIM_CAPTURE);

$countWords = (count($parsedData) + 1)/2;
printf("$countWords\n");

fclose($handle);
?>
