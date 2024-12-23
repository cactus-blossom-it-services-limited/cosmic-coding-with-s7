<?php

namespace App\Controller;

use App\Entity\Dinosaur;
use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/',)]
    public function homepage(Request $request): Response
    {
        // This one-liner will start the session
        // No session class use statement is required
        $session = $request->getSession();
        // Or add session class use statement and two more lines
        // Add a use statement for the Request class
        // inject the Request object into the controller action
//        $session = new Session();
//        $session->start();
        $session->set('thingy', 'thingy');
        $thingy = $session->get('thingy');

        $best_songs = $session->get('songs');
//        dd($best_songs);

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

        $starliner_children = [
            new Starship(
                79,
                'HMS Childers',
                'Child',
                'John The Captain',
                'Growing',
            ),
            new Starship(
                80,
                'HMS Childing',
                'Child',
                'John Smith',
                'Growing',
            ),
            ];

        $starliner =
            new Starship(
                22,
                'HMS Compliant',
                'Able',
                'Geoff',
                'taken over',
                $starliner_children,

            );

        $starliners = [
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

        var_dump($propertyAccessor->getValue($starliner, 'id')); // 22

        var_dump($propertyAccessor->getValue($starliner, 'children[0].captain')); // John The Captain
        var_dump($propertyAccessor->getValue($starliner, 'children[1].status')); // Growing

        /* From the SymfonyCasts tutorials */

        /* From Symfonycasts Testing tutorials */

        $dinos = [
            new Dinosaur('Daisy', 'Velociraptor', 2, 'Paddock A'),
            new Dinosaur('Maverick','Pterodactyl', 7, 'Aviary 1'),
            new Dinosaur('Big Eaty', 'Tyrannosaurus', 15, 'Paddock C'),
            new Dinosaur('Dennis', 'Dilophosaurus', 6, 'Paddock B'),
            new Dinosaur('Bumpy', 'Triceratops', 10, 'Paddock B'),
        ];

        $starshipCount = 457;
        $myShip = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];

        $holiday_price = 4894;

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'myShip' => $myShip,
            'dinos' => $dinos,
            'best_songs' => $best_songs,
            'thingy' => $thingy,
            'holiday_price' => $holiday_price,
        ]);
    }
}
