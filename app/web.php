<?php

/**
 * Web routes.
 *
 * You will need to setup a base route that will act as the index
 * for your application.  This is indicated by a / route.
 * 
 * @param Controller
 * @param Function
 */
Route::get('/', 'Login@index');
Route::get('about1', 'About@test1');
Route::get('about2', 'About@test2');

Route::get('session', 'Login@set_session');
