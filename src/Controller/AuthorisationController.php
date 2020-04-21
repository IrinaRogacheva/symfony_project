<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthorisationController extends AbstractController
{

    public function authorisation()
    {
        return $this->render('pizza/authorisation.html.twig', [
        ]);
    }
}

