<?php 
/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment.
 *
 * Current usage is:
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

// Get the URL and break it apart
// $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

// Required files
require_once __DIR__.'/config/constants.php';
require_once __DIR__.'/config/config.php';
require_once __DIR__.'/app/web.php';

function __autoload($class_name) {
	
	if (file_exists('./core/'.$class_name.'.php')) {
		require_once './core/'.$class_name.'.php';
	} else if (file_exists('./app/controllers/'.$class_name.'.php')) {
		require_once './app/controllers/'.$class_name.'.php';
	}
    
}