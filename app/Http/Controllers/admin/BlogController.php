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

    public function getCreate() {
        return view('admin.blogs.blogEdit', [
					'album' => null
				]);
    }

    public function getEdit(Album $album) {

        return view('admin.blogs.blogEdit', [
            'album' => $album
        ]);
    }

    public function postSave(Request $r) {

        $validationRules = [
            'title' => 'required|max:50',
            'artist' => 'required|max:100',
            'description' => 'required|max:600',
            'beschrijving' => 'required|max:600',
            'img_url' => 'required',
            'released' => 'required|max:50',
        ];

        if($r->id) {
            // klant update
            $validationRules['title'] = 'required|max:50' . $r->id;
        } else {
            // nieuwe klant
            $validationRules['title'] = 'required|max:50';
        }

        $r->validate($validationRules);


    $data = [
    'title' => $r->title,
    'artist' => $r->artist,
    'description' => $r->description,
    'beschrijving' => $r->beschrijving,
    'img_url' => $r->img_url,
    'released' => $r->released,
        ];

        if($r->id) {
            // klant update
            $album = Album::where('id', $r->id)->first();
            $album->update($data);
        } else {

            // in de clients tabel steken
            $album = Album::create($data);
        }
                // dd($client);

        return redirect()->route('admin.blogs');
    }

    // Delete

    public function destroy (Album $album) {
        $album = Album::find($album->id);
        $album->delete();

        return redirect()->route('admin.blogs');
    }
}
