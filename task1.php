<?php

$N = 1234567890;
$count = 0;
$length = 0;


/*$stringN = (string)$N;

$length = strlen((string)$N);
for ($i = 0; $i < $length; $i++) {
    if ((int)$stringN{$i} < 5) {
        $count++;
    }
}

echo $count;*/


while ($N/10 > 0) {
    if ($N%10 < 5) {
        $count++;
    };
    $N = floor($N/10);
}

echo $count . "\n";