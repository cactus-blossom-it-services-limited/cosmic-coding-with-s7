<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AFFormController extends AbstractController
{
    #[Route('/a/f/form', name: 'app_a_f_form')]
    public function index(): Response
    {
        return $this->render('af_form/index.html.twig', [
            'controller_name' => 'AFFormController',
        ]);
    }
}
