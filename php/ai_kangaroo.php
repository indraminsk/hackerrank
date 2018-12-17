<?php

$handle = fopen ("php://stdin","r");

fscanf($handle,"%d %d %d %d",$x1,$v1,$x2,$v2);

$templateA = [
    'pos' => $x1,
    'velocity' => $v1,
];

$templateB = [
    'pos' => $x2,
    'velocity' => $v2,
];

if ($x2 > $x1) {
    $first = $templateB;
    $second = $templateA;
} else {
    $first = $templateA;
    $second = $templateB;    
}

if (($first['pos'] == $second['pos']) && ($first['velocity'] == $second['velocity'])) {
    printf("YES\n");
    return;
}

if (($first['pos'] >= $second['pos']) && ($first['velocity'] >= $second['velocity'])) {
    printf("NO\n");
    return;
}

while ($first['pos'] > $second['pos']) {
    $first['pos'] = $first['pos'] + $first['velocity'];
    $second['pos'] = $second['pos'] + $second['velocity'];
}

if ($first['pos'] == $second['pos']) {
    printf("YES\n");
} else {
    printf("NO\n");
}

fclose($handle);
?>
