<?php
include_once "Tiger.php";
include_once "Chicken.php";
include_once "Apple.php";

$tiger = new Tiger();
$chicken = new Chicken();
$apple = new Apple();

echo "<pre>";
echo $chicken->makeSound() ."<br>";
echo $tiger->makeSound() ."<br>";
echo $chicken->howToEat() ."<br>";
echo $apple->howToEat() ."<br>";
