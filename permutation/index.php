<?php

require "Executer.class.php";

$executor = new MyExecutor\Executor("123", 2);

echo $executor->getNumberOfPlacement();

echo "<hr/>";

$executor->getResult();

$executor->showErrors();

$executor->getValidResult();