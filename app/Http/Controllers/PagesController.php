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
    public function __construct(){
        $this->middleware(['auth', 'admin_auth']);
    } 

    public function index(){
        if (Session::get('https') != 'https'){
            Session::put('https', 'https');
            return redirect('https://payments-subscriptions.pivoapps.net');
        }
        return redirect('/checkout');
        return view('payments.error');
    }
    
}
