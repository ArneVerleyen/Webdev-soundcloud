<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function getIndex() {
        $language = app()->getLocale();

        $about = About::get()->where('language', $language)->first();

        return view('about', ["about" => $about]);
    }
}
