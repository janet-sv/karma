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
    return view('pages.home.home');
});

Route::group(['as' => 'campaings.', 'prefix' => 'campanas', 'namespace' => 'App'], function () {
    Route::get('/', function () {
        return view('pages.campaing.campaing');
    });
});

Route::group(['as' => 'campaings.', 'prefix' => 'usuarios', 'namespace' => 'App'], function () {
    Route::get('/', function () {
        return view('pages.user.user');
    });
});


