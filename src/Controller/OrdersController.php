<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrdersController extends AbstractController
{

public function orders()
{
    return $this->render('pizza/orders.html.twig', [
]);
}
}