<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);
$data = [];

for ($i = 0; $i < $t; $i++) {
  $data[$i] = [
    'qty' => trim(fgets($_fp)),
    'y' => explode(' ', trim(fgets($_fp))),
  ];
}

function getNumOccurencesEqualToOrHigher($m, $data) {
  $result = 0;
  
  foreach ($data as $value) {
    if ($value >= $m) {
      $result++;
    }
  }
  
  return $result;
}

foreach($data as $rays) {
  $result = 0;
  
  foreach ($rays['y'] as $value) {
    $result = $result + ($rays['qty'] + 1)/(getNumOccurencesEqualToOrHigher($value, $rays['y']) + 1);
  }
  
  $result = sprintf('%.2f', $result);
  printf("$result\n");
}

fclose($_fp);
?>
