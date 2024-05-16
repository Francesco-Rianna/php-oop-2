<?php
require_once __DIR__ . '/../Traits/Age.php';
class CatProduct extends Product{
    public $furType;
    protected $age;
    use Age;
    
    public function __construct($_name, $_description, $_price,$_category,$_image,$_furType,$_age) {
    parent::__construct($_name, $_description, $_price,$_category,$_image,);
    $this->furType= $_furType;
    $this->setAge($_age);
    
    }


}
?>