<?php

namespace App\Listeners;

use App\Events\WelcomeNewLocation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SystemMessagesForLocation
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
     * @param  WelcomeNewLocation  $event
     * @return void
     */
    public function handle(WelcomeNewLocation $event)
    {
        dump('New Location is Created Successfully');
    }
}
