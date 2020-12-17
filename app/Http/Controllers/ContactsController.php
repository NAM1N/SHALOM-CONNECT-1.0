<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactsController extends Controller
{
    public function contact()
    {
        return view('contact');
        
    }

    public function store(ContactRequest $request)
    
    {   $message = Message::create($request->only('name','email','subject','message'));

        Mail::to('admin@shalomconnect-ci.net')->queue(new ContactMessageCreated($message)); 
        
        return redirect ()->route('contact')->with('message','Votre message a bien été envoyé avec succès. Nous vous repondrons dans les plus brefs délais. ');
    }
}
