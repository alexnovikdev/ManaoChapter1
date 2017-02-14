<?php

/*Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7. UPD  и  И НЕ ПОВТОРЯЮТСЯ*/

for ($i = 1000; $i < 10000; $i++) {

    $number = $i;
    $div = 10;
    $resultCount = 0;

    $caseNull = 0;
    $caseTwo = 0;
    $caseThree = 0;
    $caseSeven = 0;

    while ($number > 0) {

        $num = $number % $div;

        switch ($num) {
            case 0:
                $resultCount++;
                $caseNull++;
                break;
            case 2:
                $resultCount++;
                $caseTwo++;
                break;
            case 3:
                $resultCount++;
                $caseThree++;
                break;
            case 7:
                $resultCount++;
                $caseSeven++;
                break;
            default:
                continue 3;
        }

        if ($caseNull > 1 || $caseTwo > 1 || $caseThree > 1 || $caseSeven > 1) {
            continue 2;
        }

        $number = (int)($number / $div);
    }

    if ($resultCount == 4) {
        echo $i . "\n";
    }
}