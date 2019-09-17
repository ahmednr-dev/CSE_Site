<?php

namespace App\Listeners;

use App\Mail\PostCreated;
use Illuminate\Support\Facades\Mail;

class PostCreatedListener
{

        /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to( $event->user->email)->send(new PostCreated());

    }
}
