<?php

namespace App\Http\Controllers;

use App\HomePage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }
    public function getIndex() {
        $language = app()->getLocale();

        $home = HomePage::get()->where('language', $language)->first();

        return view('home', ["home" => $home]);
    }
}
