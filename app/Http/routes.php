<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PageController@welcome');

Route::get('Admin/{id}', function ($id) {
    $Admin = App\Admin::find($id);
    echo $Admin->name;
});

Route::auth();

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

Route::get('/home', 'PageController@index');

Route::get('/dashboard', 'PageController@dashboard');

Route::get('/notifications', 'PageController@notifications');

Route::resource('posts', 'PostController');

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);


Route::get('posts/{id}','PostController@show');

Route::post('flag/{id}','PostController@flag');

Route::post('like/{id}','PostController@like');

Route::get('moderate','ModeratorController@index');

Route::post('remove/{id}','ModeratorController@destroy');

Route::get('dismiss/{id}','ModeratorController@dismiss');

Route::get('deleteSup/{id}','ModeratorController@removeSup');

Route::post('supportReply/{id}','ModeratorController@reply');

Route::post('support','PageController@supportPost');

//comments
