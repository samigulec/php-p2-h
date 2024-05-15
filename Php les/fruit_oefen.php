<?php

class Fruit{
   public $name;
   public $color;
   public $houdbaarheidsdatum;
   private $price;


   public function setPrice($prijs) {
    $this->price = $prijs; 
   }

   public function getPrice(){
    return $this->price;
   }
}



$appel = new Fruit();

$appel ->name = "elstar";
$appel ->color = "roodgeel";
$appel ->setprice = (1.50);

//var_dump($appel);
echo "De naam van het object is: " .$appel->name . "<br>";
echo "De prijs van het object is: " .$appel->getPrice() . "<br>";

$banaan = new fruit();
$banaan ->name = "banaan";
$banaan ->color = "yellow";                   

var_dump($banaan);

?>