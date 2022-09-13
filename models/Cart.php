<?php
require_once __DIR__ . '/Customer.php';

class Cart
{
    public $products_in_cart = [];

    public function __construct()
    {
    }
    //AGGIUNGO UN PRODOTTO
    public function addProduct($product)
    {
        $this->products_in_cart[] = $product;
    }
    public function checkout()
    {
        //TODO
    }
    //RICAVO IL TOTALE
    public function getTotal(){
        $total = 0;
        foreach($this->products_in_cart as $product){
            $total += $product->getProductPrice();
        }
    }
}