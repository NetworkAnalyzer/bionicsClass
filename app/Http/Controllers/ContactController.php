<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\SubmitContact;
use App\Events\ContactReceived;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function submit(SubmitContact $request, Contact $contact)
    {
        $contact->fill($request->all())->save();
        event(new ContactReceived($contact));

        return redirect()->back();
    }
}
