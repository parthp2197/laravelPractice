<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\_pay_sripe;

class StripePaymentController extends Controller
{
    //
    public function stripe()
    {
        return view('stripe.stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
        // $data = [
        //     "amount" => $request->amount,
        //     "year" => $request->year,
        //     "exp" => $request->exp,
        //     "name" => $request->name,
        //     "cvc" => $request->cvc,
        //     "card_number" => $request->card_number
        // ];

        // dd($data);
        $stripe = new _pay_sripe;

        $stripe->name = $request->name;
        $stripe->amount = $request->amount;
        $stripe->year = $request->year;
        $stripe->exp = $request->exp;
        $stripe->cvc = $request->cvc;
        $stripe->card_number = $request->card_number;

        $stripe->save();
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
