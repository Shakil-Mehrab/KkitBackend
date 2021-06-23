<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Support;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $slides=Slider::orderBy('id','desc')->take(5)->get();
        $courses=Course::orderBy('id','desc')->take(3)->get();
        $contact=Contact::latest()->first();
        $services=Service::orderBy('id','desc')->take(3)->get();
        $supports=Support::orderBy('id','desc')->take(6)->get();
        return view("welcome",compact('slides','courses','contact','services','supports'));
        
    }
}
