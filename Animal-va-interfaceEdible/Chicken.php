<?php
include_once "Animal.php";
include_once "Edible.php";

class Chicken extends Animal implements Edible
{
    public function makeSound(): string
    {
        return "cookoo...";// TODO: Implement makeSound() method.
    }

    public function howToEat(): string
    {
        return "Then boil it.";// TODO: Implement howToEat() method.
    }
}