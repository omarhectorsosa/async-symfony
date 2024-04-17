<?php

namespace App\Message;

class PurchaseConfirmationNotification {

    public function __construct(){

    }

    public function getOrder(): object
    {
        return $this->order;
    }
}

