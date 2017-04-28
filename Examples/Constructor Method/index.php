<?php

require_once 'classes/Product.php';

$book = new Product('book', 8.99);
 echo 'Type of product is '.$book->getProductType().' and price is '.$book->getProductPrice();
?>