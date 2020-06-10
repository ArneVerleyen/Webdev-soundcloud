<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;
use App\Donation;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function getDonatePage() {
        return view('donneer.donate');
    }

    public function getMakePayment(Request $r)
    {   $value = (string)$r->amount;
        $currency = (string)$r->currency;
        $message = (string)$r->message;


        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => $currency,
                "value" => $value // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => $message,
            "redirectUrl" => route('donate', app()->getLocale()),
            "webhookUrl" => 'https://0de5f2afd2d9.ngrok.io/webhooks/mollie'
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        $data = [
            'message' => $payment->description,
            'amount' => $payment->amount->value,
            'currency'=> $payment->amount->currency,
        ];

        $donation = Donation::create($data);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function getDonations () {
        $donations = Donation::paginate(12);
        return view('donneer.donateList',[
            'donations' => $donations
        ]);
    }


}
