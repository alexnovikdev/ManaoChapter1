<?php

/*Выяснить, есть ли в записи натурального числа N две одинаковые цифры.*/

$N = 123456789;
$count = 0;
$outerCount = 0;

while ($N > 0) {
    $copyN = $N;
    $res = $N % 10 . "\n";
    while ($copyN > 0) {
        if ($copyN % 10 == $res) {
            $count++;
        }
        $copyN = (int)($copyN / 10);
    }
    $N = (int)($N / 10);
    $outerCount++;
}

if ($outerCount == $count) {
    echo "одинаковых цифр нет";
} else {
    echo "одинаковые цифры есть";
}