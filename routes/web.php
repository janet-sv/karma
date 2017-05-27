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

Route::get('/', ['as' => 'landing', function () {
    return view('landing.landing');
}]);

Route::get('/dashboard', ['as' => 'home', function () {
    return view('pages.home.home');
}]);

Route::get('/login', ['as' => 'login', function () {
    return view('pages.login.login');
}]);

Route::group(['as' => 'campaigns.', 'prefix' => 'campanas', 'namespace' => 'Organization'], function () {
    Route::get('/', ['as' => 'index', 'uses'=> 'CampaignController@index']);
    Route::get('/crear', ['as' => 'create', function () {
        return view('pages.campaign.create');
    }]);
    Route::post('generar', 'CampaignController@store');
});

Route::group(['as' => 'users', 'prefix' => 'usuarios', 'namespace' => 'App'], function () {
    Route::get('/', function () {
        return view('pages.user.user');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
