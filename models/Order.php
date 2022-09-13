<?php

class Order{
    private $address;
    private $credit_card;
    private $products;
    private $amount;
    private $status;

    public function __construct($address, $credit_card, $products, $amount)
    {
        $this->setAddress($address);
        $this->setCreditCard($credit_card);
        $this->setProducts($products);
        $this->setAmount($amount);
    }

    public function getAddress()
    {
        return $this->address;
    }
    //SETTER
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    public function getCreditCard()
    {
        return $this->credit_card;
    }
    //SETTER
    public function setCreditCard($credit_card)
    {
        $this->credit_card = $credit_card;
        return $this;
    }
    public function getProducts()
    {
        return $this->products;
    }
    //SETTER
    public function setProducts($products)
    {
        if(count($products) && count(array_filter($products, function($product){
            return $product instanceof Product;
        })))
        $this->products = $products;
        return $this;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    //SETTER
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}