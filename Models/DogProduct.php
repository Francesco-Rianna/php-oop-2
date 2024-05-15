<?php
class DogProduct extends Product {
    public $kennels;

    public function __construct($_name, $_description, $_price,$_category, $_kennels) {
        parent::__construct($_name, $_description, $_price,$_category);
        $this->kennels = $_kennels;
    }
    public function getDogProduct(){
        return 'Nome prodotto: '.  $this->name . '<br/>' . 'Descrizione: ' . $this->description . '<br/>' . 'Prezzo: ' . $this->price . '€'.'<br/>'. ' Categoria: ' . $this->category .'<br/>'. 'Tipo Cuccia: '. $this->kennels;
    }
}
?>