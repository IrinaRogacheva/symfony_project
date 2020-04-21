<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{

    public function addingPizzas()
    {
        $menu = [
            'image' => [
                'pizza/menu/images/pizza 1.jpg', 'pizza/menu/images/pizza 2.jpg',
                'pizza/menu/images/pizza 3.jpg', 'pizza/menu/images/pizza 4.jpg'
            ],
            'pizza_name' => [
                'Пожилая пицца', '50  оттенков пиццы', 'Пудель', 'Ваня, придумай название'
            ],
            'description' => [
                'Не самые свежие помидоры и мягкие огурцы без пупырышков. Про сыр вообще молчу.',
                'Ананасы и маринованная сельдь. Ты точно этого хочешь, больной?',
                'Нежный сыр фета и кудрявые волосы уволенного повара. А нечего было без шапочки готовить.',
                'У меня фантазия на исходе, а еще 3 макета рисовать.'
            ],
            'cost' => [
                '520р', '420р', '530р', '520р'
            ]
        ];

        return $this->render('pizza/menu.html.twig', [
            'menu' => $menu,
        ]);
    }
}