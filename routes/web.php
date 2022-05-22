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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth']], function(){
    Route::get('/user', 'UserController@index');
    Route::get('/my_page2', 'My_pageController@index');
Route::post('/my_page2', 'My_pageController@my_page_update');
    //Route::post('/users', 'UserController@store');
    Route::put('/user/create', 'UserController@create');
    //Route::get('/users/{post}', 'UserController@show');
    //Route::post('/posts/{post}', 'UserController@update');
    //Route::delete('/posts/{post}', 'UserController@delete');
    //Route::get('/posts/{post}/edit', 'UserController@edit');
    Route::get('/chats/{chats}', 'ChatsController@show');
    Route::get('/', 'UserController@index');
});
