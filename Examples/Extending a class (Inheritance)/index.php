<?php

require_once 'classes/Product.php';
require_once 'classes/Book.php';
$book = new Book('children');
$book->setProductIsbn('123456789');

echo 'This ' . $book->getProductType() . ' book has isbn ' . $book->getProductIsbn();
?>