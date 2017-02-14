<?php

/*Выяснить, есть ли в записи натурального числа N две одинаковые цифры.*/

$N = 123456789;
$flag = false;

while ($N > 0) {
    $count = 0;
    $res = $N % 10;
    $N = (int)($N / 10);
    $copyN = $N;
    while ($copyN > 0) {
        if ($copyN % 10 == $res) {
            $flag = true;
            break 2;
        }
        $copyN = (int)($copyN / 10);
    }
}

if ($flag) {
    echo "одинаковые цифры есть";
} else {
    echo "одинаковых цифр нет";
}