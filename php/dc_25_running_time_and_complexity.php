<?php
$_fp = fopen("php://stdin", "r");

$count = trim(fgets($_fp));
$numbers = [];

for ($i = 0; $i < $count; $i++) {
  $numbers[] = trim(fgets($_fp));
}

foreach ($numbers as $number) {
  $isPrime = true;
  $max = round(sqrt($number));
  
  if ($number == 1) {
    $isPrime = false;
  } else {
    for ($i = 2; $i <= $max; $i++) {
      if (empty($number % $i)) {
        $isPrime = false;
        break;
      }
    }
  }
  
  if ($isPrime) {
    printf("Prime \n");
  } else {
    printf("Not prime \n");
  }  
}

fclose($_fp);
?>
