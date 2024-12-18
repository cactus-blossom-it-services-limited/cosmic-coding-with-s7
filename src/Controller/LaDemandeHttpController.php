<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LaDemandeHttpController extends AbstractController
{
    #[Route('/la-demande', name: 'app_la_demande')]
    public function laDemande(): Response
    {
        $request = Request::createFromGlobals();

        $les_détails_de_la_demande = [];
// the URI being requested (e.g. /about) minus any query parameters
        $les_détails_de_la_demande['path_info'] = $request->getPathInfo();

// retrieves $_GET and $_POST variables respectively
        $les_détails_de_la_demande['id_get_var'] = $request->query->get('id');
        $les_détails_de_la_demande['category_post_var'] = $request->getPayload()->get('category', 'default category');

// retrieves $_SERVER variables
        $request->server->get('HTTP_HOST');

// retrieves an instance of UploadedFile identified by "attachment"
        $request->files->get('attachment');

// retrieves a $_COOKIE value
        $PHPSESSID = $request->cookies->get('PHPSESSID');

// retrieves an HTTP request header, with normalized, lowercase keys
        $request->headers->get('host');
        $request->headers->get('content-type');

        $request->getMethod();    // e.g. GET, POST, PUT, DELETE or HEAD
        $request->getLanguages(); // an array of languages the client accepts

        return $this->render('la_demande_http/les_détails_de_la_demande.html.twig', [
            'controller_name' => 'LaDemandeHttpController',
            'les_détails_de_la_demande' => $les_détails_de_la_demande,
        ]);
    }
}
