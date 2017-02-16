<?php

/*Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром.
Число называется палиндромом, если его запись читается одинаково с начала и с конца.*/

$N = 1000;

for ($i = 10; $i < $N; $i++) {

    $number = $i;
    $res = 0;
    $div = 1;

    while ($number > 0) {
        $res += ($number % 10) / $div;
        $div *= 10;
        $number = (int)($number / 10);
    }

    $pol = (int)($res * $div / 10);

    if ($pol == $i) {

        $newPol = $pol * $pol;
        $newRes = 0;
        $newDiv = 1;

        while ($newPol > 0) {
            $newRes += ($newPol % 10) / $newDiv;
            $newDiv *= 10;
            $newPol = (int)($newPol / 10);
        }

        $sqrPol = (int)($newRes * $newDiv / 10);

        if (($pol * $pol) == $sqrPol) {
            echo $i . "\n";
        }
    }
}