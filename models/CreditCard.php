<?php
require_once __DIR__ . '/Customer.php';
class CreditCard
{
    protected $number;
    protected $type;
    protected $expiration_date;

    //CONSTRUCT
    public function __construct($number, $type, $expiration_date)
    {
        $this->setNumber($number);
        $this->setType($type);
        $this->setExpirationDate($expiration_date);
    }

    public function isExpired(){
        $today = strtotime(date("d-m-Y"));
        return $this->expiration_date < $today;
    }

    //GETTER
    public function getExpirationDate()
    {
        return date("d-m-Y", $this->expiration_date);
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getType()
    {
        return $this->type;
    }

    //SETTER
    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = strtotime($expiration_date);
        return $this;
    }
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}


// $user1 = new CreditCard(14091994,'Credit Card', 03/06/2026);

// var_dump($user1);