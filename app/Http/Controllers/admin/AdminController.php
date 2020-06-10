<?php

namespace App\Http\Controllers\admin;

use App\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;


class AdminController extends Controller
{
    public function getIndex() {
        return view('admin.login.login');
    }

    function checkLogin (Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(

            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)) {
            return redirect('admin/blogs');
        } else {
            return back()->with('error', 'wrong email or password');
        }
    }

    public function succesLogin() {
        return view('admin.blogs.blogList');
    }

    public function logout () {
        Auth::logout();
        return view('home');
    }
}
