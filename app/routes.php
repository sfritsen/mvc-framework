<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * ---------------------------------------------------------------------
 * Web Routes
 * ---------------------------------------------------------------------
 *
 * INDEX ROUTE
 * You will need to setup a base route that will act as the index
 * or starting point for your application.  This is indicated 
 * by the index.php route.
 * 
 * @param string Route - index.php or /index.php
 * @param string Controller@function
*/
$route->get('/index.php', 'Welcome@index');
// Route::get('/index.php', 'Welcome@index');

/**
 * ---------------------------------------------------------------------
 * Custom Routes
 * ---------------------------------------------------------------------
 *
 * These are your routes for the application.
 * 
 * @param string Route - Leading backslash is optional
 * @param string Controller@function
 * 
 * Example route: Route::get('/myroute, 'Controller@function');
*/

// Views testing
$route->get('/index_test', 'Test_views@index');
// Route::get('/index_test', 'Test_views@index');
// Route::get('/data_in_view', 'Test_views@data_in_view');
// Route::get('/variables', 'Test_views@constant_variable');
// Route::get('/multipleviews', 'Test_views@multipleviews');

// // URI testing
// Route::get('/segments', 'Test_uri@seg_test1');
// Route::get('/seg_pass1', 'Test_uri@seg_pass1');
// Route::get('/seg_pass2', 'Test_uri@seg_pass2');
// Route::get('/redirect_helper', 'Test_uri@redirect_helper');
// Route::get('/redirect_landing', 'Test_uri@redirect_landing');

// // Session testing
// Route::get('/session_set', 'Test_session@session_test');
// Route::get('/session_single', 'Test_session@set_single');
// Route::get('/session_check', 'Test_session@session_test2');
// Route::get('/session_destroy', 'Test_session@session_test3');

// // Error testing
// Route::get('/error1', 'Test_errors@error1');
// Route::get('/dbtest', 'Test_errors@dbtest');

// // Form testing
// Route::get('/csrf_test', 'Test_forms@csrf_test');
// Route::post('/csrf_test_submit', 'Test_forms@csrf_test_submit');
$route->get('/csrf_test', 'Test_forms@csrf_test');
$route->post('/csrf_test_submit', 'Test_forms@csrf_test_submit');

// // Helpers testing
// Route::get('/epoch', 'Test_helpers@epoch');
// Route::get('/date2epoch', 'Test_helpers@date2epoch');
// Route::get('/baseurltest', 'Test_helpers@baseurltest');
// Route::get('/mytesthelper', 'Test_helpers@mytesthelper');