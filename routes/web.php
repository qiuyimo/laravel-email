<?php

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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email/raw', 'EmailController@raw');
Route::get('/email/template', 'EmailController@template');
Route::get('/email/mailable', function () {
    Mail::to('530004000@qq.com')->send(new \App\Mail\TestEmail());
    return 'ok';
});
