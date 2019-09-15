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

use App\Http\Middleware\PinAuth;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@edit');
Route::get('/team', 'TeamController@index');
Route::get('/trading', 'TradingController@index')->name("trading.index");
Route::get('/exchange', 'ExchangeController@index')->name("exchange.index");
Route::get('/micro-finance', 'MicrofinanceController@index')->name("microfinance.index");
Route::get('/corporate-services', 'CorporateController@index')->name("corporate.index");

Route::middleware(["auth"])->group(function (){

    Route::get('/blog/', function() {

    })->name("blog.index");;

});

Auth::routes();

