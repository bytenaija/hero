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
    
    public function viewContact(){
        $contacts = new Contact();
        return view('admin.contactsview')->with('contacts', $contacts->latest()->get());
    }
    
    public function show($id){
         $contact =  Contact::where('id', $id)->first();
       
        
        return view('admin.contactview')->with('contact', $contact);
    }
}
