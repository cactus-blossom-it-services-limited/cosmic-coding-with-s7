<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Session\Session;

class AFSessionController extends AbstractController
{
    public function index(Request $request): Response
    {
        // This one-liner will start the session
        // No session class use statement is required
        $session = $request->getSession();
        // Or add session class use statement and two more lines
        // Add a use statement for the Request class
        // inject the Request object into the controller action
//        $session = new Session();
//        $session->start();

        $songs = [
            [
                'song' => 'Witchy Woman',
                'artist' => 'The Eagles',
                'year' => 1973,
            ],
            [
                'song' => 'Shining Star',
                'artist' => 'Earth, Wind, and Fire',
                'year' => 1975,
            ],
        ];

        $song_if_none = [
            'song' => 'Yesterday',
            'artist' => 'The Beatles',
            'year' => 1967,
        ];

        $session->set('songs', $songs);

        $session->get('thingy');
        $best_songs = $session->get('songs');
        // Provides a fallback value if the attribute is not in the session store
        $good_song = $session->get('song_if_none', $song_if_none);

        // retrieve the flash messages bag
        $flashes = $session->getFlashBag();

        // add flash messages
        $flashes->add(
            'notice',
            'AF\'s flash message: You have started a session and are retrieving songs from session variables'
        );
        $flashes->add(
            'tailwind_notice',
            'AF\'s flash message: Hey, these pages are styled using Tailwind'
        );
        return $this->render('session/af_session.html.twig', [
            'controller_name' => 'SessionController',
            'best_songs' => $best_songs,
            'good_song' => $good_song,
            'thingy' => $session->get('thingy'),
        ])->setMaxAge(100);
    }
}
