<?php

class FoodProduct extends AnimalProduct
{
    public function __construct($name, $price, $category, $animalType)
    {
        parent::__construct($name, $price, $category, $animalType);
    }
}

// Sottoclasse per i giocattoli
class ToyProduct extends AnimalProduct
{
    public function __construct($name, $price, $category, $animalType)
    {
        parent::__construct($name, $price, $category, $animalType);
    }
}


class ShelterProduct extends AnimalProduct
{
    public function __construct($name, $price, $category, $animalType)
    {
        parent::__construct($name, $price, $category, $animalType);
    }
}
