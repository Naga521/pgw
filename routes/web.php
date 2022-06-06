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



//Route::get('/test', [UserController::class, 'index'])->name('users.index');
Route::group(['middleware' => ['auth']], function(){
    Route::get('/user', 'UserController@index')->name('users.index');
    Route::get('/my_page2', 'My_pageController@index');
    Route::post('/my_page2', 'My_pageController@my_page_update');
     Route::get('/my_page2/edit', 'My_pageController@edit');
    //Route::post('/users', 'UserController@store');
    Route::put('/user/create', 'UserController@create');
    //Route::get('/users/{post}', 'UserController@show');
    //Route::post('/posts/{post}', 'UserController@update');
    //Route::delete('/posts/{post}', 'UserController@delete');
    //Route::get('/posts/{post}/edit', 'UserController@edit');
    Route::get('/chats/{chats}', 'ChatsController@show');
    Route::get('/users/{user}', 'UserController@show');
    Route::get('/dms/{user_id}/{user}', 'DmController@show');
    Route::get('/search', 'UserController@store');
    Route::get('/my_page2/{user}/edit', 'UserController@edit');
Route::put('/my_page2/{user}', 'UserController@update');
});
