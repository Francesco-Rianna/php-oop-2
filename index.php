<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc. -->
<?php
require_once __DIR__. '/Models/product.php' ;


$bosch = new Product('Nome Prodotto', 'Descrizione Prodotto', 100) ;
var_dump($bosch) ;

?>