<?php


class Product {
   
    public $naam;
    public $prijs;
    public $categorie;

    
    public function __construct($naam, $prijs, $categorie) {
        $this->naam = $naam;
        $this->prijs = $prijs;
        $this->categorie = $categorie;
    }
}


$product1 = new Product("Laptop", 999.99, "Electronica");
$product2 = new Product("Boek", 19.95, "Boeken");
$product3 = new Product("Koffiemachine", 120.00, "Keukenapparatuur");


var_dump($product1);
var_dump($product2);
var_dump($product3);

?>
