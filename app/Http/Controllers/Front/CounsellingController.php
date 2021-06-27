<?php

namespace App\Http\Controllers\Front;

use App\Models\Counselling;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Counselling\CounsellingMail;
use App\Http\Requests\Counselling\CounsellingInputRequest;

class CounsellingController extends Controller
{
   public function store(CounsellingInputRequest $request)
   {
    $counsellig = new Counselling();
    $counsellig->name = $request['customer_name'];
    $counsellig->email = $request['customer_email'];
    $counsellig->phone = $request['phone'];
    $counsellig->slug = Str::uuid();
    $counsellig->save();
   Mail::to('kuyashaafrim18@gmail.com')->send(new CounsellingMail($counsellig));
    return back()
    ->withSuccess('Submit Created Successfully');

   }
}
