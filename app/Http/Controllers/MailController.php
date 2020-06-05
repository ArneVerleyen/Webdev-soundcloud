<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getContact () {
        return view('contact');
    }
    public function postContact (Request $r) {

        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'subject' => $r->subject,
            'content' => $r->content,

        ];
        // return view('mails.contact', $data);

        Mail::send('mails.contact', $data, function ($message) use($r) {
            $message->sender("verleyenarne@gmail.com");
            $message->to("verleyenarne@gmail.com", 'Arne Verleyen');
            $message->cc($r->email, $r->name);
            $message->subject($r->subject);
            //$message->priority(3);
            //$message->attach('pathToFile');
        });
    }
}
