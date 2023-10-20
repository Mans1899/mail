<?php

namespace App\Http\Controllers;

use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class MailController extends Controller
{
    public function index(Request $request)
    {
        Notification::route('mail', 'taktashev.m@gmail.com')->notify(new EmailNotification());
    }
}
