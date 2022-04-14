<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

//Route::get('/', function () {
//
//    return view('pages/intro', ["payload" => "hello from routes/web"]);
//});

Route::get('/', "IntroPageController@index");

//Route::get('/about', function () {
//	return view('pages/about');
//});

Route::view("/about", "pages.about");

Route::get('/services', "ServicesPageController@index")->name("services");

Route::get('/form', function () {
    return view('pages/form');
});

Route::post('/form', function (Request $request) {
    //var_dump($request);
    return view('pages/form-success');
});

Route::get('/advantages', [ContactsController::class, "index"]);

Route::redirect('/redirect-news', '/news');

Route::get('/news', function () {
    return view('pages/news');
});

Route::get('/news/all', function () {
    return "all news page";
});

Route::get('/news/{id}', function ($id) {
    return "$id - news page with id = $id";
});



//Route::any('/', function () {
//    return "any";
//});

//Route::get('/greeting', function () {
//    return '<h1>Hello World</h1>';
//});
