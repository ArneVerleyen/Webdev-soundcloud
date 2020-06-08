<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Album;

class BlogController extends Controller
{
    public function getIndex() {
        $albums = Album::paginate(18);
        return view('admin.blogs.blogList',[
            'albums' => $albums
        ]);
    }
}
