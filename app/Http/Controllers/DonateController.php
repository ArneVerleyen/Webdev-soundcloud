<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function getDonatePage() {
        return view('donneer.donate');
    }

    public function getMakePayment() {

    $payment = Mollie::api()->payments->create([[
        "amount" => [
            "currency" => "EUR",
            "value" => "10.00" // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        "description" => "Order #12345",
        "redirectUrl" => route('webhooks.mollie'),
        "webhookUrl" => route('order.success'),
        "metadata" => [
            "order_id" => "12345",
        ],
    ]]);

    $payment = Mollie::api()->payments->get($payment->id);

    // redirect customer to Mollie checkout page
    return redirect($payment->getCheckoutUrl(), 303);

    if ($payment->isPaid()) {
    echo 'Payment received.';
    // Do your thing ...
        }
    }



}
