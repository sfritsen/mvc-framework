<?php

/**
 * Web Routes.
 *
 * INDEX ROUTE
 * You will need to setup a base route that will act as the index
 * for your application.  This is indicated by the index.php route.
 * 
 * 
 * @param Route index.php
 * @param Controller@Function
 */
Route::get('index.php', 'Login@index');

/**
 * Custom Routes.
 *
 * These are your routes for the application.
 * 
 * @param Route Backslash is optional
 * @param Controller@Function
 */
Route::get('/about1', 'About@test1');
Route::get('/about2', 'About@test2');
Route::get('/about3', 'About@test3');

Route::get('/session', 'Login@set_session');
