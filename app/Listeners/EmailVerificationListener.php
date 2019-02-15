<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use App\Jobs\EmailVerification;

class EmailVerificationListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        EmailVerification::dispatch($event);
    }
}
