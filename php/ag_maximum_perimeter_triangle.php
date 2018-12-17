<?php
$_fp = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$count = fgets($_fp);
$sticks = explode(' ', trim(fgets($_fp)));

$perimeter = 0;
$selected = 0;

for ($i = 0; $i < $count; $i++) {
  for ($j = ($i + 1); $j < $count; $j++) {
    for ($k = ($j + 1); $k < $count; $k++) {
      $checked = [$sticks[$i], $sticks[$j], $sticks[$k]];
      sort($checked);

      if (($checked[0] + $checked[1]) <= $checked[2]) {
        continue;
      }

      $calc = array_sum($checked);
      if ($perimeter < $calc) {
        $perimeter = $calc;
        $selected = $checked;
      }      
    }
  }  
}

if ($perimeter) {
  printf("%s %s %s\n", $selected[0], $selected[1], $selected[2]);
} else {
  printf("-1\n");
}

fclose($_fp);
?>
