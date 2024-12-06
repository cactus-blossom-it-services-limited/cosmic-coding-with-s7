<?php

namespace App\Model\AndyUsesAbstract;

require_once 'Group.php';

abstract class Animal
{
    protected $name;
    protected Group $group;

    public function __construct($name, Group $group) {
        $this->name = $name;
        $this->group = $group;
    }

    public function getGroup(): Group {
        return $this->group;
    }

    abstract public function makeSound();

    abstract public function getName();

}