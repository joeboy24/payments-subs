<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Models\Homepage;
// use Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

// usage inside a laravel route
// Route::get('/', function() {
//     $img = Image::make('foo.jpg')->resize(300, 200);
//     return $img->response('jpg');
// });



Route::get('/', 'PagesController@index'); 
Route::get('/pass-intent', 'PagesController@passIntent'); 

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes(['register' => false]);

Route::get('checkout','CheckoutController@checkout');
Route::post('checkout','CheckoutController@afterpayment')->name('payments.checkout-page');