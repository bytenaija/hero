<?php

namespace App\Http\Controllers;

use Request;
use App\Contact;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function postContact(ContactRequest $request){
        $input = Request::all();
        Contact::create($input);
        $name = Request::get('name');
     return view('contactsuccess')->with('name', $name);          
    }
    
}
