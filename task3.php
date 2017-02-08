<?php

$N = 123456;
$currentNumber = ($N % 10) + 1;
while ($N/10 > 0) {
    $lastNumber = $N % 10;
    if ($lastNumber < $currentNumber) {
        $currentNumber = $lastNumber;
        $N = (int)($N / 10);
    } else {
        echo "Последовательность не возрастающая";
        break;
    }
}
if ($N == 0) {
    echo "Последовательность возрастаюшая";
}
