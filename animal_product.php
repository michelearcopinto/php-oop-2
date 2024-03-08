<?php

abstract class AnimalProduct extends Product
{
    protected $animalType;

    public function __construct($name, $price, $category, $animalType)
    {
        parent::__construct($name, $price, $category);
        $this->animalType = $animalType;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }
}
