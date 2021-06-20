<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }
    public function send(Request $request)
    {
        Mail::send(new ContactFormMail($request));


        //$details = [
        //    'title' => 'Mail from ItSolutionStuff.com',
        //   'body' => 'This is for testing email using smtp'
        //];
        
        

        //\Mail::to('george.j.kollias@gmail.com')->send(new \App\Mail\MyTestMail($details));
        
        //$this->validate($request, [
        //   'firstName'    => 'required',
        //    'lastName'     => 'required',
        //    'emailAddress' => 'required',
        //    'phoneNumber'  => 'required',
        //    'subject'      => 'required',
        //    'yourEnquiry'  => 'required',
        //]);

        //Mail::send('emails.contact-message', [
        //    'yourEnquiry' => $request->yourEnquiry 
        //], function($mail) use($request) {
        //    $mail->from($request->emailAddress, $request->firstName);
        //});
        
        //dd("Email is Sent.");
    }
    
}
