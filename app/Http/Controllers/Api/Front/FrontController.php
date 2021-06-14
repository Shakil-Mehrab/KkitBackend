<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class FrontController extends Controller
{
    public function index(){
        $slides=Slider::limit(4)->get();
        return view('welcome',compact('slides'));
    }
}
