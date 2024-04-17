<?php

namespace App\MessageHandler;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]

class PurchaseConfirmationNotificationHandler {

    public function __invoke(PurchaseConfirmationNotification $notification){

        //1. Create PDF contract note
        echo "Creando el PDF <br>";

        //2. Email the contract  note to the buyer
        echo "Mail ".$notification->getOrder()->getBuyer()->getEmail()."<br>";


    }

}

 