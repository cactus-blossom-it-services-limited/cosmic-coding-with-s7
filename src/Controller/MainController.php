<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PropertyAccess\PropertyAccess;
use App\Model\Starship;

class MainController extends AbstractController
{
    #[Route('/',)]
    public function homepage(): Response
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();

        $person = [
            'first_name' => 'Wouter',
        ];

        var_dump($propertyAccessor->getValue($person, '[first_name]'));
        var_dump($propertyAccessor->getValue($person, '[age]')); // null

        $propertyAccessor1 = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();
        // instead of returning null, the code now throws an exception of type
        // Symfony\Component\PropertyAccess\Exception\NoSuchIndexException
//        $value = $propertyAccessor1->getValue($person, '[age]');

        // You can avoid the exception by adding the nullsafe ('?') operator
        $value = $propertyAccessor1->getValue($person, '[age?]');

        // Multi-dimensional arrays can be used, too
        // ...
        $persons = [
            [
                'first_name' => 'Wouter',
            ],
            [
                'first_name' => 'Ryan',
            ],
        ];
        var_dump($propertyAccessor1->getValue($persons, '[0][first_name]')); // Wouter
        var_dump($propertyAccessor1->getValue($persons, '[1][first_name]')); // Ryan

        $starsheeps = [
            new Starship(
                1,
                'USS MyCruise',
                'Garden',
                'JL',
                'taken over',
            ),
            new Starship(
                2,
                'USS Espresso',
                'Latte',
                'James',
                'repaired',
            ),
            new Starship(
                3,
                'USS Wander',
                'Delta',
                'Kathryn',
                'sous construisons',
            ),
        ];

        


///////////////////////////////////////////////////////////////////////////////////////

        /* From the SymfonyCasts tutorials */

        $starshipCount = 457;
        $myShip = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}
