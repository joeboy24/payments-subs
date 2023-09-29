<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DateTime;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class PagesController extends Controller
{
    //
    public function __construct() {
        $this->middleware(['auth', 'admin_auth']);
    } 

    public function index() {
        if (Session::get('https') != 'https'){
            Session::put('https', 'https');
            return redirect('https://payments-subscriptions.pivoapps.net');
        }
        // return redirect('/checkout');
        // return env($SKey);
        return view('payments.checkout-page-null');
    }

    public function passIntent(Request $request) {

        if (auth()->user()->status != 'no') {
            return redirect('/')->with('notification', '$'.number_format(auth()->user()->status, 2).' already paid');
        }

        $pmt_plan = $request->input('pmt_plan');
        $amt_due = auth()->user()->amount;

        if ($pmt_plan > 1) {
            $init_total = $pmt_plan * $amt_due;
            $amount = ($init_total) - (0.125 * $init_total);
        } else {
            $amount = $pmt_plan * $amt_due;
        }

        // return $amount;
        Session::put('pmt_plan', $pmt_plan);
        Session::put('amt_due', $amt_due);
        Session::put('amount', $amount);

        return redirect('/checkout');
    }
    
}
