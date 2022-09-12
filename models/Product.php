<?php


class Product
{
    public $product_name;
    public $product_price;
    public $product_description;
    //CONSTRUCT
    public function __construct($product_name, $product_price, $product_description)
    {
        $this->setProductName($product_name);
        $this->setProductPrice($product_price);
        $this->setProductDescription($product_description);
    }
    //GETTER
    public function getProductName()
    {
        return $this->product_name;
    }
    public function getProductPrice()
    {
        return $this->product_price;
    }
    public function getProductDescription()
    {
        return $this->product_description;
    }
    //SETTER
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
        return $this;
    }
    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;
        return $this;
    }
    public function setProductDescription($product_description)
    {
        $this->product_description = $product_description;
        return $this;
    }
}
