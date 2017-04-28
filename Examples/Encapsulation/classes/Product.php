<?php

class Product {

    protected $type;

    public function setProductType($value) {
        $this->type = $value;
    }

    public function getProductType() {
        return $this->type;
    }

}

?>
