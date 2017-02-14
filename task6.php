<?php

/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7. UPD  и  И НЕ ПОВТОРЯЮТСЯ*/

for ($i = 1000; $i < 10000; $i++) {

    $number = $i;
    $innerNumber = $i;
    $div = 10;
    $resultCount = 0;

    while ($number > 0) {

        $num = $number % $div;

        switch ($num) {
            case 0:

            case 2:

            case 3:

            case 7:
                while ($innerNumber > 0) {
                    $innerNumber = (int)($innerNumber / 10);
                    if (($innerNumber % 10) == $num) {
                        continue 4;
                    }
                }
                $resultCount++;
                break;
            default:
                continue 3;
        }

        $number = (int)($number / $div);
    }



    if ($resultCount == 4) {
        echo $i . "\n";
    }
}