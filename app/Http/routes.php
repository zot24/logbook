<?php

/**
 * Home
 *
 * Route to the home page
 */
Route::get('/', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'home']);

/**
 * Authentication
 *
 * Route to the login, logout
 */
Route::get('login', ['uses' => 'Auth\AuthController@getLogin',   'as' => 'session.create']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'session.store']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'session.destroy']);

/**
 * Registration
 *
 * Route to the register
 */
Route::get('register', ['uses' => 'Auth\AuthController@getRegister',   'as' => 'register.create']);
Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'register.store']);

/**
 * Records
 *
 * Route to index, create, store, show, edit, update, delete and destroy records
 */
Route::group(['middleware' => 'auth'], function () {
    /*
     * Records routes
     */
    Route::resource('records', 'RecordsController');
    Route::get('records/{records}/delete', ['uses' => 'RecordsController@delete', 'as' => 'records.delete']);

    /*
     * Aiports routes
     */
    Route::resource('airports', 'AirportsController');
    Route::get('airports/{airports}/delete', ['uses' => 'AirportsController@delete', 'as' => 'airports.delete']);

    /*
     * Aircrafts routes
     */
    Route::resource('aircrafts', 'AircraftsController');
    Route::get('aircrafts/{aircrafts}/delete', ['uses' => 'AircraftsController@delete', 'as' => 'aircrafts.delete']);

    /*
     * Profile routes
     */
    Route::resource('profile', 'ProfileController');
    Route::get('profile/{profile}/delete', ['uses' => 'ProfileController@delete', 'as' => 'profile.delete']);
});
