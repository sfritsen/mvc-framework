<?php
/**
 * =========================================================
 * Web Routes
 * =========================================================
 *
 * INDEX ROUTE
 * You will need to setup a base route that will act as the index
 * for your application.  This is indicated by the index.php route.
 * 
 * @param string Route - index.php or /index.php
 * @param string Controller@function
*/
Route::get('/index.php', 'Test@index');

/**
 * =========================================================
 * Custom Routes
 * =========================================================
 *
 * These are your routes for the application.
 * 
 * @param string Route - Leading backslash is optional
 * @param string Controller@function
*/
Route::get('/views',        'Test@test1');
Route::get('/variables',    'Test@test2');
Route::get('/segments',     'Test@test3');
