<?php

$n = 15;

for ($i = 1000; $i <= 9999; $i++) {
    $number = $i;
    $arr = [];
    while ($number/10 > 0) {
        $arr[] = $number % 10;
        $number = (int)($number / 10);
    }
    list($four, $three, $two, $one) = $arr;
    if (($one + $two + $three + $four) == $n) {
        echo implode(array_reverse($arr)) . "\n";
    };
}