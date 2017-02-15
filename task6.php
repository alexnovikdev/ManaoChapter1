<?php

/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7. UPD  и  И НЕ ПОВТОРЯЮТСЯ*/

for ($i = 1000; $i < 10000; $i++) {

    $number = $i;
    $div = 10;
    $sum = 0;
    $count = 0;

    while ($number > 0) {

        $num = $number % $div;

        switch ($num) {
            case 0:

            case 2:

            case 3:

            case 7:
                $sum += $num;
                break;
            default:
                continue 3;
        }

        $number = (int)($number / $div);
    }

    if ($sum == 12 && $i % 11 != 0) {
        echo $i . "\n";
    }
}