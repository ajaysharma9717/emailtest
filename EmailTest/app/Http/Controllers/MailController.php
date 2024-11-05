<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail; 
use Mail;
class MailController extends Controller
{
    public function index()
   {
        $mailData = [
                'title' => 'Test Mail',
                'body' => 'This is a test email.',
        ];
        Mail::to('ajaysharma1162002@gmail.com')->send(new TestMail($mailData));
        dd('hello');
   }
}
