<?php

namespace MyExecutor;

require "MyException.class.php";

class Executor {

    private $str;
    private $length;
    private $numPlacement;
    private $result;

    function __construct($string, $length) {
        $this->str = $string;
        $this->length = $length;
        $this->numberOfPlacement();
        $this->findAllPlacement();
    }

    private function toFactorial($string) {
        $string = gmp_fact($string);
        return gmp_strval($string);
    }

    private function numberOfPlacement() {
        try {
            $this->numPlacement = $this->toFactorial(strlen($this->str)) / $this->toFactorial((strlen($this->str) - $this->length));
            if (!$this->numPlacement) {
                throw new \MyException("Факториал не найден");
            }
        } catch (\MyException $e) {
            $e->writeLog();
        }
    }

    function getNumberOfPlacement() {
        return "Возможное число размещений без повторений: " . $this->numPlacement . "\n";
    }

    private function findAllPlacement() {
        try {
            $result = [];

            $arr = str_split($this->str);

            for ($k = 0; $k < $this->numPlacement / $this->length; $k++) {

                $pos = 0;

                for ($i = 0; $i < $this->length; $i++) {
                    $arrRes[] = $arr[$pos];
                    $arrRes[] = $arr[$pos + $i + 1];
                    $result[] = $arrRes;
                    $arrRes = [];
                }

                $arr[] = array_shift($arr);
            }

            $arr = array_reverse($arr);

            for ($k = 0; $k < $this->numPlacement / $this->length; $k++) {

                $pos = 0;

                for ($i = 0; $i < $this->length; $i++) {
                    $arrRes[] = $arr[$pos];
                    $arrRes[] = $arr[$pos + $i + 1];
                    $result[] = $arrRes;
                    $arrRes = [];
                }

                $arr[] = array_shift($arr);
            }

            $answer = [];

            foreach ($result as $res) {
                $answer[] = $res[0] . $res[1];
            }

            $this->result = array_unique($answer);

            if (!$this->result) {
                throw new \MyException("Результат пуст");
            }

        } catch (\MyException $e) {
            $e->writeLog();
        }
    }

    function getResult() {
        foreach ($this->result as $item) {
            print_r($item);
            echo "\n";
        }
    }

    function showErrors() {
        if (is_file("error.log") && filesize("error.log") != 0) {
            $lines = file("error.log");
            foreach ($lines as $line) {
                echo "<hr/>";
                echo $line;
            }
        } else {
            echo "<hr/>";
            echo "Ошибок нет";
        }
    }

}