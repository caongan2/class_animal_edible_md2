<?php

include_once(dirname(__FILE__) . '/../AbtractClass/Animal.php');
include_once(dirname(__FILE__) . '/../InterfaceClass/Edible.php');

class Chicken extends Animal implements Edible
{

    public function makeSound(): string
    {
        return "Chicken: meoo meoo meoo!!!";
    }

    public function howToEat():string
    {
        return "can be baked";
    }
}