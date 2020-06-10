<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;


class WebhookController extends Controller
{
    public function handle(Request $request) {
        if (! $request-> has('id')) {
            return;
        }
        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment ->isPaid()) {

            //geslaagd


        } else {
            //niet geslaagd
        }
    }
}
