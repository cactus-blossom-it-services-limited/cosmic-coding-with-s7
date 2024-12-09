<?php

namespace App\Tests\Unit\Entity;

use App\Entity\Dinosaur;
use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    public function testCanGetAndSetData(): void
    {
        $dinosaur = new Dinosaur(
            name: 'Big Eaty',
            genus: 'Tyrannosaurus',
            length: 15,
            enclosure: 'Paddock A',
        );

        self::assertSame('Big Eaty', $dinosaur->getName());
        self::assertSame('Tyrannosaurus', $dinosaur->getGenus());
        self::assertSame(15, $dinosaur->getLength());
        self::assertSame('Paddock A', $dinosaur->getEnclosure());
    }

}