<?php

class Product {

    const VAT = 0.20;

    protected $_price;

    public function calculatorProductVAT() {
        return $this->_price * VAT;
    }

}

?>
