<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ];

            if(isset($_FILES['file'])){
                $tmp_name = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $fileDestination = "../../reservationtool/storage/app/uploads/" . $fileName;
                move_uploaded_file($tmp_name, $fileDestination);
            }

            // Make controllers MailToMe & MailToUser and make the markdown email
            Mail::to($_ENV["MAIL_FROM_ADDRESS"])->send(New MailToMe($details));
            Mail::to($details['email'])->send(New MailToUser($details));
            return back()->with('message_sent');

    }
}
