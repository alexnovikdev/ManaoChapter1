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
            $numberIt = strlen($this->str);
            $result = [];

            for ($i = 0; $i < $numberIt; $i++) {
                $first = $this->str{0};
                for ($j = 1; $j < $numberIt; $j++) {
                    $result[] = $first . $this->str{$j};
                }
                $this->str = mb_substr($this->str, 1);
                $this->str .= $first;
            }

            $this->result = $result;

            if (!$this->result) {
                throw new \MyException("Результат пуст");
            }

        } catch (\MyException $e) {
            $e->writeLog();
        }
    }

    function getResult() {
        foreach ($this->result as $item) {
            echo $item[0] . $item[1] . "\n";
        };
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