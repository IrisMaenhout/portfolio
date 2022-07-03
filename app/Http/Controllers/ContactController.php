<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMailToMe;
use App\Mail\sendMailToUser;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
            $details = [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone_nr' => $request->phone_nr,
                'subject' => $request->subject,
                'message' => $request->message
            ];

            Mail::to('irismaenhout@gmail.com')->send(New sendMailToMe($details));
            // Mail::to($_ENV["MAIL_FROM_ADDRESS"])->send(New sendMailToMe($details));
            Mail::to($details['email'])->send(New sendMailToUser($details));
            return back()->with('message_sent');

    }
}
