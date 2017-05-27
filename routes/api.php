<?php

use Illuminate\Http\Request ;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'sessions'], function() {
    Route::get('/get', 'SessionController@get');
    Route::post('/create', 'SessionController@create');
});

Route::group(['prefix' => 'benefits'], function() {
    Route::get('/', 'BenefitController@index');
    Route::get('/get/{benefit_id}', 'BenefitController@get');

    Route::get('/created', ['middleware' => 'jwt.auth', 'uses' => 'BenefitController@created']);
    Route::get('/created/{benefit_id}', ['middleware' => 'jwt.auth', 'uses' => 'BenefitController@getCreated']);

    Route::post('/redeem', ['middleware' => 'jwt.auth', 'uses' => 'BenefitController@redeem']);
});

Route::group(['prefix' => 'campaigns'], function() {
    Route::get('/', 'CampaignController@index');
    Route::get('/{campaign_id}', 'CampaignController@get');
    Route::post('/validate', ['middleware' => 'jwt.auth', 'uses' => 'CampaignController@validateCampaign']);
});