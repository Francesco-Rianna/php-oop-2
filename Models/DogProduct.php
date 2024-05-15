<?php
class DogProduct extends Product {
    public $kennels;


    public function __construct($_name, $_description, $_price,$_category, $_kennels,$_image) {
        parent::__construct($_name, $_description, $_price,$_category,$_image);
        $this->kennels = $_kennels;
    }
    
    public function getProduct() {
        return 'Nome prodotto: ' . $this->name . '<br/>' . 
               'Descrizione: ' . $this->description . '<br/>' . 
               'Prezzo: ' . $this->price . '€' . '<br/>' . 
               'Categoria: ' . $this->category . '<br/>' . 
               'Tipo di cuccia :'. $this->kennels.
               '<img src="' . $this->image . '" alt="' . $this->name . '">'. '<br/>';
    }
}
?>