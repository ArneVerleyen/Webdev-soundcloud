<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function getIndex() {
        $albums = Album::paginate(12);
        return view('albums.albumList',[
            'albums' => $albums
        ]);
    }



    public function show( $id) {

        $album = Album::where('id', $id)->first();

        return view('albums.album',[
            'album'=>$album
        ]);
    }
    /*
    public function show($id) {

        $album = Album::findOrFail($id);

        return view('album.albumDetail', [$album=>'album']);
    }*/
}
