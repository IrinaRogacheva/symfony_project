<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{

    public function getMenu()
    {
        $menu =  [
            [
                'image' => 'pizza/menu/images/old_pizza.jpg',
                'pizza_name' => 'Пожилая пицца',
                'description' => 'Не самые свежие помидоры и мягкие огурцы без пупырышков. Про сыр вообще молчу.',
                'cost' => '520р'
            ],
            [
                'image' => 'pizza/menu/images/50_shades_of_pizza.jpg',
                'pizza_name' => '50 оттенков пиццы',
                'description' => 'Ананасы и маринованная сельдь. Ты точно этого хочешь, больной?',
                'cost' => '420р'
            ],
            [
                'image' => 'pizza/menu/images/poodle_pizza.jpg',
                'pizza_name' => 'Пудель',
                'description' => 'Нежный сыр фета и кудрявые волосы уволенного повара. А нечего было без шапочки готовить.',
                'cost' => '530р'
            ],
            [
                'image' => 'pizza/menu/images/vanya_invent_name.jpg',
                'pizza_name' => 'Ваня, придумай название',
                'description' => 'У меня фантазия на исходе, а еще 3 макета рисовать.',
                'cost' => '520р'
            ],
        ];

        return $this->render('pizza/menu.html.twig', [
            'menu' => $menu,
        ]);
    }
}