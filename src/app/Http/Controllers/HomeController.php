<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ThankYouMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contactMe(Request $request)
    {
        Mail::to(env('MAIL_ADMIN_ADDRESS'))->send(new ContactMail($request->all()));
        Mail::to($request->get('con_email'))->send(new ThankYouMail($request->get('con_name')));
    }
}
