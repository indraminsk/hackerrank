<?php
$_fp = fopen("php://stdin", "r");

$returned = explode(' ', trim(fgets($_fp)));
$expected = explode(' ', trim(fgets($_fp)));

$rDate = strtotime(sprintf("%s-%s-%s", $returned[0], $returned[1], $returned[2]));
$eDate = strtotime(sprintf("%s-%s-%s", $expected[0], $expected[1], $expected[2]));

if (($eDate - $rDate) >= 0) {
  $fine = 0;
} else {
  if ($returned[2] > $expected[2]) {
    $fine = 10000;
  } else {
    if ($returned[1] > $expected[1]) {
      $fine = 500 * ($returned[1] - $expected[1]);
    } else {
      if ($returned[0] > $expected[0]) {
        $fine = 15 * ($returned[0] - $expected[0]);
      }
    }
  }
}

printf("$fine\n");

fclose($_fp);
?>
