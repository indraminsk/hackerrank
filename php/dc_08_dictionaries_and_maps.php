<?php
$_fp = fopen("php://stdin", "r");

/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$capacity = (int)trim(fgets($_fp));

$contacts = [];
for ($i = 0; $i < $capacity; $i++) {
    $contact = trim(fgets($_fp));

    list($name, $phone) = preg_split('/[\s]/', $contact);
    $contacts[$name] = $phone;
}

while ($name = trim(fgets($_fp))) {
    $output = (array_key_exists($name, $contacts)) ? sprintf('%s=%s', $name, $contacts[$name]) : 'Not found';
    printf("$output\n");
}

fclose($_fp);
?>
