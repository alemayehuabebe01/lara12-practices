<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(){
     return view('contact');
   }

   public function contactStore(Request $request){
    // save the contact form submited data
    $name = $request->name;
    $email = $request->email;
    $subject = $request->subject;
    $message = $request->message;

    

   }
}
