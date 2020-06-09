<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HomePage;

class HomeController extends Controller
{
    public function getIndex() {


        $homes = HomePage::get()->all();

        return view('admin.home.homeList', ["homes" => $homes]);

    }

    public function getCreate() {
        return view('admin.home.homeEdit', [
					'home' => null
				]);
    }

    public function getEdit(HomePage $home) {

        return view('admin.home.homeEdit', [
            'home' => $home
        ]);
    }

    public function postSave(Request $r) {

        $validationRules = [
            'header' => 'required|max:200',
            'titel_albums' => 'required|max:100',
            'uitleg' => 'required|max:600',
            'abonneer' => 'required|max:200',
            'abonneer_btn' => 'required',
            'doneer' => 'required|max:150',
            'doneer_btn' => 'required|max:150',
            'language' => 'required|max:3',
        ];

        if($r->id) {

            $validationRules['header'] = 'required|max:200' . $r->id;
        } else {

            $validationRules['header'] = 'required|max:200';
        }

        $r->validate($validationRules);


    $data = [
    'header' => $r->header,
    'titel_albums' => $r->titel_albums,
    'uitleg' => $r->uitleg,
    'abonneer' => $r->abonneer,
    'abonneer_btn' => $r->abonneer_btn,
    'doneer' => $r->doneer,
    'doneer_btn' => $r->doneer_btn,
    'language' => $r->language,
        ];

        if($r->id) {
            // klant update
            $home = HomePage::where('id', $r->id)->first();
            $home->update($data);
        } else {

            // in de clients tabel steken
            $home = HomePage::create($data);
        }
                // dd($client);

        return redirect()->route('admin.home');
    }

    // Delete

    public function destroy (HomePage $home) {
        $home = HomePage::find($home->id);
        $home->delete();

        return redirect()->route('admin.home');
    }
}
