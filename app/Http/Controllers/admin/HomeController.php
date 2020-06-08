<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HomePage;

class HomeController extends Controller
{
    public function getIndex() {
        $language = app()->getLocale();

        $home = HomePage::get()->where('language', $language)->first();

        return view('admin.home.homeList', ["home" => $home]);
    }
}
