<?php

require "Executer.class.php";

$executor = new MyExecutor\Executor("12321", 2);

echo $executor->getNumberOfPlacement();

echo "<hr/>";

$executor->getResult();

$executor->showErrors();