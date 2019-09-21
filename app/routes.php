<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');
/**
 * =========================================================
 * Web Routes
 * =========================================================
 *
 * INDEX ROUTE
 * You will need to setup a base route that will act as the index
 * or starting point for your application.  This is indicated 
 * by the index.php route.
 * 
 * @param string Route - index.php or /index.php
 * @param string Controller@function
*/
Route::get('/index.php',        'Welcome@index');

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

// Views testing
Route::get('/index_test',       'Test_views@index');
Route::get('/data_in_view',     'Test_views@data_in_view');
Route::get('/variables',        'Test_views@constant_variable');

// URI testing
Route::get('/segments',         'Test_uri@seg_test1');

// Session testing
Route::get('/session_set',      'Test_session@session_test');
Route::get('/session_single',   'Test_session@set_single');
Route::get('/session_check',    'Test_session@session_test2');
Route::get('/session_destroy',  'Test_session@session_test3');

// Error testing
Route::get('/error1',           'Test_errors@error1');
Route::get('/dbtest',           'Test_errors@dbtest');