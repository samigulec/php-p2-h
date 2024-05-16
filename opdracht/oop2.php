<?php

class Product
{
    public $name = "Een bepaald spel";
}

$game1 = new Product();
$game1->name = "rainbow 6";

$game2 = new Product();
$game2->name = "clash of clan ";

$game3 = new Product();
$game3->name = "fifa";

echo $game1->name."<br>";
echo $game2->name."<br>";
echo $game3->name."<br>";

$game1->name = "Rainbow";
echo $game1->name;

var_dump($game1);
var_dump($game2);



?>
