<?php

include './product.php';
include './animal_product.php';
include './sub_products.php';

$products = [];

$products[] = new FoodProduct("Cibo per cani", 20.99, "Food", "Cane");
$products[] = new FoodProduct("Cibo per gatti", 18.99, "Food", "Gatto");
$products[] = new FoodProduct("Snack per cani", 10.50, "Food", "Cane");
$products[] = new FoodProduct("Snack per gatti", 8.50, "Food", "Gatto");

$products[] = new ToyProduct("Pallina per cani", 5.99, "Game", "Cane");
$products[] = new ToyProduct("Pallina per gatti", 4.50, "Game", "Gatto");
$products[] = new ToyProduct("Giocattolo per cani", 15.99, "Game", "Cane");
$products[] = new ToyProduct("Giocattolo per gatti", 12.50, "Game", "Gatto");

$products[] = new ShelterProduct("Cuccia per cani", 50.99, "Product", "Cane");
$products[] = new ShelterProduct("Cuccia per gatti", 40.50, "Product", "Gatto");
$products[] = new ShelterProduct("Tana per cani", 65.99, "Product", "Cane");
$products[] = new ShelterProduct("Tana per gatti", 55.50, "Product", "Gatto");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Classes 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center text-capitalize">my pet shop</h1>
    <div class='container'>
        <div class='row'>
            <?php

            foreach ($products as $product) {

                echo
                "<div class='card col-4'>
                    <img class='card-img-top' src='https://picsum.photos/200/300' alt='Title' />
                    <div class='card-body'>
                        <h4 class='card-title'>{$product->getName()}</h4>
                        <p class='card-text'>{$product->getPrice()}€</p>
                        <div class='d-flex justify-content-between'>
                            <span class='card-text'>Type: {$product->getCategory()}</span>
                            <span class='card-text'>{$product->getAnimalType()}</span>                       
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>