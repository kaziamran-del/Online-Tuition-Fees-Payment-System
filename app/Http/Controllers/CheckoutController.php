<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Temporary;
use Session;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {   

        if(session('payment')){
            $amount = session('payment')['amount'];
            $amount *=100;
        }else{
            $amount = 100;
            $amount *=100;
        }

        // Enter Your Stripe Secret
        $stripe_key = \Stripe\Stripe::setApiKey('sk_test_51HeLomHYVURiJ0ImIvfG3KqavdBUMM9ZVEFu1u4gV0jMHpE94EOCRuqFkxjaUTDZLybKzc0T39vXrtgOXdjdZyoZ00PPojSFpK');

        $name = Temporary::orderBy('id', 'DESC')->first();

        //$amount =(int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([

            'amount' => $amount,
            'currency' => 'BDT',
            'description' => 'Payment From Fast Pay Service',
            'payment_method_types' => ['card'],
            'customer' => $request->get('name'),
            'source' => $request->stripeToken

        ]);

        $intent = $payment_intent->client_secret;

        $card = Temporary::orderBy('id', 'DESC')->first();

        return view('checkout.credit-card', compact(['intent', 'stripe_key','card', 'name']));

    }

    public function afterPayment()
    {
        $cards = Temporary::orderBy('id', 'DESC')->first();

        return view('checkout.after-pay', compact('cards'));
    }

}
