<?php

namespace App\Model\AndyUsesAbstract;

include_once 'Animal.php';

class Cat extends Animal
{

    public function makeSound()
    {
        echo 'Miaow';
    }

    public function getName() {
        return $this->name . ' (feline sounding)';
    }

}