<?php

for ($i = 1000; $i < 10000; $i += 2) {

    if ($i % 2 != 0) {
        continue;
    }

    $number = $i;
    $currentNum = $number % 10;

    do {
        $number = (int)($number / 10);
        $lastNumber = $number % 10;

        if ($lastNumber < $currentNum) {
            $currentNum = $lastNumber;
        } else {
            break;
        }

        if ((int)($number/10) == 0) {
            echo $i . "\n";
        }

    } while ((int)($number/10) != 0);

    $number = $i;
    $currentNum = $number % 10;

    do {
        $number = (int)($number / 10);
        $lastNumber = $number % 10;

        if ($lastNumber > $currentNum) {
            $currentNum = $lastNumber;
        } else {
            break;
        }

        if ((int)($number/10) == 0) {
            echo $i . "\n";
        }

    } while ((int)($number/10) != 0);
}