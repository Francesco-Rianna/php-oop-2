<?php
class CatProduct extends Product{
    public $furType;

    public function __construct($_name, $_description, $_price,$_category,$_furType) {
    parent::__construct($_name, $_description, $_price,$_category,);
    $this->furType= $_furType;
    }

    public function getCatProduct() {
        return 'Nome prodotto: '.  $this->name . '<br/>' . 'Descrizione: ' . $this->description . '<br/>' . 'Prezzo: ' . $this->price . '€'.'<br/>'. ' Categoria: ' . $this->category .'<br/>'. 'Tipo di pelo : '. $this->furType;
    }
}
?>