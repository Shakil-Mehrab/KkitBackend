<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $contact=Course::latest()->first();
         return view("layout.course.course",compact('contact'));
     }
}
