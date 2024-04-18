<?php

namespace App\MessageHandler;
use App\Message\PurchaseConfirmationNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]

class PurchaseConfirmationNotificationHandler
{

    public function __invoke(PurchaseConfirmationNotification $notification){

        //1. Create PDF contract note
        echo "Creando el PDF <br>";

        //2. Email the contract  note to the buyer
        echo "Mail ".$notification->getOrder()->getBuyer()->getEmail()."<br>";

        $email = (new Email())
            ->from('sales@stocksapp.com')
            ->to($notification->getOrder()->getBuyer()->getEmail())
            ->subject('Contract note  for order '.$notification->getOrder()->getBuyer()->getId())
            ->text('Here is your contract note');
    }

}

 