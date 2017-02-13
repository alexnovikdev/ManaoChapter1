<?php

/*Выяснить, есть ли в записи натурального числа N две одинаковые цифры.*/

$N = 123456789;

while ($N > 0) {
    $count = 0;
    $copyN = $N;
    $res = $N % 10;
    while ($copyN > 0) {
        if ($copyN % 10 == $res) {
            $count++;
        }
        $copyN = (int)($copyN / 10);
    }
    if ($count > 1) {
        echo "одинаковые цифры есть";
        exit;
    }
    $N = (int)($N / 10);
}

echo "одинаковых цифр нет";