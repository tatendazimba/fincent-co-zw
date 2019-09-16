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

use App\Http\Controllers\Repositories\PostsRepository;
use App\Http\Controllers\Repositories\TagRepository;
use App\Post;
use App\Tag;

Route::get('/', 'HomeController@index')->name('home');
Route::redirect('/home', '/exclusive/members');
Route::get('/contact', 'ContactController@edit');
Route::get('/team', 'TeamController@index');
Route::get('/trading', 'TradingController@index')->name("trading.index");
Route::get('/exchange', 'ExchangeController@index')->name("exchange.index");
Route::get('/micro-finance', 'MicrofinanceController@index')->name("microfinance.index");
Route::get('/corporate-services', 'CorporateController@index')->name("corporate.index");
Route::get('/exclusive/members/{tag?}', "BlogsController@index")->name("members.index");

Route::middleware(["auth"])->prefix('admin')->group(function(){
    Route::resource("content", ADMIN\StoryController::class);
    Route::resource("stories", ADMIN\StoryController::class);
    Route::resource("tags", ADMIN\TagController::class);
    Route::resource("images", ADMIN\ImageController::class);

    Route::post("/add/tag/{story}/{tag}", ADMIN\AddTagController::class)->name("add.tag");
    Route::post("/remove/tag/{story}/{tag}", ADMIN\DeleteTagController::class)->name("remove.tag");
});

Route::middleware(["auth"])->group(function(){
    Route::get("/exclusive/content/{story}", StoryController::class)->name("exclusive.content.show");
});

Route::get("/stories/per/{tag}", function(Tag $tag){

    $repo = new PostsRepository(new Post(), new Tag());
    $tagsRepo = new TagRepository(new Tag());

    $stories = $repo->find($tag->name);
    $allTags = $tagsRepo->all();

    return view("stories", compact("stories", "allTags"));

})->name("stories.per");

Route::middleware(["auth"])->group(function (){

});


Auth::routes();

