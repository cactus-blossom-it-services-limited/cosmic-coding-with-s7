<?php

namespace App\Model\AndyUsesAbstract;

require_once 'Animal.php';

class Dog extends Animal
{

    public function makeSound()
    {
        echo 'Woof!';
    }

    public function getName()
    {
        return $this->name . ' (cute doggy)';
    }
}