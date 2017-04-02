<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
//    public function step1()
//    {
//   	if(Auth::check()){
//    		return redirect()->route('checkout.shipping');
//    	}

//    	return redirect('login');
 //   }

    public function shipping()
    {
    	return view('front.shipping-info');
    }

    public function payment()
    {
        return view('front.payment');
    }

    public function storePayment(Request $request)
    {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_GBOqNjE8AGxSGbbfzktGDm7J");

        // Token is created using Stripe.js or Checkout!
        // Get the payment token submitted by the form:
        $token = $request->stripeToken;

        // Charge the user's card:

      try
      {
        $charge = \Stripe\Charge::create(array(
          "amount" => Cart::total()*100,
          "currency" => "usd",
          "description" => "Example charge",
          "source" => $token,
        ));
     } 
     catch (\Stripe\Error\Card $e) 
     {
            //The card has been declined
      }

         //Create the order
         Order::createOrder();

         //Redirect the user to some page
         return redirect()->route('checkout.complete');
    }

      public function complete()
    {
        return view('front.complete');
    }

}
