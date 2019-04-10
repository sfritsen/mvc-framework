<?php 
/*
 *---------------------------------------------------------------
 * Application Enviroment
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * environment that's set.
 *
 * Current selections are
 *
 *     development
 *     testing
 *     production
 *
*/
define('ENVIRONMENT', 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
*/
if (defined('ENVIRONMENT')) {
	switch (ENVIRONMENT)
	{
		case 'development':
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
		break;
	
		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
}

// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

// Start sessions
session_start();

// Required files
require_once __DIR__.'/app/web.php';

function __autoload($class_name) {
	
	if (file_exists('./core/'.$class_name.'.php')) {
		require_once './core/'.$class_name.'.php';
	} else if (file_exists('./app/controllers/'.$class_name.'.php')) {
		require_once './app/controllers/'.$class_name.'.php';
	}
    
}

// spl_autoload_register(function ($class) {
//     if (file_exists(__DIR__.'/core/'.$class_name.'.php')) {
// 		require_once __DIR__.'/core/'.$class_name.'.php';
// 	} else if (file_exists(__DIR__.'/app/controllers/'.$class_name.'.php')) {
// 		require_once __DIR__.'/app/controllers/'.$class_name.'.php';
// 	}
// });

// function my_autoload($class_name) {

// 	if (file_exists(__DIR__.'/core/'.$class_name.'.php')) {
// 		require_once __DIR__.'/core/'.$class_name.'.php';
// 	} else if (file_exists(__DIR__.'/app/controllers/'.$class_name.'.php')) {
// 		require_once __DIR__.'/app/controllers/'.$class_name.'.php';
// 	}
   
// }
// spl_autoload_register('my_autoload');