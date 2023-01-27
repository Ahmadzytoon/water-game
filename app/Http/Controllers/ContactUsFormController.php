<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;


class ContactUsFormController extends Controller
{

    // This func will show contact page
    public function createForm(Request $request) {
        return view('contact');
      }


      // Store Contact Form data
      public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());


         //  Send mail to admin
      //    \Mail::send('mail', array(
      //     'name' => $request->get('name'),
      //     'email' => $request->get('email'),
      //     'phoneNumber' => $request->get('phoneNumber'),
      //     'subject' => $request->get('subject'),
      //     'user_query' => $request->get('message'),
      // ), function($message) use ($request){
      //     $message->from($request->email);
      //     $message->to('shandaqamro@gmail.com', 'Admin')->subject($request->get('subject'));
      // });

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
  
}




}