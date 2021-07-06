<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoolService;

use App\Http\Controllers\StripeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PoolServiceController@index');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function () { return view('home'); });


Route::get('/testimonial', function () { return view('testimonial'); });

Route::get('/faq', function() { return view('faq'); });

Route::get('/contact-support', function () { return view('contact'); });

Route::get('/getdemo', function () { return view('get-demo'); });

Route::get('/login', function () { return view('login'); });

Route::get('/free-signup', function () { return view('free-signup'); });

Route::get('/signuppage', function () { return view('signup'); });

Route::get('/signup-code-access', function () { return view('signup-code-access'); });

Route::get('/privacy', function() { return view('privacy'); });

Route::get('/subscription/create', ['as'=>'home','uses'=>'SubscriptionController@index'])->name('subscription.create');
Route::post('order-post', ['as'=>'order-post','uses'=>'SubscriptionController@orderPost']);


Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

