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

Route::get('/', ['as' => 'home', function () {
    return view('pages.home.home');
}]);

Route::get('/login', ['as' => 'login', function () {
    return view('pages.login.login');
}]);

Route::group(['as' => 'campaings', 'prefix' => 'campanas', 'namespace' => 'App'], function () {
    Route::get('/', function () {
        return view('pages.campaing.campaing');
    });
    Route::post('generar', 'CampaingController@store');
});

Route::group(['as' => 'users', 'prefix' => 'usuarios', 'namespace' => 'App'], function () {
    Route::get('/', function () {
        return view('pages.user.user');
    });
});
