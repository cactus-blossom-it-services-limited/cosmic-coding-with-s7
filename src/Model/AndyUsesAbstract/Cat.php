<?php

namespace App\Model\AndyUsesAbstract;

require_once 'Animal.php';
require_once 'Group.php';

class Cat extends Animal
{

    public function makeSound()
    {
        echo 'Miaow';
    }

    public function getName() {
        return $this->name;
    }

}