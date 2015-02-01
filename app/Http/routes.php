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
Route::get('login',   ['uses' => 'Auth\AuthController@getLogin',  'as' => 'session.create']);
Route::post('login',  ['uses' => 'Auth\AuthController@postLogin', 'as' => 'session.store']);
Route::get('logout',  ['uses' => 'Auth\AuthController@getLogout', 'as' => 'session.destroy']);