<?php

class Count {

    protected static $_count;

    public function getCount() {
        return self::$_count;   
    }
    
    public static function increment(){
        self::$_count++;
    }

}

?>
