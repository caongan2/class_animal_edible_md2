<?php
include_once(dirname(__FILE__) . '/../AbtractClass/Fruit.php');

class Apple extends Fruit
{

   public function howToEat(): string
   {
      return "Apple need peel ";
   }
}