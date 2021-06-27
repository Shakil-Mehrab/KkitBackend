<?php

namespace App\Http\Controllers\Front;

use App\Models\Getintouch;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Getintouch\GetintouchMail;
use App\Http\Requests\Getintouch\GetintouchInputRequest;

class GetintouchController extends Controller
{
   public function store(GetintouchInputRequest $request)
   {
    $getintouch= new Getintouch( );
    $getintouch->name = $request['name'];
    $getintouch->email = $request['email'];
    $getintouch->subject = $request['subject'];
    $getintouch->message = $request['message'];
    $getintouch->slug = Str::uuid();

    $getintouch->save();
   Mail::to('kuyashaafrim18@gmail.com')->send(new GetintouchMail($getintouch));
    return back()
    ->withSuccess('Send mail Successfully');

   }
}
