<?php

$N = 123456789;
$count = 1;
$M = 0;

while ($N > 0) {

    $M += ($N % 10) / $count;
    $count *= 10;
    $N = (int)($N / 10);

}

echo $M * ($count / 10);