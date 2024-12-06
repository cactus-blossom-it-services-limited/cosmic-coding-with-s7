<?php

namespace App\Model\AndyUsesAbstract;

use App\Model\AndyUsesAbstract\Animal;

class Dog extends Animal
{

    public function makeSound()
    {
        echo 'Woof!';
    }
}