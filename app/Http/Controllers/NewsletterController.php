<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Spatie\Newsletter\Newsletter;
// use Newsletter;
use Spatie\Newsletter\NewsletterFacade as Newsletter;



class NewsletterController extends Controller
{
    public function getSubscribe () {
        return view('newsletter.subscribe');
    }

    public function postSubscriber ($lang,  Request $r) {
       // Newsletter::subscribePending($r->email);
       // return redirect('/subscribe', app()->getLocale())->with('succes', 'check your mail!');
       if(! Newsletter::isSubscribed($r->email)) {
             Newsletter::subscribe('rincewind@discworld.com');
            return view('newsletter.subscribe')->with('succes', 'check your e-mail!');
        }

        return redirect('/subscribe')->with('failure', 'sorry you are already subscribed');
    }
}

