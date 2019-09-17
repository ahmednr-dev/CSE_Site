<?php

namespace App\Http\Controllers\pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Blog;

// Class Mail 
use Illuminate\Support\Facades\Mail;

// invoke Class ContactUs  app\Mail\ContactUs

use App\Mail\ContactUs; // Create Action For Mail do send Come From Contact Page / Views



class ContactController extends Controller
{
        
        public function contact(){  return view('pages.contact');}

        // dosend Take Request From-> Form 
        
    public function dosend(Request $request){ 
            // simple Validation 
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'messages'=>'required'
                 ]);
        // Access to Receve input  
       $name =  $request->input('name');
       $email =  $request->input('email');
       $messages =  $request->input('messages');

        // Reciver Email 
        Mail::to('engineerahmadnour@gmail.com')
     ->send(new ContactUs($name,$email,$messages)); // send() take class Mailable -> new Classname and Variable Data
        // Redirect After SendMail 
        return redirect('\contact')->with('success','Your message has been sent');
    }

}
