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

Route::get('/', function () {
    return view('pages.welcome');
});

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

Route::get('/invite', 'PageController@invite');

Route::post('sendmail', 'PageController@sendmail');
