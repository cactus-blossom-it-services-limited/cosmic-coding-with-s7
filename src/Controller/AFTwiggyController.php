<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AFTwiggyController extends AbstractController
{
    #[Route('/a/f/twiggy', name: 'app_af_twiggy')]
    public function index(): Response
    {
        return $this->render('af_twiggy/af_twiggy.html.twig', [
            'controller_name' => 'AFTwiggyController',
        ]);
    }
}
