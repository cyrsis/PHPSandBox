<?php

require_once 'classes/Product.php';
require_once 'classes/Book.php';
$book = new Book(8.99);
echo '$'.$book->calculateProductVAT()
?>