<?php

/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7. UPD  и  И НЕ ПОВТОРЯЮТСЯ*/

for ($i = 1000; $i < 10000; $i++) {

    $number = $i;
    $div = 10;
    $count = 0;
    $sum = 0;

    while ($number > 0) {

        $copyI = $i;
        $num = $number % $div;

        switch ($num) {
            case 0:

            case 2:

            case 3:

            case 7:
                if ((int)($copyI / $div) % $div == $copyI % $div) {
                    continue 3;
                }
                $count++;
                $sum += $num;
                break;
            default:
                continue 3;
        }

        $number = (int)($number / $div);

        if ($count == 4 && $sum == 12) {
            echo $i . "\n";
        }
    }
}