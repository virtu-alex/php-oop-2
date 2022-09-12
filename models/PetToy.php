<?php

class PetToy extends Product
{
    public $toy_color;
    public $toy_type;
    public $toy_dimension;

    //CONSTRUCT

    public function __construct($toy_color, $toy_type, $toy_dimension)
    {
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
}
