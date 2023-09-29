<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use app\Models\User;
use Session;
use Auth;
use Exception;
 
class CheckoutController extends Controller
{
      		
    public function __construct(){
        $this->middleware(['auth', 'admin_auth']);
    } 

    public function checkout(Request $request)
    {   

        if (session('amount') == '' || auth()->user()->status != 'no') {
            return redirect('/')->with('notification', '$'.number_format(auth()->user()->status, 2).' already paid');
        }
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('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');
        // \Stripe\Stripe::setApiKey('sk_test_51NvMfoGUgSRZPj4WzpuqTTQTXIPOaQL4eXTTWDutFlgRiVlmXt1XsKpcswXIgQt7yQwFWk1aVwVR5sdl4BxNgzXV00fSWwpLIN');
        // \Stripe\Stripe::setApiKey('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');
      		
		$amount = session('amount');
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'PivoApps Payments',
			'amount' => $amount,
			'currency' => 'USD',
			'description' => 'Payment from '.auth()->user()->company,
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('payments.checkout-page', compact('intent'));

    }


    public function afterPayment()
    {

        $user = User::find(auth()->user()->id);
        $user->plan = session('pmt_plan');
        $user->status = session('amount');
        $user->save();

        Session::put('amount', '');
        Session::put('pmt_plan', '');
        Session::put('amt_due', '');

        return view('payments.success');
        // 'Payment Has been Received';
    }
}