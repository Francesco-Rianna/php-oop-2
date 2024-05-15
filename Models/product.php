<?php
class Product { 
    public $name ;
    public $description ;
    public $price ;

    public function __construct($_name, $_description,$_price){
        $this->name = $_name ; 
        $this->description = $_description ; 
        $this->price = $_price ;
    }
}
?>