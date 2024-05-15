<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc. -->
<?php
require_once __DIR__. '/Models/Product.php' ;
require_once __DIR__. '/Models/DogProduct.php' ;
require_once __DIR__. '/Models/CatProduct.php' ;


$bosch = new Product('Bosch', 'cibo per cani', 20 ,'cani') ;
var_dump($bosch);
$dogBed = new DogProduct('Dog Bed', 'spaziosa e comooda', 50, 'cani', 'Cuccia in legno');
var_dump($dogBed);
$omegaSpray = new CatProduct('Omega','spray per il pelo del gatto', 19, 'gatti','pelo lungo');
var_dump($omegaSpray);



echo $bosch->getProduct() . '<br/>'; 
echo $dogBed->getDogProduct() . '<br/>';
echo $omegaSpray->getCatProduct() . '<br/>';


?>