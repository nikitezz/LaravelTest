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
//
Route::get('/', function () {
    return view('welcome');
})->name(
    'welcome'
);

//Route::get('/contact', function(){
//   return view('contact');
//});

//Route::post('send-email',function (){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//});
Route::match(['post','get','put'], '/contact', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
});

Route::prefix('admin')->group(function () {
    Route::get('/posts', function () {
        return 'Posts List';
    });
    Route::get('/post/create', function () {
        return 'Posts create';
    });
    Route::get('/post/{id}/edit', function ($id) {
        return "Edit List $id";
    });
});


//Route::get('/','HomeController@index');
Route::get('/home','HomeControllers@index');

Route::get('/home/create','HomeControllers@create')->name('posts.create');
Route::post('/home','HomeControllers@store')->name('posts.store');

Route::get('/database','HomeControllers@database');

Route::get('/test2','Test\TestController@index');

Route::resource('/posts', 'PostController');

Route::get('/bd','HomeControllers@bd');

//Route::get('/send','ContactController@send');
Route::match(['get','post'],'/send','ContactController@send');
Route::fallback(function(){
    return redirect()->route('welcome');
});


Route::group(['middleware'=>'guest'],function (){
    //Registr
    Route::get('/register','UserController@create')->name('register.create');
    Route::post('/register','UserController@store')->name('register.store');

    //Auth
    Route::get('/login','UserController@loginForm')->name('login.create');
    Route::post('/login','UserController@login')->name('login');
});

    Route::get('/logout','UserController@logout')->name('logout');

Route::group(['middleware'=>'admin'],function (){
    Route::get('/admin','Admin\AdminController@index')->middleware('admin');
});

Route::group(['middleware'=>'admin'],function (){
   Route::get('/sends','UserValidateController@index');
});
