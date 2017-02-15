<?php

/*Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.*/

for ($i = 1000; $i < 10000; $i++) {

    $number = $i;

    while ($number > 0) {

        $copyNumber = $number;
        $res = $copyNumber % 10;

        while ($copyNumber > 0) {
            $copyNumber = (int)($copyNumber / 10);
            if ($copyNumber % 10 == $res) {
                continue 3;
            }
        }

        $number = (int)($number / 10);
    }

    echo $i . "\n";
}