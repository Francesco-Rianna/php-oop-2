<?php
class Product { 
    public $name ;
    public $description ;
    public $price ;
    public $category;

    public function __construct($_name, $_description,$_price,$_category){
        $this->name = $_name ; 
        $this->description = $_description ; 
        $this->price = $_price ;
        $this->category = $_category;
    }
}
?>