<?php

namespace App\Http\Controllers\Front;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index(){
        $contact=Service::latest()->first();
         return view("layout.service.service",compact('contact'));
     }
}
