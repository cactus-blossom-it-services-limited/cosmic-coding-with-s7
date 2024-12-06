<?php

namespace App\Model\AndyUsesAbstract;

require_once 'Cat.php';
require_once 'Dog.php';

    $cat = new Cat('Tabby', Group::Mammals);
    print PHP_EOL;
    $ref = new \ReflectionClass($cat);
    $cl = $ref->getShortName();
    print 'The name of this ' . $cl . ' is: ' . $cat->getName() . "\n\n";

    print 'You will hear this animal go: ';
    $cat->makeSound();
    $group = $cat->getGroup();
    print "\n\n".'This animal belongs to the group '.$group->name.'.';
    print PHP_EOL;

$dog = new Dog('', Group::Mammals);
print PHP_EOL;
$ref = new \ReflectionClass($cat);
$cl = $ref->getShortName();
print 'The name of this ' . $cl . ' is: ' . $cat->getName() . "\n\n";

print 'You will hear this animal go: ';
$cat->makeSound();
$group = $cat->getGroup();
print "\n\n".'This animal belongs to the group '.$group->name.'.';
print PHP_EOL;