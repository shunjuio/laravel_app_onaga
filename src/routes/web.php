<?php

use App\Http\Middleware\HelloMiddleware;
use App\Mail\TestMail;
use app\Http\Controllers\Mail\MailController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware([HelloMiddleware::class])->group(function (){
    Route::get('/hello/clear', 'HelloController@clear');
    Route::get('/hello', 'HelloController@index')->name('hello');
    Route::post('/hello', 'HelloController@index');
    Route::get('/hello/{id}', 'HelloController@index');
//    Route::post('/hello', 'HelloController@send');
//    Route::get('/hello/{person}', 'HelloController@index');
    Route::get('/hello/other', 'HelloController@other');
//    Route::post('/hello/other', 'HelloController@other');
    Route::get('/hello/json', 'HelloController@json');
    Route::get('/hello/json/{id}', 'HelloController@json');
    Route::get('/hello/{id}/{name}', 'HelloController@save');
});

Route::namespace('Sample')->group(function (){
    Route::get('/sample', 'SampleController@index')->name('sample');
    Route::get('/sample/other', 'SampleController@other');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//メール送信確認ルーディング
Route::get('/index', 'TestMailController@index');
Route::get('/test', 'TestMailController@send');

//Route::get('/mail', function (){
//        return new \App\Mail\TestMail();
//        });
