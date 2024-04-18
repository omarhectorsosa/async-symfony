<?php

namespace App\MessageHandler;

use App\Message\PurchaseConfirmationNotification;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Mime\Email;

#[AsMessageHandler]

class PurchaseConfirmationNotificationHandler
{

    public function __construct(private MailerInterface $mailer)
    {

    }
    public function __invoke(PurchaseConfirmationNotification $notification){

        //TODO: 1. Create PDF contract note
        echo "Creando el PDF <br>";

        //2. Email the contract  note to the buyer
        echo "Envio el mail omarhectorsosa@gmai.com";

        $email = (new Email())
            ->from('ososa@psa.com.ar')
            ->to('omarhectorsosa@gmail.com')
            ->subject('Nota de contrato para la orden #'.$notification->getOrderId())
            ->text('Este es tu contrato. Adjunto PDF');
            //->atach()
        $this->mailer->send($email);    
    }

}

 