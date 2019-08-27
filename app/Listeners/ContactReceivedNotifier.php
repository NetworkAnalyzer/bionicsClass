<?php

namespace App\Listeners;

use App\Events\ContactReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactReceivedNotifier
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
     * @param  ContactReceived  $event
     * @return void
     */
    public function handle(ContactReceived $event)
    {
        //
    }
}
