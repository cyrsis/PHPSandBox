<?php

require_once 'classes/Product.php';
require_once 'classes/Book.php';
$book = new Book('Children', 8.99, '123456798');
echo $book->getProductType();
echo $book->getProductPrice();
echo $book->getProductIsbn()
?>