<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
        $details = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required|min:8',
            'message' => 'required'
        ]);

        Mail::to("admin@jasakita.app")->send(new ContactMail($details));

        return redirect('/')->with('status', 'Pesan kamu berhasil terkirim. Terima kasih');
    }
}
