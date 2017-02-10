<?php

for ($i = 1000; $i < 10000; $i += 2) {

    $up = false;
    $down = false;
    $number = $i;
    $currentNum = $number % 10;

    do {
        $number = (int)($number / 10);
        $lastNumber = $number % 10;

        if (($up xor $down) || $i == 1000) {
            if ($lastNumber < $currentNum) {
                $currentNum = $lastNumber;
                $up = true;
            }
            if ($lastNumber > $currentNum) {
                $currentNum = $lastNumber;
                $down = true;
            }
            if ($lastNumber == $currentNum) {
                break;
            }
        } else {
            break;
        }

    } while ((int)($number/10) != 0);

    if ((int)($number/10) == 0) {
        echo $i . "\n";
    }

}