<?php

$N = 1234567890;
$count = 0;
$stringN = (string)$N;

$length = strlen((string)$N);
for ($i = 0; $i < $length; $i++) {
    if ((int)$stringN{$i} < 5) {
        $count++;
    }
}

echo $count;

// https://github.com/alexnovikdev/ManaoChapter1/blob/master/task1.php