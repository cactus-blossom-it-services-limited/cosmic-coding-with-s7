<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AFSessionController extends AbstractController
{
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $session->set('foo', 'baz');
        $foo = $session->get('foo');

        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
            'foo' => $foo,
        ]);
    }
}
