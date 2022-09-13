<?php
require_once __DIR__ . '/Customer.php';

class Cart extends Customer
{
    public $products_in_cart = [];

    public function __construct($first_name, $last_name, $is_registered = false)
    {
        parent::__construct($first_name, $last_name, $is_registered);
    }
    public function addProduct($product)
    {
        $this->products_in_cart[] = $product;
    }
    public function checkout()
    {
        //TODO
    }
    public function getTotal(){
        $total = 0;
        foreach($this->products_in_cart as $product){
            $total += $product->getProductPrice();
        }
    }
    
}

