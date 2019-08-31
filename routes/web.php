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

Route::get('/contact', 'ContactController@edit');

Route::post('/admin/register', "Auth\RegisterController@register")->name("register.store");
Route::get('/admin/register', "Auth\RegisterController@index");
//Route::get('/commissions', CommissionsController::class);

// duplicate for SEO
Route::get('/faqs/tag/{tag}', FaqsController::class)->name("faqs");
Route::get('/faqs/{tag}', FaqsController::class);

Route::get('/policy/{policy}', PolicyController::class)->name("policy");

// duplicate for SEO
Route::get('/where/to/use/tapcard/in/{location}/{suburb?}', "AgentController@index")->name("tapcard.points");
Route::get('/where/to/use/in/{location}/{suburb?}', "AgentController@index");

Route::redirect('/where/to/use/tapcard/in/', '/where/to/use/tapcard/in/harare')->name("tapcard.points.default");
Route::redirect('/where/to/use/in/', '/where/to/use/tapcard/in/harare');

Route::redirect('register', 'registrations');
Route::resource('registrations', 'CustomerController');

Route::resource('login', 'LoginController');

Route::middleware(["auth.pin"])->group(function (){

    Route::get('/customer/transactions/{range?}', 'CustomerController@getTransactions')->name("customer.transactions")->where('range', '(.*)');;
    Route::get('/customer/cards', 'CustomerController@getCards')->name("customer.cards");
    Route::post('/customer/card/block', 'CustomerController@blockCard')->name("customer.cards.block");
    Route::get('/customer/kyc', 'CustomerController@kyc')->name("customer.kyc");
    Route::post('/customer/kyc', 'CustomerController@kycUpdate')->name("customer.kyc.update");
    Route::get('/logout', LogoutController::class)->name("customer.logout");

});

Route::get('/view/your/transactions/', ViewController::class);

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
