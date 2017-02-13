<?php

/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.*/

for ($i = 1000; $i < 10000; $i++) {

    $number = $i;
    $div = 10;
    $resultCount = 0;

    while ($number > 0) {
        if (($number % $div) == 0 || ($number % $div) == 2 || ($number % $div) == 3 || ($number % $div) == 7) {
            $resultCount++;
        }
        $number = (int)($number / $div);
    }

    if ($resultCount == 4) {
        echo $i . "\n";
    }
}