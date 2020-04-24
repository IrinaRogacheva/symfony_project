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
        $mainPage = true;
        $keys = ['image', 'pizza_name', 'description', 'cost'];
        $menu = explode("#", file_get_contents("pizza/data/menu.txt"));
        foreach ($menu as &$value) {
            $value = explode("|", $value);
            $value = array_combine($keys, $value);
        }

        return $this->render('pizza/menu.html.twig', [
            'menu' => $menu,
            'authorisation' => $authorisation,
            'registration' => $registration,
            'tabs' => $tabs,
            'mainPage' => $mainPage
        ]);
    }

    public function getOrders()
    {
        $authorisation = true;
        $registration = true;
        $tabs = true;
        $keys = ['number', 'order_menu', 'order_cost', 'client', 'address', 'status'];
        $anotherStatuses = [];
        $orders = explode("$", file_get_contents("pizza/data/orders.txt"));
        foreach ($orders as &$value) {
            $value = explode("|", $value);
            $value = array_combine($keys, $value);
            if ($value['status'] == 'Готово') {
                $anotherStatus = 'В очереди';
            } else {
                $anotherStatus = 'Готово';
            }
            $anotherStatuses[] = $anotherStatus;
        }

        return $this->render('pizza/orders.html.twig', [
            'authorisation' => $authorisation,
            'registration' => $registration,
            'tabs' => $tabs,
            'orders' => $orders,
            'anotherStatuses' => $anotherStatuses
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