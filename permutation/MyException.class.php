<?php

class MyException extends Exception {

    function writeLog() {
        $str = $this->getCode() . ": " . $this->getMessage() . "in " . $this->getFile() . "on " . $this->getLine() . "\n";
        file_put_contents("error.log", $str, FILE_APPEND);
    }

}