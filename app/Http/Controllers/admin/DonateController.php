<?php

namespace App\Http\Controllers\admin;

use App\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function getDonationsAdmin () {
        $donations = Donation::paginate(12);
        return view('admin.donations.donateList',[
            'donations' => $donations
        ]);
    }
}
