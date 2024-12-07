<?php

namespace App\Model\AndyUsesAbstract;

include_once 'Group.php';
include_once 'Cat.php';
include_once 'Dog.php';

$cat = new Cat('Tabby', Group::Mammals);
print PHP_EOL;
$ref = new \ReflectionClass($cat);
$cl = $ref->getShortName();
print 'The name of this ' . $cl . ' is: ' . $cat->getName() . "\n\n";

print 'You will hear this animal go: ';
$cat->makeSound();
$group = $cat->getGroup();
print "\n\n" . 'This animal belongs to the group ' . $group->name . '.';
print PHP_EOL;
echo '%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%';

$dog = new Dog('Rufus', Group::Mammals);
print PHP_EOL;
$ref = new \ReflectionClass($dog);
$cl = $ref->getShortName();
print 'The name of this ' . $cl . ' is: ' . $dog->getName() . "\n\n";

print 'You will hear this animal go: ';
$dog->makeSound();
$group = $dog->getGroup();
print "\n\n" . 'This animal belongs to the group ' . $group->name . '.';
print PHP_EOL;
?>