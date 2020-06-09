<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;


class WebhookController extends Controller
{
    public function handle(Request $request) {
        if (! $request-> has('id')) {
            return;
        }
        $payment = Mollie::api()->payments()->get($request->id);

        $data = [
            'message' => '$request->message',
            'amount' => $request->amount,
            'currency'=> $request->currency,
        ];
        if ($payment ->isPaid()) {

            //geslaagd
            $donation = Donation::create($data);

        } else {
            //niet geslaagd
        }
    }
}
