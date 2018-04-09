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

Route::get('/', function () {
    return redirect()->route('login');

});
Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::group(['middleware'=>'revalidate'],function(){
        Route::get('/profile', function () {
            return view('layouts.profile')->with('user',$user);
        
        });
        Route::get('/home', 'PostController@index')->name('post.homeindex');
        // Route::get('/user/{users}','UserController@edit')->name('user.profile');
        Route::get('/post/create','PostController@create')->name('post.create');
        Route::get('/post','PostController@index')->name('post.index');
        Route::post('/post/create','PostController@store')->name('post.store');
        Route::get('/post/{posts}','PostController@show')->name('post.show');
        Route::get('/post/{posts}/edit','PostController@edit')->name('post.edit');
        Route::post('/post/{posts}/edit','PostController@edit')->name('post.toedit');
        Route::patch('/post/{posts}/edit','PostController@update')->name('post.update');
        Route::delete('/post/{posts}/delete','PostController@destroy')->name('post.destroy');
        Route::post('/post/{posts}/comment','PostCommentController@store')->name('post.comment.store');
    });
});
