<?php

$N = 123456;
$currentNumber = $N % 10;

do {
    $N = (int)($N / 10);
    $lastNumber = $N % 10;
    if ($lastNumber < $currentNumber) {
        $currentNumber = $lastNumber;
    } else {
        echo "Последовательность не возрастающая";
        break;
    }
    echo $N . "\n";

} while ((int)($N/10) != 0);

if ($N == 0) {
    echo "Последовательность возрастаюшая";
}