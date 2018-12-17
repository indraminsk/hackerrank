<?php
$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$N);

$contacts = [];
for($a0 = 0; $a0 < $N; $a0++){
  fscanf($handle,"%s %s", $firstName, $emailID);
  
  if (preg_match('/@gmail.com$/', $emailID)) {
    $contacts[] = $firstName;
  }
}

sort($contacts);
foreach ($contacts as $contact) {
  printf("$contact\n");
}

fclose($handle);
?>
