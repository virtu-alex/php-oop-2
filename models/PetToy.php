<?php

require_once __DIR__ . '/Product.php';

class PetToy extends Product
{
    public $toy_color;
    public $toy_type;
    public $toy_dimension;

    //CONSTRUCT

    public function __construct($toy_color, $toy_type, $toy_dimension, $product_name, $product_price, $product_description)
    {
        parent::__construct($product_name, $product_price, $product_description);
        $this->setToyColor($toy_color);
        $this->setToyType($toy_type);
        $this->getToyDimension($toy_dimension);
    }
    //SETTER

    public function setToyColor($toy_color)
    {
        $this->toy_color = $toy_color;
        return $this;
    }
    public function setToyType($toy_type)
    {
        $this->toy_type = $toy_type;
        return $this;
    }
    public function setToyDimension($toy_dimension)
    {
        $this->toy_dimension = $toy_dimension;
        return $this;
    }
    //GETTER

    public function getToyColor()
    {
        return $this->toy_color;
    }
    public function getToyType()
    {
        return $this->toy_type;
    }
    public function getToyDimension()
    {
        return $this->toy_dimension;
    }
    public function getDiscountedPrice($perc)
    {
        $discounted_price = $this->product_price - ($this->product_price * $perc * 20 / 100);
        return number_format($discounted_price, 2);

    }
}
