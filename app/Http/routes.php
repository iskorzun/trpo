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
    return view('welcome');
});

Route::group(['middleware' => 'auth', 'as' => 'ref.'], function() {
    get('/main', ['uses' => 'MainController@index', 'as' => 'main']);

    // admin's routes
    get('/user', ['uses' => 'UserController@index', 'as' => 'user']);
    get('/city', ['uses' => 'CityController@index', 'as' => 'city']);
    get('/category', ['uses' => 'CategoryController@index', 'as' => 'category']);

    // client's routes
    get('/place', ['uses' => 'PlaceController@index', 'as' => 'place']);
    get('/place/{id}', ['uses' => 'PlaceController@show', 'as' => 'place.show']);
    get('/payment', ['uses' => 'PaymentController@index', 'as' => 'payment']);
    get('/payment/{id}', ['uses' => 'PaymentController@show', 'as' => 'payment.show']);
    post('/payment-system', ['uses' => 'PaymentController@pay', 'as' => 'payment.pay']);
    post('/payment-account', ['uses' => 'PaymentController@update', 'as' => 'payment.update']);
    get('/profile', ['uses' => 'UserController@edit', 'as' => 'profile']);
    post('/profile/{id}', ['uses' => 'UserController@update', 'as' => 'profile.update']);

    // director's routes
    get('/report', ['uses' => 'ReportController@index', 'as' => 'report']);
    post('/report/show', ['uses' => 'ReportController@show', 'as' => 'report.show']);

});