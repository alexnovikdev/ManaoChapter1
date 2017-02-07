<?php

$n = 15;

for ($i = 1000; $i <= 9999; $i++) {
    $sum = 0;
    $number = $i;
    while ($number/10 > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    if ($sum == $n) {
        echo $i . "\n";
    };
}