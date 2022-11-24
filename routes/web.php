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

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/contact/{id}/', function ($id) {
    echo $id;
    return view('contact');
});


Route::view('/index', 'home');


// php artisan serve 

Route::get('hey/{id}', 'App\Http\Controllers\user@hey');



Route::view('sidebar', 'home');
Route::view('sidebar2', 'home1');

 
Route::view('tempx', 'temp1');
Route::view('tempy', 'temp2');


Route::view('form', 'form');
Route::post('thisisaction', 'App\Http\Controllers\form@thisismyform');


// Route::view('web', 'testing.newtestweb');

Route::get('/web', function () {
    return view('testing.newtestweb', array('name'=>'kriss'));
});

Route::get('jjj/{id}', "App\Http\Controllers\Info@info");


// Route::view('news1', 'hello.news1')->middleware('hello');

Route::view('denide', 'denide');


Route::group(['middleware' => ['usercheck']], function(){
    Route::view('news1', 'hello.news1');
    Route::view('news2', 'hello.news2');

});





// Sessions :::::::::::::::-------:

route::get("set_session", "App\Http\Controllers\user@set_session");
route::get("get_session", "App\Http\Controllers\user@get_session");
route::get("remove_session", "App\Http\Controllers\user@remove_session");
route::get("check_session", "App\Http\Controllers\user@check_session");

route::view("login", "login");
route::post("loginformsubmitt", "App\Http\Controllers\user@loginformsubmitt");







