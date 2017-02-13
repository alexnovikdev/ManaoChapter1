<?php

/*Выяснить, есть ли в записи натурального числа N две одинаковые цифры.*/

$N = 123456789;
$flag = false;

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
        $flag = true;
        break;
    }
    $N = (int)($N / 10);
}

if ($flag) {
    echo "одинаковые цифры есть";
} else {
    echo "одинаковых цифр нет";
}