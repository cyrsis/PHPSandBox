<?php 
require 'classes/Product.php';

$food = new Product();
$food->setProductType("Pizza");
echo 'This item is '.$food->type;
?>