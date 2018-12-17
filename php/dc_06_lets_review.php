<?php
$_fp = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$countStrings = fgets($_fp);

$output = [];
for ($i = 1; $i <= $countStrings; $i++) {
    $string = trim(fgets($_fp));
    
    $processed = [];
    for ($j = 1; $j <= strlen($string) ; $j++) {
        $index = ($j % 2) ? 'odd' : 'even';
        $processed[$index] = $processed[$index] . $string[$j - 1];
    }
    
    $output[] = sprintf('%s %s', $processed['odd'], $processed['even']);
}

foreach ($output as $string) {
    printf("$string\n");
}

fclose($_fp);
?>
