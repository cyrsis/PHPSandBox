<?php

require_once 'classes/Calculator.php';
$calc = new Calculator();

$calc->add(10);
$calc->add(5);
$calc->subtract(2);

echo $calc->getTotal();
?>