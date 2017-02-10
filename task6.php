<?php

/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.*/

for ($i = 1000; $i < 10000; $i++) {

    $number = $i;
    $count = 10;
    $resultCount = 0;

    while ($number > 0) {
        if (($number % $count) == 0 || ($number % $count) == 2 || ($number % $count) == 3 || ($number % $count) == 7) {
            $resultCount++;
        }
        $number = (int)($number / 10);
    }

    if ($resultCount == 4) {
        echo $i . "\n";
    }
}