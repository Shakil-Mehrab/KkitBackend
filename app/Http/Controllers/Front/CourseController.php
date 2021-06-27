<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Orderablecourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses=Orderablecourse::latest()->get();
         return view("layout.course.course",compact('courses'));
     }
}
