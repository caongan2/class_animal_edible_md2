<?php

include_once(dirname(__FILE__) . '/../AbtractClass/Animal.php');
include_once(dirname(__FILE__) . '/../InterfaceClass/Edible.php');

class Tiger extends Animal implements Edible
{

    public function makeSound(): string
    {
        return "Tiger: gau gau gaau";
    }

    public function howToEat():string
    {
        return "Nấu cao,.";
    }
}