<?php
class CatProduct extends Product{
    public $furType;
    
    public function __construct($_name, $_description, $_price,$_category,$_image,$_furType) {
    parent::__construct($_name, $_description, $_price,$_category,$_image,);
    $this->furType= $_furType;
    }

   
    public function getProduct() {
        return 'Nome prodotto: ' . $this->name . '<br/>' . 
               'Descrizione: ' . $this->description . '<br/>' . 
               'Prezzo: ' . $this->price . '€' . '<br/>' . 
               'Categoria: ' . $this->category . '<br/>' . 
               '<img src="' . $this->image . '" alt="' . $this->name . '">'. '<br/>'.
               'Tipo di pelo: '. $this->furType;
               
    }
}
?>