<?php
require_once __DIR__ . '/CreditCard.php';

class Customer
{
    public $first_name;
    public $last_name;
    public $credit_card;
    public $is_registered;
    //CONSTRUCT
    public function __construct($first_name, $last_name, $is_registered = false)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setIsRegistered($is_registered);
    }
    //GETTER
    public function getFirstName()
    {
        return $this->first_name;
    }
    public function getLastName()
    {
        return $this->last_name;
    }
    public function getIsRegistered()
    {
        return $this->is_registered;
    }
    public function getCreditCard()
    {
        return $this->credit_card;
    }
    //SETTER
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }
    public function setCreditCard($number, $type, $exp_date)
    {
        $this->credit_card = new CreditCard($number, $type, $exp_date);
        return $this;
    }
    public function setIsRegistered($is_registered)
    {
        $this->is_registered = $is_registered;
        return $this;
    }
}
