<?php

class Book extends Product {

    public function __construct($price) {
        $this->_price = $price;
    }
    
    public function calculatorProductVAT() {
        return $this->_price * self::VAT;
    }

}

?>
