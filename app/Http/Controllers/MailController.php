<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact_us(){
        return view("mail.contact_us");
    }

    public function send_email(Request $request){
        $username = $request->username;
        $email = $request->email;
        $content = $request->content;

        Mail::to($email)->send(new ContactMail($username, $email, $content));

        return redirect(route("home"));
    }
}
