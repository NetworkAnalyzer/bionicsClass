<?php

namespace App\Listeners;

use App\Events\ContactReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\ContactReceived as ContactReceivedNotification;
use App\Notifications\Admin\ContactReceived as ContactReceivedNotificationForAdmin;
use App\Admin;

class ContactReceivedNotifier
{
    private $admin;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
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
        $this->admin->notify(new ContactReceivedNotificationForAdmin($contact));
    }
}
