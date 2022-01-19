<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;
use Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        //view the contact form
        return view('contact_form');
    }

    public function store(Request $request){
        //validation of different inputs
        $this->validate($request,[
            'name'=> 'required',
            'subject'=>'required',
            'email'=>'required|email',
            'message'=> 'required',
        ]);
        //store in database all of the input
        //ContactUs Model contains fillable inputs
        ContactUs::create($request->all());
        
        // send e-mail after getting all the input entered using mailtrap(mail config in .env)
        Mail::send('email', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'bodymessage' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('noreply@gmail.com', 'Hello Admin')->subject($request->get('subject'));
        });      
       //return to our contact form page with message confirming the message is sent
      return back()->with('success', 'Thanks for contacting us!');
    }
}
