<?php
class Product { 
    public $name ;
    public $description ;
    public $price ;
    public $category;
    public $image;

    public function __construct($_name, $_description,$_price,$_category,$_image){
        $this->name = $_name ; 
        $this->description = $_description ; 
        $this->price = $_price ;
        $this->category = $_category;
        $this->image = $_image;
    }

   
    // public function getProduct() {
    //     return 'Nome prodotto: ' . $this->name . '<br/>' . 
    //            'Descrizione: ' . $this->description . '<br/>' . 
    //            'Prezzo: ' . $this->price . '€' . '<br/>' . 
    //            'Categoria: ' . $this->category . '<br/>' . 
    //            'Immagine: '.'<img src="' . $this->image . '" alt="' . $this->name . '">';
    // }

}
?>