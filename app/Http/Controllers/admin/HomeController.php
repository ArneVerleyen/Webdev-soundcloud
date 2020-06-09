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
            'donneer' => 'required|max:150',
            'donneer_btn' => 'required|max:150',
            'language' => 'required|max:3',
        ];

        if($r->language) {

            $validationRules['header'] = 'required|max:200' . $r->language;
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
    'donneer' => $r->donneer,
    'donneer_btn' => $r->donneer_btn,
    'language' => $r->language,
        ];

        if($r->language) {
            // klant update
            $home = HomePage::where('language', $r->language)->first();
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
        $home = HomePage::find($home->language);
        $home->delete();

        return redirect()->route('admin.home');
    }
}
