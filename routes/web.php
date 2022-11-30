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


// Route::view('form', 'form');
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


Route::view("form", "form")->middleware('hlloo');


// Sessions :::::::::::::::-------:

route::get("set_session", "App\Http\Controllers\user@set_session");
route::get("get_session", "App\Http\Controllers\user@get_session");
route::get("remove_session", "App\Http\Controllers\user@remove_session");
route::get("check_session", "App\Http\Controllers\user@check_session");

route::view("login", "login");
route::post("loginformsubmitt", "App\Http\Controllers\user@loginformsubmitt");



route::get("select", "App\Http\Controllers\dbtest@select");
route::get("insert", "App\Http\Controllers\dbtest@insert");
route::get("update", "App\Http\Controllers\dbtest@update");
route::get("delete", "App\Http\Controllers\dbtest@delete");




route::get("heyogin", "App\Http\Controllers\heylogin@index");
route::view("notauth", "notaccess");





// Route::group(['middleware' => ['usercheck']], function(){
//     Route::view('news1', 'hello.news1');
//     Route::view('news2', 'hello.news2');

// });


Route::get("selectdata", 'App\Http\Controllers\heyhlo@selectdata');
Route::get("hlouser", 'App\Http\Controllers\userprofile@hlouser');
Route::get("addnewdata", 'App\Http\Controllers\userprofile@insertusingmodel');
Route::get("updateusingmodel", 'App\Http\Controllers\userprofile@updateusingmodel');
Route::get("deletusingmodel", 'App\Http\Controllers\userprofile@deletusingmodel');



