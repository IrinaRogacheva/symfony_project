<?php
// src/Controller/MyPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyPageController extends AbstractController 
{
    public function my_page()
    {
       return $this->render('my_page.html.twig');
    }
}
