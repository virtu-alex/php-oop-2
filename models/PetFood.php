<?php

class PetFood extends Product
{
    public $pet_genre;
    public $pet_age;
    public $food_type;

    //CONSTRUCT
    public function __construct($pet_genre, $pet_age, $food_type)
    {
        $this->setPetGenre($pet_genre);
        $this->setPetAge($pet_age);
        $this->setFoodType($food_type);
    }

    //SETTER
    public function setPetGenre($pet_genre)
    {
        $this->pet_genre = $pet_genre;
        return $this;
    }
    public function setPetAge($pet_age)
    {
        $this->pet_age = $pet_age;
        return $this;
    }
    public function setFoodType($food_type)
    {
        $this->food_type = $food_type;
        return $this;
    }

    //GETTER
    public function getPetGenre()
    {
        return $this->pet_genre;
    }
    public function getPetAge()
    {
        return $this->pet_age;
    }
    public function getFoodType()
    {
        return $this->food_type;
    }
}
