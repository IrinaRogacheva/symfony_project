<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PizzaController extends AbstractController
{
    public function getMenu()
    {
        $authorisation = true;
        $registration = true;
        $tabs = true;
        $main_page = true;
        $menu =  [
            [
                'image' => 'pizza/images/old_pizza.jpg',
                'pizza_name' => 'Пожилая пицца',
                'description' => 'Не самые свежие помидоры и мягкие огурцы без пупырышков. Про сыр вообще молчу.',
                'cost' => '520р'
            ],
            [
                'image' => 'pizza/images/50_shades_of_pizza.jpg',
                'pizza_name' => '50 оттенков пиццы',
                'description' => 'Ананасы и маринованная сельдь. Ты точно этого хочешь, больной?',
                'cost' => '420р'
            ],
            [
                'image' => 'pizza/images/poodle_pizza.jpg',
                'pizza_name' => 'Пудель',
                'description' => 'Нежный сыр фета и кудрявые волосы уволенного повара. А нечего было без шапочки готовить.',
                'cost' => '530р'
            ],
            [
                'image' => 'pizza/images/vanya_invent_name.jpg',
                'pizza_name' => 'Ваня, придумай название',
                'description' => 'У меня фантазия на исходе, а еще 3 макета рисовать.',
                'cost' => '520р'
            ],
        ];

        return $this->render('pizza/menu.html.twig', [
            'menu' => $menu,
            'authorisation' => $authorisation,
            'registration' => $registration,
            'tabs' => $tabs,
            'main_page' => $main_page
        ]);
    }

    public function getOrders()
    {
        $authorisation = true;
        $registration = true;
        $tabs = true;

        return $this->render('pizza/orders.html.twig', [
            'authorisation' => $authorisation,
            'registration' => $registration,
            'tabs' => $tabs
        ]);
    }

    public function authorisation()
    {
        $authorisation = false;
        $registration = true;

        return $this->render('pizza/authorisation.html.twig', [
            'authorisation' => $authorisation,
            'registration' => $registration,
        ]);
    }

    public function registration()
    {
        $authorisation = true;
        $registration = false;

        return $this->render('pizza/registration.html.twig', [
            'authorisation' => $authorisation,
            'registration' => $registration,
        ]);
    }
}