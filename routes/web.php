<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('blade_files.index');
});
Route::get('/termsandconditions', function () {
    return view('blade_files.termsandconditions');
});
Route::get('/privacypolicy', function () {
    return view('blade_files.privacypolicy');
});
Route::get('/refundpolicy', function () {
    return view('blade_files.refundpolicy');
});
Route::get('/about', function () {
    return view('blade_files.about');
});
Route::get('/howtoplay', function () {
    return view('blade_files.howtoplay');
});



if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
   error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/add/transaction','\App\Http\Controllers\PayInstantController@process');
Route::post('/add/transaction/pi/checkout','\App\Http\Controllers\PayInstantController@index');
Route::post('/pg/PayInstant/callback','\App\Http\Controllers\PayInstantController@callback')->name('PayInstant.callback');
Route::post('/pg/PayInstant/webhook','\App\Http\Controllers\PayInstantController@webhookResponses');
Route::post('/pg/PayInstant/transactionStatus','\App\Http\Controllers\PayInstantController@transactionStatus')->name('PayInstant.transactionStatus');

Route::get('/error', function () {
  return view('payments.error');
});
Route::get('/add/transaction/fail', function () {
  return view('payments.error');
});
Route::get('/add/transaction/success', function () {
    return view('payments.success');
});
Route::get('/add/transaction/waiting', function () {
    return view('payments.pending');
});
