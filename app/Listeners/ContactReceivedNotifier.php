<?php

namespace App\Listeners;

use App\Events\ContactReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\ContactReceived as ContactReceivedNotification;

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
        $contact = $event->contact;
        $contact->notify(new ContactReceivedNotification($contact));
    }
}
