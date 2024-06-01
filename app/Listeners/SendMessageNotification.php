<?php

namespace App\Listeners;


use App\Events\MessageSent;

class SendMessageNotification
{
    /**
     * Crée une nouvelle instance du listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Gère l'événement.
     *
     * @param  MessageSent  $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        // Logique pour gérer l'événement
        // Par exemple, envoyer une notification ou exécuter d'autres actions
    }
}
