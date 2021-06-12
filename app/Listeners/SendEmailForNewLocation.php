<?php

namespace App\Listeners;

use App\Events\WelcomeNewLocation;
use App\Mail\WelcomeNewPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailForNewLocation
{
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  WelcomeNewLocation  $event
     * @return void
     */
    public function handle(WelcomeNewLocation $event)
    {
        Mail::to('saibniazi7@gmail.com')->send(new WelcomeNewPost());
    }
}
