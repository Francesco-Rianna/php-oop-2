<?php
require_once __DIR__ . '/../Traits/Age.php';
class DogProduct extends Product {
    public $kennels;
    protected $age;

    use Age;


    public function __construct($_name, $_description, $_price,$_category, $_kennels,$_image,$_age) {
        parent::__construct($_name, $_description, $_price,$_category,$_image);
        $this->kennels = $_kennels;
        $this->setAge($_age);
        
    }
    
}
?>