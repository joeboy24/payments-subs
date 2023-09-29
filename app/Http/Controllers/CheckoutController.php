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
        $pmt_plan = $request->input('pmt_plan');
        $amt_due = auth()->user()->amount;
        $amount = $pmt_plan * $amt_due;
        Session::put('pmt_plan', $pmt_plan);
        Session::put('amt_due', $amt_due);
        Session::put('amount', $amount);

        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51NvMfoGUgSRZPj4WzpuqTTQTXIPOaQL4eXTTWDutFlgRiVlmXt1XsKpcswXIgQt7yQwFWk1aVwVR5sdl4BxNgzXV00fSWwpLIN');
        // \Stripe\Stripe::setApiKey('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');
      		
		$amount = 100;
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

        // $user = User::find(auth()->user()->id);
        // $user->plan = $pmt_plan;
        // $user->status = $pmt_plan * $amt_due;
        // $user->save();

		return view('payments.checkout-page',compact('intent'));

    }

    public function afterPayment()
    {

        $user = User::find(auth()->user()->id);
        $user->plan = session('pmt_plan');
        $user->status = session('pmt_plan') * session('amt_due');
        $user->save();

        return view('payments.success');
        echo 'Payment Has been Received';
    }
}