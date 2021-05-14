<?php



include_once(dirname(__FILE__) . '/../AbtractClass/Fruit.php');


class Orange extends Fruit
{

    public function howToEat(): string
    {
        return "Orange don't need peel ";
    }
}