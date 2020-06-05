<?php

namespace App\Http\Controllers;

use App\HomePage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex() {
        $language = app()->getLocale();

        $home = HomePage::get()->where('language', $language)->first();

        return view('home', ["home" => $home]);
    }
}
/*
