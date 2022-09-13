<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/models/Cart.php';
require_once __DIR__ . '/models/PetFood.php';
require_once __DIR__ . '/models/PetToy.php';

$cart = new Cart('Alessio', 'Cordari');
$petFood = new PetFood('Cane',6,'Croccantini','Crocchi', 25, 'I crocchi piu buoni al mondo');
$petToy = new PetToy('rosso','osso', 10, 'Ossix', 35, 'Gli ossi piu croccanti al mondo');



var_dump($cart,$petFood,$petToy);

// $cart->setCreditCard("321321",'Credit Card', '08/12/2028');

var_dump($carta);

