<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%s",$time);

$time = date('H:i:s', strtotime($time));
printf("$time\n");

fclose($handle);
?>
