<?php

for ($i = 1000; $i < 10000; $i += 2) {

    $number = $i;
    $currentNum = $number % 10;
    $up = false;
    $down = false;



    if ((int)(($number % 100)/10) < $currentNum) {
        $up = true;
    } elseif ((int)(($number % 100)/10) > $currentNum) {
        $down = true;
    } else {
        continue;
    }

    do {
        $number = (int)($number / 10);
        $lastNumber = $number % 10;

        if ($up) {
            if ($lastNumber < $currentNum) {
                $currentNum = $lastNumber;
            } else {
                break;
            }
        }
        if ($down) {
            if ($lastNumber > $currentNum) {
                $currentNum = $lastNumber;
            } else {
                break;
            }
        }
        /*if ($lastNumber == $currentNum) {
            echo "third\n";
            break;
        }*/

    } while ((int)($number/10) != 0);


    if ((int)($number/10) == 0) {
        echo $i . "\n";
    }

}