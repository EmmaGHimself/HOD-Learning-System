<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUsController extends Controller
{
     /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contact');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request)
   {
       $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
		'subject'=>'required',
        'message' => 'required'
        ]);
 
       ContactUS::create($request->all());

       \Mail::send('contactus',
       array(
           'firstname' => $request->get('firstname'),
           'lastname' => $request->get('lastname'),
           'email' => $request->get('email'),
		   'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), function($message) use ($request)
   {
      $message->from('hdfashionacademy@gmail.com');
      $message->to('emmanuelgbayes3@gmail.com', 'Admin')->subject($request->get('subject'));
   });
 
       return back()->with('success', 'Thanks for contacting us!');
   }
}
