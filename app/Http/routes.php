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
    Route::get('records', ['uses' => 'RecordsController@index',              'as' => 'records.index']);
    Route::get('records/create', ['uses' => 'RecordsController@create',      'as' => 'records.create']);
    Route::post('records', ['uses' => 'RecordsController@store',             'as' => 'records.store']);
    Route::get('records/{id}', ['uses' => 'RecordsController@show',          'as' => 'records.show']);
    Route::get('records/{id}/edit', ['uses' => 'RecordsController@edit',     'as' => 'records.edit']);
    Route::put('records/{id}', ['uses' => 'RecordsController@update',        'as' => 'records.update']);
    Route::patch('records/{id}', ['uses' => 'RecordsController@update',      'as' => 'records.update']);
    Route::get('records/{id}/delete', ['uses' => 'RecordsController@delete', 'as' => 'records.delete']);
    Route::delete('records/{id}', ['uses' => 'RecordsController@destroy',    'as' => 'records.destroy']);
});
