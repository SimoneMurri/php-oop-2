<?php 
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Item.php';

$dogCategory = new Category('Cani');
$catCategory = new Category('Gatti');

$itemProduct = new Item('Prodotto');
$itemFood = new Item('Cibo');
$itemDogToy = new Item('Gioco');
$itemKennel = new Item('Cuccia');

$dogToy = new Product('Osso di cotone','<i class="fa-solid fa-dog"></i>','4.99', 'https://zoo-mania.it/wp-content/uploads/2023/02/WhatsApp-Image-2023-02-20-at-19.46.38.jpeg',$dogCategory, $itemDogToy);
$dogKennel = new Product('Cuccia grande e morbidosa','<i class="fa-solid fa-dog"></i>','29.99','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgRXFx6AKPWUr1vsH5inCDqMskW-F05Q6MyQ&usqp=CAU',$dogCategory,$itemKennel);
$dogFood = new Product('Crocchette','<i class="fa-solid fa-dog"></i>','19.99','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiN9TMEBqOaw8M2KqbOLwEQh6-xxMHnIPofQ&usqp=CAU', $dogCategory, $itemFood);

$catToy = new Product('Topolino giocattolo','<i class="fa-solid fa-cat"></i>', '7.99', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJD3c5DgmZoN3MNslG3miiw2vONpB04Q1iww&usqp=CAU', $catCategory, $itemDogToy);
$catKennel = new Product('Casetta per micetti', '<i class="fa-solid fa-cat"></i>', '21.99', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOWH0QD7pLIAILFd7vTAbxTZqg-QQMhXzIxg&usqp=CAU', $catCategory, $itemKennel);
$catFood = new Product('Natural trainer con pollo', '<i class="fa-solid fa-cat"></i>', '16.99', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDoA4gvkUah8HuE1nx2kqHrt3HVrHJWRBnng&usqp=CAU', $catCategory, $itemFood);
$products = [ $dogToy, $dogKennel, $dogFood, $catToy, $catKennel, $catFood ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<main class="container">
        <section class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-4 mb-5 ">
                    <div class="card h-100">
                        <img src="<?php echo $product->img; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->title; ?>
                            </h5>
                            <h6 class="card-subtitle">
                                <?php echo $product->icon; ?>
                            </h6>
                            <p>
                                <?php echo $product->category->name; ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Acquista per soli <?php echo $product->getPrice(); ?>&euro;
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>