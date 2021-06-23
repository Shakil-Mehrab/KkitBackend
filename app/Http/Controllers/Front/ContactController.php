<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
       $contact=Contact::latest()->first();
        return view("layout.contact.contactUs",compact('contact'));
    }
}
