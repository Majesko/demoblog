<?php

namespace App\Listeners;

use App\Mail\UserRegistred;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class UserRegistredNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistred  $event
     * @return void
     */
    public function handle(\App\Events\UserRegistred $event)
    {
        Mail::to($event->user->email)->send(new UserRegistred($event->user));
    }
}
