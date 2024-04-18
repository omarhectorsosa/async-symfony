<?php

namespace App\Controller;

use App\Message\PurchaseConfirmationNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface; 
use Symfony\Component\Routing\Annotation\Route;



class StockTransactionController extends AbstractController 
{
    //buy
    #[Route('/buy', name:'buy-stock')]
    public function buy(MessageBusInterface $bus): Response
    {
        // $notification->getOrder()->getBuyer()->getEmail();
        $order = new Class{
                public function getId()
                {
                    return 1;
                }
        };

        //1. Dispatcher confirmation message
        $bus->dispatch(new PurchaseConfirmationNotification($order->getId()));

        //2. Display confirmation to the user
        return $this->render('stocks/example.html.twig');


    }
}