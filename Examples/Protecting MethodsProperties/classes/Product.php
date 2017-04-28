<?php
class Product{
    protected $_price;
    
    public function calculateProductVAT(){
        return $this->_price*0.20;
    }
}

?>
