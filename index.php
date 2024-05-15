<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc. -->
<?php
require_once __DIR__. '/Models/Product.php' ;
require_once __DIR__. '/Models/DogProduct.php' ;
require_once __DIR__. '/Models/CatProduct.php' ;


$bosch = new Product('Bosch', 'cibo per cani', 20 ,'cani','https://shop-cdn-m.mediazs.com/bilder/1/800/70115_pla_bosch_maxiadult_15kg_2_1.jpg');
// var_dump($bosch);
$dogBed = new DogProduct('Dog Bed', 'spaziosa e comooda', 50, 'cani', 'Cuccia in legno','https://arcaplanet.vtexassets.com/arquivos/ids/216811/https---www.arcaplanet.it-media-catalog-product--b-a-baita-ferc14_1.jpg?v=637454582543530000');
// var_dump($dogBed);
$omegaSpray = new CatProduct('Omega','spray per il pelo del gatto', 19, 'gatti','https://shop-cdn-m.mediazs.com/bilder/0/400/435002_pla_felisept_fellpflege_faltschachtel_flasche_hs_01_0.jpg','pelo lungo');
// var_dump($omegaSpray);



// echo $bosch->getProduct() . '<br/>'; 
// echo $dogBed->getDogProduct() . '<br/>';
// echo $omegaSpray->getCatProduct() . '<br/>';
$products = [
    $bosch,
    $dogBed,
    $omegaSpray
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class='text-center'>I nostri prodotti</h1>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <p class="card-text"><?php echo $product->description; ?></p>
                            <p class="card-text">Prezzo: <?php echo $product->price; ?>€</p>
                            <p class="card-text">Categoria: <?php echo $product->category; ?></p>
                            <?php if ($product instanceof DogProduct) { ?>
                                <p class="card-text">Tipo Cuccia: <?php echo $product->kennels; ?></p>
                            <?php } elseif ($product instanceof CatProduct) { ?>
                                <p class="card-text">Tipo di pelo: <?php echo $product->furType; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
