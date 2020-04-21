<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyPageController extends AbstractController 
{
    public function myPage()
    {
       return $this->render('my_page.html.twig');
    }
}
