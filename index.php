<?php

include './OutOfStockException.php';
include './trait.php';
include './product.php';
include './animal_product.php';
include './sub_products.php';

$products = [];

$products[] = new FoodProduct("Cibo per cani", 20.99, "Cane");
$products[] = new FoodProduct("Cibo per gatti", 18.99, "Gatto");
$products[] = new FoodProduct("Snack per cani", 10.50, "Cane");
$products[] = new FoodProduct("Snack per gatti", 8.50, "Gatto");

$products[] = new ToyProduct("Pallina per cani", 5.99, "Cane");
$products[] = new ToyProduct("Pallina per gatti", 4.50, "Gatto");
$products[] = new ToyProduct("Giocattolo per cani", 15.99, "Cane");
$products[] = new ToyProduct("Giocattolo per gatti", 12.50, "Gatto");

$products[] = new ShelterProduct("Cuccia per cani", 50.99, "Cane");
$products[] = new ShelterProduct("Cuccia per gatti", 40.50, "Gatto");
$products[] = new ShelterProduct("Tana per cani", 65.99, "Cane");
$products[] = new ShelterProduct("Tana per gatti", 55.50, "Gatto");

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

                $category_name;

                if (get_class($product) === 'FoodProduct') {

                    $category_name = 'Food';
                } else if (get_class($product) === 'ToyProduct') {

                    $category_name = 'Game';
                } else if (get_class($product) === 'ShelterProduct') {

                    $category_name = 'Product';
                }

                $rand_num = rand(0, 40);
                $stock_product = $product->setQuantity($rand_num);
                $class_stock;

                if ($rand_num < 10) {

                    $class_stock = 'text-danger';
                } else if ($rand_num < 25) {

                    $class_stock = 'text-warning';
                } else if ($rand_num > 25) {

                    $class_stock = 'text-success';
                }

                echo
                "<div class='card col-4'>
                    <img class='card-img-top' src='https://picsum.photos/200/300' alt='Title' />
                    <div class='card-body'>
                        <h4 class='card-title'>{$product->getName()}</h4>
                        <p class='card-text'>{$product->getPrice()}€</p>
                        <div class='d-flex justify-content-between'>
                            <span class='card-text'>Type: {$category_name}</span>
                            <span class='card-text'>{$product->getAnimalType()}</span>";

                try {
                    if ($rand_num === 0) {
                        throw new OutOfStockException();
                    }

                    echo "<span class='{$class_stock}'>{$stock_product}</span>                       
                                            </div>
                                        </div>
                                    </div>";
                } catch (OutOfStockException $e) {
                    echo "<span class='{$class_stock}'>{$e->getMessage()}</span>
                            </div>
                            </div>
                        </div>";
                }
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>