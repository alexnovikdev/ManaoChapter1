<?php

for ($i = 1000; $i < 10000; $i += 2) {

    $up = false;
    $down = false;
    $number = $i;
    $currentNum = $number % 10;


    do {

        $number = (int)($number / 10);
        $lastNumber = $number % 10;

        if ($lastNumber < $currentNum) {
            $up = true;
        } else {
            $down = true;
        }

        if ($up xor $down) {

            if ($lastNumber < $currentNum) {
                $currentNum = $lastNumber;
                $up = true;
            } elseif ($lastNumber > $currentNum) {
                $currentNum = $lastNumber;
                $down = true;
            } else {
                break;
            }
        } else {
            break;
        }

        if ((int)($number/10) == 0) {
            echo $i . "\n";
        }

    } while ((int)($number/10) != 0);
}