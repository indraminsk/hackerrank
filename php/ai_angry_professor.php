<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$t);

for($i = 0; $i < $t; $i++){
    fscanf($handle,"%d %d",$n,$k);
    $a[$i]['limit'] = $k;  
  
    $a_temp = fgets($handle);
    $a[$i]['students'] = explode(" ", trim($a_temp));
}

foreach ($a as $group => $data) {
  $limit = $data['limit'];
  
  $status = 'YES';
  foreach ($data['students'] as $student) {
    if ($student <= 0) {
      $limit--;
    }
    
    if (empty($limit)) {
      $status = 'NO';
      break;
    }
  }
  
  printf("$status\n");
}

fclose($handle);
?>
