<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
        // dd($request->all());
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to("admin@jasakita.app")->send(new ContactMail($details));

        echo "<script>";
        echo "alert('Email Sent');";
        echo "</script>";

        return view('pages.index');
    }
}
