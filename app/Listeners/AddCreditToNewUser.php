<?php

namespace App\Listeners;

use App\Models\CreditModel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddCreditToNewUser
{
    public function handle(Registered $event): void
    {
        $user = $event->user;
        CreditModel::create([
            'ID_Users' => $user->id,
            'Nb_Credit' => 5
        ]);
    }
}
